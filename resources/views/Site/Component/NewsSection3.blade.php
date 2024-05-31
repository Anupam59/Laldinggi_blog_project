<!-- Most Populer News Start -->
@if(!$News->isEmpty())
<div class="container-fluid populer-news py-3">
    <div class="container py-1">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-12 col-xl-12">
                    <div class="lifestyle">
                        <div class="border-bottom mb-4">
                            <h1 class="mb-4">{{$News[0]->cat_bn_name}}</h1>
                        </div>
                        <div class="row g-4">
                            @foreach($News as $key=>$NewsItem)
                            <div class="col-lg-4">
                                <div class="lifestyle-item rounded">
                                    @if($NewsItem->news_image)
                                        <img src="{{asset($NewsItem->news_image)}}" class="img-fluid w-100 rounded" alt="">
                                    @else
                                        <img src="{{asset('Site/img/news-7.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                    @endif

                                    <div class="lifestyle-content">
                                        <div class="mt-auto">
                                            <a href="{{ url('/')."/".$NewsItem->cat_slug."/".$NewsItem->news_slug }}" class="h5 text-white link-hover">{{$NewsItem->news_head_title}}</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <a href="#" class="small text-white link-hover">{{$NewsItem->cat_bn_name}}</a>
                                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Most Populer News End -->
