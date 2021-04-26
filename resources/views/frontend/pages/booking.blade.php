@extends('frontend.layouts.app')
@section('title', 'Restaurant')
@section('hero_section')
    <section class="page-top-info booking-hero set-bg" data-setbg="{{ asset('assets/img/page-top-bg/1.jpg') }}">
        <div class="ptf-center">
            <div class="container">
                <h2></h2>
            </div>
        </div>
    </section>
@endsection
@section('main_section')
<section class="inter-section spad set-bg" data-setbg="{{ asset('assets/img/page-top-bg/1.jpg') }}" id="booking">
    <div class="container">
        <div class="container">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact-form-warp">
                    <div class="section-title">
                        <i class="flaticon-026-chicken-1"></i>
                        <h2>Booking</h2>
                    </div>
                    <!-- contact form -->
                    <form @submit.prevent="confirmBooking" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Name">
                                <span class="text-danger pl-2" v-if="error.name != ''">
                                    @{{ error.name }}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Mobile No.">
                                <span class="text-danger pl-2" v-if="error.phone != ''">
                                    @{{ error.phone }}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <select :options="foods_menu" name="foods" data-style="custom-input" class="selectpicker form-control" data-hide-disabled="true" data-container="body" title="Foods (Optional)" multiple data-live-search="true" data-actions-box="true" >
                                    <option v-for="option in foods_menu" :value="option.value">@{{option.text}}</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="members" placeholder="Members">
                                <span class="text-danger pl-2" v-if="error.members != ''">
                                    @{{ error.members }}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <datetime-component v-model="date" value-zone="UTC+6" zone="Asia/Dhaka" use12-hour name="date" type="date" input-class="custom-input" placeholder="Date"></datetime-component>
                                <span class="text-danger pl-2" v-if="error.date != ''">
                                    @{{ error.date }}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <datetime-component v-model="time" value-zone="UTC+6" zone="Asia/Dhaka" use12-hour name="time" type="time" input-class="custom-input" placeholder="Time"></datetime-component>
                                <span class="text-danger pl-2" v-if="error.time != ''">
                                    @{{ error.time }}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center float-right">
                                    <button class="site-btn" type="submit">DONE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js_script')
    <script>
        var app = new Vue({
            el: '#booking',
            data: {
                time: '',
                date: '',
                foods_menu:[
                    {value: 'Sunday', text: 'Sunday'},
                    {value: 'Monday', text: 'Monday'},
                    {value: 'Tuesday', text: 'Tuesday'},
                    {value: 'Wednesday', text: 'Wednesday'},
                    {value: 'Thursday', text: 'Thursday'},
                    {value: 'Friday', text: 'Friday'},
                    {value: 'Saturday', text: 'Saturday'}
                ],
                error: {
                    name: '',
                    phone: '',
                    members: '',
                    time: '',
                    date: '',
                }
            },
            methods: {
                confirmBooking(event) {
                    let ref = this;
                    let url = '/api/booking';
                    let data = new FormData(event.target);
                    axios.post(url, data).then(function(response) {
                        let value = response.data;
                        if(value.error){
                            ref.error.name = '';
                            ref.error.phone = '';
                            ref.error.members = '';
                            ref.error.date = '';
                            ref.error.time = '';

                            if(value.data.name)
                                ref.error.name = value.data.name[0];

                            if(value.data.phone)
                                ref.error.phone = value.data.phone[0];

                            if(value.data.members)
                                ref.error.members = value.data.members[0];

                            if(value.data.date)
                                ref.error.date = value.data.date[0];

                            if(value.data.time)
                                ref.error.time = value.data.time[0];

                            return;
                        }
                        if(value.code = 201){
                            swal("Done", "Successfully Booked Your Seat", "success", {button: "OK",timer: 2000});
                            ref.error.name = '';
                            ref.error.phone = '';
                            ref.error.members = '';
                            ref.error.date = '';
                            ref.error.time = '';
                            event.target.name.value = '';
                            event.target.phone.value = '';
                            event.target.members.value = '';
                            ref.date = '';
                            ref.time= '';
                        }
                    });
                },
            },
            created: function() {

            },
        });

    </script>
@endpush

