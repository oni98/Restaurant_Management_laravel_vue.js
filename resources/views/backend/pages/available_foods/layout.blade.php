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
            status: ''
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
                let url = '/api/admin/menu/status/' + id;
                let data = new FormData();
                event.target.checked != true? ref.status = 0: ref.status = 1;
                data.append("status", ref.status);
                data.append("_method", "PUT");
                axios.post(url, data).then(function(response) {
                    let data = response.data;
                    if (data.code == 201) {
                        ref.getMenu();
                    }
                });
            },
            updateAllStatus: function(time){
                let ref = this;
                let url = '/api/admin/menu/all_status/' + time;
                let data = new FormData();
                event.target.checked != true? ref.status = 0: ref.status = 1;
                data.append("status", ref.status);
                data.append("_method", "PUT");
                axios.post(url, data).then(function(response) {
                    let data = response.data;
                    if (data.code == 201) {
                        ref.getMenu();
                    }
                });
            }
        },
        created: function(){
            this.getMenu();
        }
    })
</script>

@endpush
