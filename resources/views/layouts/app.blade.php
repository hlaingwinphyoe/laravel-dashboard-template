<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title',"My Dashboard")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <span class="loader"></span>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
@include('layouts.sidebar')
<!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
    @include('layouts.header')
    <!-- Navbar End -->

        @yield('content')

    </div>
    <!-- Content End -->


    {{--    <!-- Back to Top -->--}}
    {{--    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">--}}
    {{--        <i class="fa-solid fa-arrow-up"></i>--}}
    {{--    </a>--}}
</div>

<!-- JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('script')
</body>

</html>
