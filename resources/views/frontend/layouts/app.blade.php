<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pulse Restaurant HTML Template">
	<meta name="keywords" content="pulse, restaurant, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('assets/backend/images/favicon.png')}}" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.css')}}">

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="site-logo">
				<h2><a href="home" class="text-light">Restaurant<span>.</span></a></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a class="{{ strpos($url=url()->current(), "home")?"active":""}}" href="home">Home</a></li>
				<li><a class="{{ strpos($url=url()->current(), "about")?"active":""}}" href="about">About us</a></li>
				<li><a class="{{ strpos($url=url()->current(), "menu")?"active":""}}" href="menu">Menu</a></li>
				<li><a class="{{ strpos($url=url()->current(), "booking")?"active":""}}" href="booking">Booking</a></li>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i> +880 123 456 789</p>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	@yield('hero_section')
	<!-- Hero section end -->

	@yield('main_section')

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- map -->
		@yield('map')
		<div class="footer-bg-area set-bg" data-setbg="{{asset('assets/img/footer-bg.jpg')}}">
			<!-- contact form -->
			@yield('contact_form')
			<div class="copyright">
				Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script> --}}
	<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
	@stack('js_script')


	<!-- load for map -->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script> --}}
	{{-- <script src="{{asset('assets/js/map.js')}}"></script> --}}

</body>
</html>
