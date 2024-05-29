<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Website</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">
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
