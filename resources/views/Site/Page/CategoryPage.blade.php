@extends('Site.Layout.SiteMain')
@section('SiteContent')

    <!-- Most Populer News Start -->
    <div class="container-fluid populer-news py-3">
        <div class="container py-1">
            <div class="tab-class mb-4">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="tab-content mb-4">
                            <div class="row g-4">

                                <ol class="breadcrumb justify-content-start mb-2">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active text-dark">Single Page</li>
                                </ol>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="border-bottom mb-2 pb-3">
                                            <h1 class="h4 mb-0">Category</h1>
                                        </div>
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Sports</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Politics</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Magazine</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">Travel</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3">
                                                <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                    <span class="text-dark link-hover" style="width: 90px;">World</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-5 lifestyle">
                                    <div class="lifestyle-item rounded">
                                        <img src="{{asset('Site/img/news-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                        <div class="lifestyle-content">
                                            <div class="mt-auto">
                                                <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                                <div class="d-flex justify-content-between mt-4">
                                                    <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                                    <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('Site/img/news-4.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-5">
                                                    <div class="overflow-hidden rounded">
                                                        <img src="{{asset('Site/img/news-5.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="#" class="h6">Get the best speak market, news.</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 rounded border">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="rounded overflow-hidden mb-4">
                                                    <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group w-100 mx-auto d-flex mb-4 BannerSubscribe">
                                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                            <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="p-2 mb-2 rounded border">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 mb-2 rounded border">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-4">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h5">Get the best speak market,news speak market news.</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-4">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h5">Get the best speak market,news speak market news.</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-4">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h5">Get the best speak market,news speak market news.</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-4">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h5">Get the best speak market,news speak market news.</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-4">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h5">Get the best speak market,news speak market news.</a>
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="p-2 mb-2 rounded border">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 mb-2 rounded border">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="rounded overflow-hidden">
                                        <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Most Populer News End -->


@endsection
@section('SiteScript')
    <script>

    </script>
@endsection
