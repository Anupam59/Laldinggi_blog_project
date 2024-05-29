
<!-- Features Start -->
@if(!$News->isEmpty())
<div class="container-fluid features mb-5">
    <div class="container py-5">
        <div class="row g-4">
            @foreach($News as $key=>$NewsItem)
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="row g-4 align-items-center features-item">
                        <div class="col-4">
                            <div class="rounded-circle position-relative">
                                <div class="overflow-hidden rounded-circle">
                                    @if($NewsItem->news_image)
                                        <img src="{{asset($NewsItem->news_image)}}" class="img-zoomin rounded-circle img-fluid w-100" alt="">
                                    @else
                                        <img src="{{asset('Site/img/features-sports-1.jpg')}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    @endif

                                </div>

                            </div>
                        </div>
                        <div class="col-8">
                            <div class="features-content d-flex flex-column">
                                <p class="text-uppercase mb-2"> {{$NewsItem->cat_bn_name}}</p>
                                <a href="{{ url('/')."/".$NewsItem->cat_slug."/".$NewsItem->news_slug }}" class="h6">
                                    {{$NewsItem->news_head_title}}
                                </a>
                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>  {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- Features End -->
