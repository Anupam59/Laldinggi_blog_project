
<!-- Features Start -->
@if(!$News->isEmpty())
<div class="container-fluid features mb-5">
    <div class="container py-5">
        <div class="row g-4">
            @foreach($News as $key=>$NewsItem)
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="row g-4 align-items-center features-item">
                        <div class="col-4">
                            <div class="rounded-circle position-relative">
                                <div class="overflow-hidden rounded-circle">
                                    @if($NewsItem->news_image)
                                        <img src="{{asset($NewsItem->news_image)}}" class="img-zoomin img-fluid RCImgFeatures" alt="">
                                    @else
                                        <img src="{{asset('Site/img/features-sports-1.jpg')}}" class="img-zoomin img-fluid rounded-circle RCImgFeatures" alt="">
                                    @endif

                                </div>

                            </div>
                        </div>
                        <div class="col-8">
                            <div class="features-content d-flex flex-column">
                                <p class="text-uppercase mb-2"> {{$NewsItem->cat_bn_name}}</p>
                                <a href="{{ url('/')."/details/".$NewsItem->news_slug }}" class="h6">
                                    {{$NewsItem->news_head_title}}
                                </a>
                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"> {{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}} </i></small>
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
