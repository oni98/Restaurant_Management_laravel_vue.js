@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('main_content')
    <div class="container-fluid" id="available_foods">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Exam Toppers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong>SL.</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Title</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(food,index) in foods" :key="food.id">
                                        <td v-if="food.status != 0">
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="" @click="updateStatus" checked>
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td v-else>
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="" @click="updateStatus">
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td>@{{ index+1 }}</td>
                                        <td v-if="food.image != 0">
                                            <div class="d-flex align-items-center">
                                                <img :src="'/storage/menu/'+food.image" class="rounded-lg" width="100" height="100" alt="">
                                            </div>
                                        </td>
                                        <td v-else>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('assets/img/default.png')}}" class="rounded-lg" width="100" height="100" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div>@{{ food.title }}</div>
                                            <div>@{{ food.subtitle }}</div>
                                        </td>
                                        <td>@{{ food.price }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js_script')
<script>
    let app = new Vue({
        el:'#available_foods',
        data: {
            foods: [],
        },
        methods: {
            getMenu: function(){
                let ref = this;
                let url = '/api/admin/menu/list';
                axios.get(url).then(function(response){
                    ref.foods = response.data.data;
                });
            },
            updateStatus: function(id) {
                let ref = this;
                console.log(event.target.checked);
                // let url = '/api/admin/taxes/status/' + id;
                // let data = new FormData();
                // data.append("status", event.target.value);
                // data.append("_method", "PUT");
                // axios.post(url, data).then(function(response) {
                //     let data = response.data;
                //     if (data.code == 201) {
                //         ref.getTax();
                //     }
                // });
            },
        },
        created: function(){
            this.getMenu();
        }
    })
</script>

@endpush
