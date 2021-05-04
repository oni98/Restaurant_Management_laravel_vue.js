<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row card-header">
                <div class="col-md-8">
                    <h4 class="card-title">Breakfast Menu</h4>
                </div>
                <div class="input-group col-md-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Show</label>
                    </div>
                    <select class="form-control default-select" id="sel2" value="paginate.limit"
                        @change="onChange($event)">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text">Entries</label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div v-if="allBreakfast != 0"
                                        class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="allBreakfast"
                                            required="" @click="updateAllStatus('breakfast')" checked>
                                        <label class="custom-control-label" for="allBreakfast"></label>
                                    </div>
                                    <div v-else class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="allBreakfast"
                                            required="" @click="updateAllStatus('breakfast')">
                                        <label class="custom-control-label" for="allBreakfast"></label>
                                    </div>
                                </th>
                                <th><strong>SL.</strong></th>
                                <th><strong>Food Code</strong></th>
                                <th><strong>Image</strong></th>
                                <th><strong>Food Name</strong></th>
                                <th><strong>Price</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(food,index) in foodFilter('breakfast')" :key="food.id">
                                <td>
                                    <div v-if="food.status != 0"
                                        class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" :id="'breakfast'+index"
                                            required="" @click="updateStatus(food.id)" checked>
                                        <label class="custom-control-label" :for="'breakfast'+index"></label>
                                    </div>
                                    <div v-else class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" :id="'breakfast'+index"
                                            required="" @click="updateStatus(food.id)">
                                        <label class="custom-control-label" :for="'breakfast'+index"></label>
                                    </div>
                                </td>
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ food . food_code }}</td>
                                <td v-if="food.image != 0">
                                    <div class="d-flex align-items-center">
                                        <img :src="'/storage/menu/'+food.image" class="rounded-lg" width="50"
                                            height="50" alt="">
                                    </div>
                                </td>
                                <td v-else>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/default.png') }}" class="rounded-lg" width="50"
                                            height="50" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div>@{{ food . title }}</div>
                                    <div>@{{ food . subtitle }}</div>
                                </td>
                                <td>@{{ food . price }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
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
