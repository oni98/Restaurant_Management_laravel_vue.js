@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('main_content')
<div class="container-fluid" id="available_foods">
    {{-- Breakfast --}}
    @include('backend.pages.available_foods.breakfast')
    {{-- Brunch --}}
    @include('backend.pages.available_foods.brunch')
    {{-- Lunch --}}
    @include('backend.pages.available_foods.lunch')
    {{-- Dinner --}}
    @include('backend.pages.available_foods.dinner')
</div>
@endsection

@push('js_script')
<script>
    let app = new Vue({
        el:'#available_foods',
        data: {
            foods: [],
            status: '',
            allBreakfast: '',
            allBrunch: '',
            allLunch: '',
            allDinner: '',
        },
        methods: {
            getMenu: function(){
                let ref = this;
                let url = '/api/admin/menu/list';
                axios.get(url).then(function(response){
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
            updateStatus: function(id) {
                let ref = this;
                let url = '/api/admin/menu/status/' + id;
                let data = new FormData();
                event.target.checked != true? ref.status = 0: ref.status = 1;
                data.append("status", ref.status);
                data.append("_method", "PUT");
                axios.post(url, data).then(function(response) {
                    let data = response.data;
                    if (data.code == 201) {
                        //ref.getMenu();
                    }
                });
                ref.getMenu();
            },
            updateAllStatus: function(category){
                let ref = this;
                let url = '/api/admin/menu/all_status/' + category;
                let data = new FormData();
                event.target.checked != true? ref.status = 0: ref.status = 1;
                data.append("status", ref.status);
                data.append("_method", "PUT");
                axios.post(url, data).then(function(response) {
                    let data = response.data;
                    if (data.code == 201) {
                        //ref.getMenu();
                    }
                });
                ref.getMenu();
            },
            foodFilter: function (checkCategory) {
                return this.foods.filter(food => food.category.includes(checkCategory));
            }
        },
        created: function(){
            this.getMenu();
        }
    })
</script>

@endpush
