@extends('frontend.layouts.app')
@section('title', 'Restaurant')
@section('hero_section')
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('assets/img/slider/slider-3.jpg')}}">
            <div class="hs-content">
                <div class="hsc-warp">
                    <h2>Delicious Food<span>.</span></h2>
                    <p>By Chef X</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('assets/img/slider/slider-1.jpg')}}">
            <div class="hs-content">
                <div class="hsc-warp">
                    <h2>Special Dish<span>.</span></h2>
                    <p>By Chef X</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('assets/img/slider/slider-2.jpg')}}">
            <div class="hs-content">
                <div class="hsc-warp">
                    <h2>Hygienic Food<span>.</span></h2>
                    <p>By Chef X</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('main_section')
    <!-- Intro section -->
    <section class="inter-section spad">
        <div class="container">
            <div class="section-title">
                <i class="flaticon-019-rib"></i>
                <h2>Welcome</h2>
            </div>
            <div class="row">
                <div class="col-md-4 intro-item">
                    <h3>2002</h3>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit,
                        id lobortis leo volutpat. </p>
                </div>
                <div class="col-md-4 intro-item">
                    <h3>2010</h3>
                    <p>Stpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas
                        sollicitudin est in libero pretium.</p>
                </div>
                <div class="col-md-4 intro-item">
                    <h3>2018</h3>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit,
                        id lobortis leo volutpat. </p>
                </div>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/img/sign.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- Intro section end -->

    <!-- Testimonials section -->
    <section class="testimonials-section spad pb-0 set-bg" data-setbg="{{ asset('assets/img/review-bg.jpg') }}">
        <div class="container">
            <div class="section-title text-white">
                <i class="flaticon-020-ice-cream"></i>
                <h2>Testimonials</h2>
            </div>
            <div class="testimonials-slider owl-carousel">
                <div class="ts-item text-white">
                    <div class="quota">“</div>
                    <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst.
                        Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo
                        laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est
                        feu-giat ut. </p>
                    <h6><span>Ted Chapman</span>, Client</h6>
                </div>
                <div class="ts-item text-white">
                    <div class="quota">“</div>
                    <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst.
                        Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo
                        laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est
                        feu-giat ut. </p>
                    <h6><span>Ted Chapman</span>, Client</h6>
                </div>
                <div class="ts-item text-white">
                    <div class="quota">“</div>
                    <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst.
                        Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo
                        laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est
                        feu-giat ut. </p>
                    <h6><span>Ted Chapman</span>, Client</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section end -->

    <!-- Services section -->
    <section class="services-section spad">
        <div class="container">
            <div class="section-title">
                <i class="flaticon-022-tray"></i>
                <h2>Our Services</h2>
            </div>
            <div class="row services">
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-005-coffee-1"></i>
                    <h3>Breakfast</h3>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum.</p>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-016-pancake"></i>
                    <h3>Brunch</h3>
                    <p>Scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis.</p>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-008-soup"></i>
                    <h3>Lunch</h3>
                    <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum.</p>
                </div>
                <div class="col-lg-3 col-md-6 service-item">
                    <i class="flaticon-032-hamburger"></i>
                    <h3>Dinner</h3>
                    <p>Aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendreri.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->

    <!-- Menu section -->
    <section class="menu-section spad set-bg" data-setbg="{{ asset('assets/img/menu-bg.jpg') }}">
        <div class="container">
            <div class="section-title text-white">
                <i class="flaticon-022-tray"></i>
                <h2>Our Menu</h2>
            </div>
            <!-- menu tab nav -->
            <ul class="menu-tab-nav nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                        aria-selected="true">Breakfast</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                        aria-selected="false">Brunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                        aria-selected="false">Lunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4"
                        aria-selected="false">Dinner</a>
                </li>
            </ul>
            <div class="tab-content menu-tab-content">
                <!-- single tab content -->
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$8.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$8.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single tab content -->
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$8.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single tab content -->
                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Soft-Boiled Organic Egg</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$8.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single tab content -->
                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs with ham</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$9.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Scrambled Eggs in Puff Pastry</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$11.00</div>
                                </div>
                            </div>
                            <!-- menu item -->
                            <div class="menu-item">
                                <h5>Eggs Benedict</h5>
                                <div class="mi-meta">
                                    <p>with wild mushrooms and asparagus</p>
                                    <div class="menu-price">$6.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5">
                <a href="#" class="site-btn">See More</a>
            </div>
        </div>
    </section>
@endsection
@section('map')
    <div class="map-warp" id="map-canvas"></div>
@endsection
@section('contact_form')
<div class="contact-form-area">
    <div class="container">
        <div class="col-lg-10 offset-lg-1">
            <div class="contact-form-warp">
                <div class="section-title">
                    <i class="flaticon-026-chicken-1"></i>
                    <h2>Contact us</h2>
                </div>
                <!-- contact form -->
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Message"></textarea>
                            <div class="text-center">
                                <button class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
