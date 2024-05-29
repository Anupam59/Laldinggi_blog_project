@extends('Site.Layout.SiteMain')
@section('SiteContent')

    @if($News)
    <!-- Single Product Start -->
    <div class="container-fluid py-2">
        <div class="container py-2">
            <ol class="breadcrumb justify-content-start mb-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-dark">Single Page</li>
            </ol>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="display-5"><h1 class="DetailsTitle">{{$News->news_head_title}}</h1></a>
                    </div>
                    @if($News->news_details_brief)
                        <div class="bg-light p-4 mb-4 rounded border-start border-3 border-primary">
                            <h5 class="mb-2">{{$News->news_details_brief}}</h5>
                        </div>
                    @endif


                    <div class="d-flex justify-content-between border-bottom pb-2 mb-4">
                        <div class="d-flex">
                            <div class="d-flex align-items-center mr-2">
                                <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                    <img src="http://127.0.0.1:8000/Site/img/footer-1.jpg" class="img-zoomin img-fluid rounded-circle AuthImage" alt="">
                                </div>
                                <div class="d-flex flex-column ps-2">
                                    <a href="#" class="h6">Anupam Talukdar</a>
                                    <small class="d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mr-2">
                                <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                    <img src="http://127.0.0.1:8000/Site/img/footer-1.jpg" class="img-zoomin img-fluid rounded-circle AuthImage" alt="">
                                </div>
                                <div class="d-flex flex-column ps-2">
                                    <a href="#" class="h6">Anupam Talukdar</a>
                                    <small class="d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 me-3">Share:</h5>
                            <i class="fab fa-facebook-f link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i class="btn fab bi-twitter link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i class="btn fab fa-instagram link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                            <i class="btn fab fa-linkedin-in link-hover btn btn-square rounded-circle border-primary text-dark"></i>
                        </div>
                    </div>


                    <div class="position-relative overflow-hidden rounded mb-3">
                        @if($News->news_image)
                            <img src="{{asset($News->news_image)}}" class="img-fluid rounded img-zoomin w-100" alt="">
                        @else
                            <img src="{{asset('Site/img/news-1.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                        @endif

                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                            {{$News->cat_bn_name}}
                        </div>


                        @if($News->news_image_caption)
                            <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                                <p class="text-white ImageCaption"><i class="fa fa-solid fa-comment"></i> {{$News->news_image_caption}}</p>
                            </div>
                        @endif
                    </div>

                    <div class="row g-4 mt-3">
                        <div class="col-12">
                            <div class="overflow-hidden">
                                <img src="{{asset('Site/img/ads1Image.jpeg')}}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <p class="my-4">{!! $News->news_details !!}</p>


                    <div class="row g-4 mt-3">
                        <div class="col-12">
                            <div class="overflow-hidden">
                                <img src="{{asset('Site/img/ads1Image.jpeg')}}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 my-3">
                        <div class="col-lg-12">
                            <div class="border-bottom my-3 pb-3">
                                <h4 class="mb-0">Trending Tags</h4>
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
                </div>
                <div class="col-lg-4">
                    <div class="SideContent">
                        <div class="row g-4">
                            <div class="col-12">
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

                                    <h4 class="my-4">Popular News</h4>
                                    <div class="row g-4 mb-4">
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="{{asset('Site/img/features-sports-1.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Sports</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="{{asset('Site/img/features-technology.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Technology</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="{{asset('Site/img/features-fashion.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Fashion</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">
                                                            <img src="{{asset('Site/img/features-life-style.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                        </div>
                                                        <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">Life Style</p>
                                                        <a href="#" class="h6">
                                                            Get the best speak market, news.
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="position-relative banner-2">
                                                <img src="{{asset('Site/img/banner-2.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                                <div class="text-center banner-content-2">
                                                    <h5 class="mb-2">The Most Populer</h5>
                                                    <p class="text-white mb-2">News & Magazine WP Theme</p>
                                                    <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->
    @endif
@endsection
@section('SiteScript')
    <script>

    </script>
@endsection
