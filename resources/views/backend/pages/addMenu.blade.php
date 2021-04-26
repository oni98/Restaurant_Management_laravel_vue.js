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
                                <select multiple="" multiple data-live-search="true" data-actions-box="true" name="category" class="form-control default-select" id="sel2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Sub Title</label>
                                <input type="text" name="sub_title" class="form-control" placeholder="Food Extention">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Food Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Price</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">৳</div>
                                    </div>
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
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

            },
            methods: {
                addMenu: function(event) {
                    let ref = this;
                    let url = "/api/admin/add_menu";
                    let data = new FormData(event.target);
                    axios.post(url, data).then(function(response) {

                    })
                }
            }
        });
    </script>
@endpush
