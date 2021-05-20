<div class="row" id="dinner">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dinner Menu</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:50px;">
                                    <div v-if="allDinner != 0" class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="allDinner" required=""
                                            @click="updateAllStatus('dinner')" checked>
                                        <label class="custom-control-label" for="allDinner"></label>
                                    </div>
                                    <div v-else class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" id="allDinner" required=""
                                            @click="updateAllStatus('dinner')">
                                        <label class="custom-control-label" for="allDinner"></label>
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
                            <tr v-for="(food,index) in foodFilter('dinner')" :key="food.id">
                                <td>
                                    <div v-if="food.status != 0" class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" :id="'dinner'+index" required=""
                                            @click="updateStatus(food.id)" checked>
                                        <label class="custom-control-label" :for="'dinner'+index"></label>
                                    </div>
                                    <div v-else class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                        <input type="checkbox" class="custom-control-input" :id="'dinner'+index" required=""
                                            @click="updateStatus(food.id)">
                                        <label class="custom-control-label" :for="'dinner'+index"></label>
                                    </div>
                                </td>
                                <td>@{{ index + 1 }}</td>
                                <td>@{{ food.food_code }}</td>
                                <td v-if="food.image != 0">
                                    <div class="d-flex align-items-center">
                                        <img :src="'/storage/menu/'+food.image" class="rounded-lg" width="50"
                                            height="50" alt="">
                                    </div>
                                </td>
                                <td v-else>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/default.png') }}" class="rounded-lg" width="50" height="50" alt="">
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
{{--
@push('js_script')
<script>
    let dinner = new Vue({
        el:'#dinner',
        data: {
            foods: [],
            status: '',
            allBreakfast: '',
            allBrunch: '',
            allLunch: '',
            allDinner: '',
            paginate: {
                limit: 1,
                page: 1,
                total: 0
            },
        },
        methods: {
            changeLimit: function(event) {
                let ref = this;
                ref.paginate.limit = parseInt(event.target.value);
                ref.getMenu();
            },
            changePage: function(page) {
                let ref = this;
                ref.paginate.page = page;
                ref.getMenu();
            },
            getMenu: function(){
                let ref = this;
                let url = '/api/admin/menu/list';
                axios.get(url, {
                    params: {
                        page: ref.paginate.page,
                        limit: ref.paginate.limit
                    }
                }).then(function(response){
                    //pagination request
                    ref.paginate.total = response.data.total;
                    //request data
                    ref.foods = response.data.data;
                    let track = '';
                    //All Breakfast checkbox
                    for(let i = 0; i<ref.foods.length; i++){
                        if(ref.foods[i].category.includes('breakfast')){
                            if(ref.foods[i].status == 1)
                                track = 'allBreakfast';
                            else{
                                track = 'someBreakfast';
                                break;
                            }
                        }
                    }
                    if(track=='allBreakfast')
                        ref.allBreakfast = 1;
                    else
                        ref.allBreakfast = 0;

                    //All Brunch checkbox
                    for(let i = 0; i<ref.foods.length; i++){
                        if(ref.foods[i].category.includes('brunch')){
                            if(ref.foods[i].status == 1)
                                track = 'allBrunch';
                            else{
                                track = 'someBrunch';
                                break;
                            }
                        }
                    }
                    if(track=='allBrunch')
                        ref.allBrunch = 1;
                    else
                        ref.allBrunch = 0;

                    //All Lunch checkbox
                    for(let i = 0; i<ref.foods.length; i++){
                        if(ref.foods[i].category.includes('lunch')){
                            if(ref.foods[i].status == 1)
                                track = 'allLunch';
                            else{
                                track = 'someLunch';
                                break;
                            }
                        }
                    }
                    if(track=='allLunch')
                        ref.allLunch = 1;
                    else
                        ref.allLunch = 0;

                    //All Dinner checkbox
                    for(let i = 0; i<ref.foods.length; i++){
                        if(ref.foods[i].category.includes('dinner')){
                            if(ref.foods[i].status == 1)
                                track = 'allDinner';
                            else{
                                track = 'someDinner';
                                break;
                            }
                        }
                    }
                    if(track=='allDinner')
                        ref.allDinner = 1;
                    else
                        ref.allDinner = 0;
                });
            },
            foodFilter: function (checkCategory) {
                return this.foods.filter(food => food.category.includes(checkCategory));
            },
        },

    })
</script>

@endpush --}}
