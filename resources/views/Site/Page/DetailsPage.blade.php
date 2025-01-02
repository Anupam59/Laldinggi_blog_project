@extends('Site.Layout.SiteMain')

@if($NewsSEOTitle)
    @section('title', $NewsSEOTitle." - ".$SiteCommon->site_title)
@else
    @section('title', $NewsDetails->news_head_title." - ".$SiteCommon->site_title)
@endif
@if($NewsSEODesc)
    @section('description',$NewsSEODesc." - ".$SiteCommon->site_description)
@else
    @section('description',$NewsDetails->news_details_brief." - ".$SiteCommon->site_description)
@endif
@section('keywords',implode(",",$NewsTag).",".$SiteCommon->site_keyword)


@section('SiteContent')
    @if($NewsDetails)
    <div class="container-fluid py-2">
        <div class="container py-2">

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="display-5"><h1 class="DetailsTitle">{{$NewsDetails->news_head_title}}</h1></a>
                    </div>
                    @if($NewsDetails->news_details_brief)
                        <div class="bg-light p-4 mb-4 rounded border-start border-3 border-primary">
                            <h5 class="mb-2">{{$NewsDetails->news_details_brief}}</h5>
                        </div>
                    @endif


                    <div class="d-flex justify-content-between border-bottom pb-2 mb-4">
                        <div class="d-flex">

                            @if($NewsReporter)
                                @foreach($NewsReporter as $key=>$UserItem)
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                            <img src="http://127.0.0.1:8000/Site/img/footer-1.jpg" class="img-zoomin img-fluid rounded-circle AuthImage" alt="">
                                        </div>
                                        <div class="d-flex flex-column ps-2">
                                            <a href="#" class="h6">{{ $UserItem->name }}</a>
                                            <small class="d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($NewsDetails->created_date)))}} </small>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                            @if($NewsWriter)
                                @foreach($NewsWriter as $key=>$UserItem)
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="rounded-circle border border-2 border-primary overflow-hidden">
                                            <img src="http://127.0.0.1:8000/Site/img/footer-1.jpg" class="img-zoomin img-fluid rounded-circle AuthImage" alt="">
                                        </div>
                                        <div class="d-flex flex-column ps-2">
                                            <a href="#" class="h6">{{ $UserItem }}</a>
                                            <small class="d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($NewsDetails->created_date)))}} </small>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

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
                        @if($NewsDetails->news_image)
                            <img src="{{asset($NewsDetails->news_image)}}" class="img-fluid rounded img-zoomin w-100" alt="">
                        @else
                            <img src="{{asset('Site/img/news-1.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                        @endif

                        @if($NewsDetails->news_vidos)
                            <div class="position-absolute rounded" style="top: 45%; right: 45%;">
                                <button class="btn border-0" data-bs-toggle="modal" data-tagVideo="https://www.youtube.com/embed/{{$NewsDetails->news_vidos}}" data-bs-target="#videoModal">
                                    <i class="fab fa-youtube btn btn-square border-0 rounded-circle text-danger YoutubeBtn"></i>
                                </button>
                            </div>
                         @endif

                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                            {{$NewsDetails->cat_bn_name}}
                        </div>


                        @if($NewsDetails->news_image_caption)
                            <div class="d-flex justify-content-center px-4 position-absolute flex-wrap" style="bottom: 10px; left: 0;">
                                <p class="text-white ImageCaption"><i class="fa fa-solid fa-comment"></i> {{$NewsDetails->news_image_caption}}</p>
                            </div>
                        @endif
                    </div>

                    {{$NewsDetails->news_vidos}}
                    <div class="row g-4 mt-3">
                        <div class="col-12">
                            <div class="overflow-hidden">
                                <img src="{{asset('Site/img/ads1Image.jpeg')}}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <p class="my-4">{!! $NewsDetails->news_details !!}</p>

                    <div class="row g-4 mt-3">
                        <div class="col-12">
                            <div class="overflow-hidden">
                                <img src="{{asset('Site/img/ads1Image.jpeg')}}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>

                    @if($NewsTag)
                    <div class="row g-4 my-3">
                        <div class="col-lg-12">
                            <div class="border-bottom my-3 pb-3">
                                <h4 class="mb-0">Trending Tags</h4>
                            </div>
                            <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                @foreach($NewsTag as $key=>$Tag)
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 bg-light rounded-pill me-2" href="{{ url('/')."/topic/".$Tag }}">
                                        <span class="text-dark link-hover" style="padding: 0px 10px;">{{$Tag}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

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

                                    @if($TopNews)
                                    <h4 class="my-4">সর্বশেষ সংবাদ</h4>
                                    <div class="row g-4 mb-4">
                                        @foreach($TopNews as $key=>$NewsItem)
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center features-item">
                                                <div class="col-4">
                                                    <div class="rounded-circle position-relative">
                                                        <div class="overflow-hidden rounded-circle">

                                                            @if($NewsItem->news_image)
                                                                <img src="{{asset($NewsItem->news_image)}}" class="img-zoomin img-fluid RCImgDetails" alt="">
                                                            @else
                                                                <img src="{{asset('Site/img/features-sports-1.jpg')}}" class="img-zoomin img-fluid RCImgDetails" alt="">
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <p class="text-uppercase mb-2">{{$NewsItem->cat_bn_name}}</p>
                                                        <a href="{{ url('/')."/details/".$NewsItem->news_slug }}" class="h6">
                                                            {{$NewsItem->news_head_title}}
                                                        </a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}} </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif

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
    @endif
    @include('Site.Component.NewsSection1',['News'=>$CategoryNews, 'More'=>'আরো খবর'])




    <div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="" allow="autoplay;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('SiteScript')
    <script>

        autoPlayYouTubeModal();
        function autoPlayYouTubeModal() {
            var triggerOpen = $("body").find('[data-tagVideo]');
            triggerOpen.click(function() {
                var theModal = $(this).data("bs-target"),
                    videoSRC = $(this).attr("data-tagVideo"),
                    videoSRCauto = videoSRC + "?autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.btn-close').click(function() {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        }


    </script>
@endsection
