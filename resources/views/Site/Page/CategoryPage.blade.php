@extends('Site.Layout.SiteMain')

@if($TitleData['SubTitle'])
    @section('title', $TitleData['MainBnTitle']." | ".$TitleData['MainTitle']." | ".$TitleData['SubTitle']." | ".$SiteCommon->site_title)
@else
    @section('title', $TitleData['MainBnTitle']." | ".$TitleData['MainTitle']." | ".$SiteCommon->site_title)
@endif
@section('description',$TitleData['MainBnTitle']." - ".$SiteCommon->site_description)
@section('keywords',$TitleData['MainBnTitle'].",".$TitleData['MainTitle'].",".$SiteCommon->site_keyword)

@section('SiteContent')
    <!-- Most Populer News Start -->
    <div class="container-fluid populer-news py-3">
        <div class="container py-1">
            <div class="tab-class mb-4">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="row g-4">
                                <div class="col-lg-12 g-4">
                                    <div class="border-bottom mb-2 pb-3">
                                        @if($TitleData['SubTitle'])
                                            <a href="{{ url('/')."/".$TitleData['CategorySlug']}}"><p class="h6 mb-2">{{ $TitleData['SubBnTitle'] }}</p></a>
                                        @endif
                                        <h1 class="h4 mb-0 text-primary">{{ $TitleData['MainBnTitle'] }}</h1>

                                    </div>
                                    @if($SubCategoryAll)
                                        <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                            @foreach($SubCategoryAll as $key=>$SubCategoryItem)
                                                <li class="nav-item mb-3">
                                                    <a class="d-flex py-2 bg-light rounded-pill me-2" href="{{ url('/')."/".$TitleData['CategorySlug']."/".$SubCategoryItem->sub_cat_slug }}">
                                                        <span class="text-dark link-hover" style="padding: 0px 10px;">{{ $SubCategoryItem->sub_cat_bn_name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @if(!$News->isEmpty())
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="tab-content mb-4">
                                @if($News)
                                    <div class="row g-4">
                                        <div class="col-lg-5 lifestyle">
                                            <div class="lifestyle-item rounded">
                                                @if($News[0]->news_image)
                                                    <img src="{{asset($News[0]->news_image)}}" class="img-fluid w-100 rounded" alt="">
                                                @else
                                                    <img src="{{asset('Site/img/news-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                                @endif
                                                <div class="lifestyle-content">
                                                    <div class="mt-auto">
                                                        <a href="{{ url('/')."/details/".$News[0]->news_slug }}" class="h4 text-white link-hover">{{$News[0]->news_head_title}}</a>
                                                        <div class="d-flex justify-content-between mt-4">
                                                            {{--<a href="#" class="small text-white link-hover">By Willium Smith</a>--}}
                                                            <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($News[0]->created_date)))}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4">
                                            <div class="row g-4">
                                                @for ($i = 1; $i > 0 && $i < 4; $i++)
                                                    @if($News[$i])
                                                        <div class="col-12">
                                                            <div class="row g-4 align-items-center">
                                                                <div class="col-5">
                                                                    <div class="overflow-hidden rounded">
                                                                        @if($News[$i]->news_image)
                                                                            <img src="{{asset($News[$i]->news_image)}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                                        @else
                                                                            <img src="{{asset('Site/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-7">
                                                                    <div class="features-content d-flex flex-column">
                                                                        <a href="{{ url('/')."/details/".$News[$i]->news_slug }}" class="h6">{{$News[$i]->news_head_title}}</a>
                                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($News[$i]->created_date)))}}</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endfor
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
                                @endif
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
                            <div class="row g-4 mb-4">
                                @for ($i = 4; $i > 3 && $i < 10; $i++)
                                    @if($News[$i])
                                        <div class="col-12">
                                            <div class="row g-4 align-items-center">
                                                <div class="col-4">
                                                    <div class="overflow-hidden rounded">
                                                        @if($News[$i]->news_image)
                                                            <img src="{{asset($News[$i]->news_image)}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                        @else
                                                            <img src="{{asset('Site/img/news-1.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="features-content d-flex flex-column">
                                                        <a href="{{ url('/')."/details/".$News[$i]->news_slug }}" class="h5">{{$News[$i]->news_head_title}}</a>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($News[$i]->created_date)))}}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor

                            </div>

                            <div class="row g-4">
                                <div class="col d-flex align-items-center justify-content-center">
                                    {{ $News->onEachSide(3)->links('Site.Common.Paginate') }}
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
                @else
                    @include('Admin.Common.DataNotFound')
                @endif

            </div>
        </div>
    </div>
    <!-- Most Populer News End -->

@endsection
@section('SiteScript')
    <script>

    </script>
@endsection
