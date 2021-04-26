<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title') </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backend/images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('assets/backend/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('assets/backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/backend/icons/font-awesome-old/css/font-awesome.min.css')}}"/>
</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav + header start
        ***********************************-->
        @include('backend.partials.header')
        <!--**********************************
            Nav + header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('backend.partials.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    @yield('main_content')
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('assets/backend/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('assets/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('assets/backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('assets/backend/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('assets/backend/vendor/apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	{{-- <script src="{{asset('assets/backend/js/dashboard/dashboard-1.js')}}"></script> --}}

    <script src="{{asset('assets/backend/js/custom.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/deznav-init.js')}}"></script>
	<script src="{{asset('assets/backend/js/demo.js')}}"></script>
    {{-- <script src="{{asset('assets/backend/js/styleSwitcher.js')}}"></script> --}}
    @stack('js_script')
</body>
</html>
