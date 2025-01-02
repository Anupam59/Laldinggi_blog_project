<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> @yield('title') </title>
    <meta property="og:title" content="@yield('title')"/>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:keywords" content="@yield('keywords')">
    <meta property="og:image" content="{{asset('Images/site-info/logoseo.png')}}"/>
    <meta name="theme-color" content="#92278F" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('Site/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('Site/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('Site/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Site/dist/css/adminlte.min.css')}}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Site/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('Site/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('Site/css/responsive.css')}}" rel="stylesheet">
</head>
<body class="layout-fixed sidebar-collapse">
<div class="wrapper">
@include('Site.Common.Spinner')
@include('Site.Common.Navbar')
@include('Site.Common.Search')


<!--begin::Content wrapper-->
@yield('SiteContent')
<!--end::Content wrapper-->


@include('Site.Common.Footer')
@include('Site.Common.Copyright')
@include('Site.Common.BackToTop')
@include('Site.Common.Sidebar')

</div>
<!-- jQuery -->
<script src="{{asset('Site/plugins/jquery/jquery.min.js')}}"></script>
<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Site/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('Site/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('Site/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<!-- Template Javascript -->
<script src="{{asset('Site/js/axios.min.js')}}"></script>
<script src="{{asset('Site/js/main.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Site/dist/js/adminlte.min.js')}}"></script>
@yield('SiteScript')
</body>
</html>
