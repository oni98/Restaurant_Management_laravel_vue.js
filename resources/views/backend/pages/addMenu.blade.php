@extends('backend.layouts.app')
@section('title', 'Admin Dashboard')
@section('main_content')
    <div class="col-xl-12 col-lg-12" id="add_menu">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Food</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form @submit.prevent="addMenu" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <select multiple="" multiple data-live-search="true" data-actions-box="true" name="category[]" class="selectpicker form-control default-select" id="sel2">
                                    <option value="breakfast">Breakfast</option>
                                    <option value="brunch">Brunch</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                                <span class="text-danger pl-2" v-if="errors.category != ''">
                                    @{{ errors.category }}
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sub Title</label>
                                <input type="text" name="subtitle" class="form-control" placeholder="Food Extention">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Food Name">
                                <span class="text-danger pl-2" v-if="errors.title != ''">
                                    @{{ errors.title }}
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">৳</div>
                                    </div>
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <span class="text-danger pl-2" v-if="errors.price != ''">
                                    @{{ errors.price }}
                                </span>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Image</label>
                                <input type="text" name="image" class="form-control" placeholder="Add image">
                                <span class="text-danger pl-2" v-if="">
                                    @{{  }}
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js_script')
    <script>
        var app = new Vue({
            el: "#add_menu",
            data: {
                errors: {
                    category: '',
                    title: '',
                    price: '',
                }
            },
            methods: {
                addMenu: function(event) {
                    let ref = this;
                    let url = "/api/admin/add_menu";
                    let data = new FormData(event.target);
                    axios.post(url, data).then(function(response) {
                        value = response.data;
                        if(value.error){
                            ref.errors.category = '';
                            ref.errors.title = '';
                            ref.errors.price = '';

                            if(value.data.category)
                                ref.errors.category = value.data.category[0];

                            if(value.data.title)
                                ref.errors.title = value.data.title[0];

                            if(value.data.price)
                                ref.errors.price = value.data.price[0];

                            return;
                        }
                        if(response.data.code==201){
                            swal("Done", "Successfully added food in Menu", "success", {button: "OK",timer: 2000});
                            $('.selectpicker').selectpicker('val', '');
                            //$('.selectpicker').selectpicker('refresh');
                            event.target.subtitle.value = '',
                            event.target.title.value = '',
                            event.target.price.value = ''
                        }
                    });
                }
            }
        });
    </script>
@endpush
