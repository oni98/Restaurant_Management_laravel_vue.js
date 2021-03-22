@extends('frontend.layouts.app')
@section('title', 'Restaurant')
@section('hero_section')
<section class="page-top-info set-bg" data-setbg="{{asset('assets/img/page-top-bg/1.jpg')}}">
    <div class="ptf-center">
        <div class="container">
            <h2>About us<span>.</span></h2>
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
				<h2>About us</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.  Stpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium.</p>
				</div>
				<div class="col-md-6">
					<p>Nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat.  Stpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Chefs section -->
	<section class="chefs-section set-bg" data-setbg="{{asset('assets/img/chefs-bg.jpg')}}">
		<div class="container">
			<div class="section-title text-white">
				<i class="flaticon-006-steak"></i>
				<h2>Our Chefs</h2>
			</div>
			<div class="row chefs">
				<div class="col-md-4 chef">
					<img src="{{asset('assets/img/chefs/1.jpg')}}" alt="">
					<h4>Chef Ted Chapman</h4>
					<p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet.</p>
				</div>
				<div class="col-md-4 chef">
					<img src="{{asset('assets/img/chefs/2.jpg')}}" alt="">
					<h4>Chef Maria Smith</h4>
					<p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit.</p>
				</div>
				<div class="col-md-4 chef">
					<img src="{{asset('assets/img/chefs/3.jpg')}}" alt="">
					<h4>Chef James Williams</h4>
					<p>Sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, con-sectetur sit amet ornare.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Chefs section end -->


	<!-- Brands section -->
	<div class="brands-section">
		<div class="container">
			<div class="brands-slider owl-carousel">
				<div class="bs-item">
					<img src="{{asset('assets/img/brands/1.jpg')}}" alt="">
				</div>
				<div class="bs-item">
					<img src="{{asset('assets/img/brands/2.jpg')}}" alt="">
				</div>
				<div class="bs-item">
					<img src="{{asset('assets/img/brands/3.jpg')}}" alt="">
				</div>
				<div class="bs-item">
					<img src="{{asset('assets/img/brands/4.jpg')}}" alt="">
				</div>
				<div class="bs-item">
					<img src="{{asset('assets/img/brands/5.jpg')}}" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Brands section end -->
@endsection
