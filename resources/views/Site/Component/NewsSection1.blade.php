<!-- Latest News Start -->
@if(!$News->isEmpty())
<div class="container-fluid latest-news py-3">
    <div class="container py-1">
        <h2 class="mb-4">{{$News[0]->cat_bn_name}}
        @if($More)
            {{ $More }}
        @endif
        </h2>
        <div class="row">
            @foreach($News as $key=>$NewsItem)
            <div class="col-md-3 col-6 mb-3">
                <div class="latest-news-item h-100">
                    <div class="bg-light rounded h-100">
                        <div class="rounded-top overflow-hidden">
                            @if($NewsItem->news_image)
                                <img src="{{asset($NewsItem->news_image)}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            @else
                                <img src="{{asset('Site/img/news-7.jpg')}}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                            @endif
                        </div>
                        <div class="d-flex flex-column p-4">
                            <a href="{{ url('/')."/details/".$NewsItem->news_slug }}" class="h5">{{$NewsItem->news_head_title}}</a>
                            <div class="d-flex justify-content-between">
                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>{{bn_date(date("dM -Y", strtotime($NewsItem->created_date)))}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- Latest News End -->
