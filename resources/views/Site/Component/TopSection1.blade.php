<!-- Top1 HomePage Section Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7 col-xl-8 mt-0 lifestyle">

                @if(!$LeadNews->isEmpty())
                <div class="lifestyle-item rounded mb-3">
                    @if($LeadNews[0]->news_image)
                        <img src="{{asset($LeadNews[0]->news_image)}}" class="img-fluid w-100 rounded" alt="">
                    @else
                        <img src="{{asset('Site/img/news-1.jpg')}}" class="img-fluid w-100 rounded" alt="">
                    @endif

                    <div class="lifestyle-content">
                        <div class="mt-auto">
                            <a href="{{ url('/')."/details/".$LeadNews[0]->news_slug }}"><h2 href="#" class="h3 text-white">{{$LeadNews[0]->news_head_title}}</h2></a>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url('/')."/".$LeadNews[0]->cat_slug }}" class="small text-white link-hover">{{$LeadNews[0]->cat_bn_name}}</a>
                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($LeadNews[0]->created_date)))}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                @if(!$TopNews->isEmpty())
                <div class=" rounded">
                    <div class="row g-4">
                        @foreach($TopNews as $key=>$NewsItem)
                        <div class="col-md-4 customCol">
                            <div class="bg-light p-2 h-100 rounded">
                                <div class="rounded overflow-hidden">
                                    @if($NewsItem->news_image)
                                        <img src="{{asset($NewsItem->news_image)}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    @else
                                        <img src="{{asset('Site/img/news-3.jpg')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                                    @endif
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="{{ url('/')."/details/".$NewsItem->news_slug }}" class="h6 my-2">{{$NewsItem->news_head_title}}</a>
                                    <small><a href="{{ url('/')."/".$NewsItem->cat_slug }}" class="text-body d-block"><i class="fa fa-fan"> {{$NewsItem->cat_bn_name}} </i></a></small>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"> {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}}</i></small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif


            </div>


            <div class="col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 pt-0">

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="rounded overflow-hidden mb-3">
                                <img src="{{asset('Site/img/adsImage.png')}}" class="img-fluid rounded img-zoomin w-100" alt="">
                            </div>
                        </div>

                        @if(!$RecentNews->isEmpty())
                            @foreach($RecentNews as $key=>$NewsItem)
                                <div class="col-12">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-5">
                                            <div class="overflow-hidden rounded">
                                                @if($NewsItem->news_image)
                                                    <img src="{{asset($NewsItem->news_image)}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                @else
                                                    <img src="{{asset('Site/img/news-3.jpg')}}" class="img-zoomin img-fluid rounded w-100" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="features-content d-flex flex-column">
                                                <a href="{{ url('/')."/details/".$NewsItem->news_slug }}" class="h6">{{$NewsItem->news_head_title}}</a>
                                                <small><a href="{{ url('/')."/".$NewsItem->cat_slug }}" class="text-body d-block"><i class="fa fa-fan"> {{$NewsItem->cat_bn_name}} </i></a></small>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"> {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}}</i></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

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
                                        <small><i class="fa fa-clock"> 06 minute read</i> </small>
                                        <small><i class="fa fa-eye"> 3.5k Views</i></small>
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
<!-- Top1 HomePage Section End -->
