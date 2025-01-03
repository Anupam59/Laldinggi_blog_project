@extends('Site.Layout.SiteMain')

@section('title', $SiteCommon->site_title)
@section('description',$SiteCommon->site_description)
@section('keywords', $SiteCommon->site_keyword)

@section('SiteContent')

    <!-- Most Populer News Start -->
    <div class="container-fluid populer-news py-3">
        <div class="container py-1">
            <div class="tab-class mb-4">
                <div class="row g-4 py-4">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="row g-4">
                                <div class="col-lg-12 g-4">
                                    <div class="border-bottom mb-2 pb-3">
                                        <h1 class="h4 mb-0 text-primary">অনুসন্ধান করুন</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(!$News->isEmpty())
                    <div class="row g-4">
                        <div class="col-lg-3">

                            <form class="SearchNews" action="{{ url('search') }}" method="get">
                                <div class="mb-2">
                                    <input type="search" name="search" class="form-control p-3" value="{{ Request::get('search') }}" placeholder="অনুসন্ধান করুন">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">বিভাগ</label>
                                    <select class="form-control select2" id="division_id" name="division">
                                        <option value="" selected="selected">নির্বাচন করুন</option>
                                        @if($Division)
                                            @foreach($Division as $DivisionItem)
                                                <option value="{{ $DivisionItem->division_id }}" @if( Request::get('division') == $DivisionItem->division_id) {{ 'selected' }} @endif >{{ $DivisionItem->division_bn_name }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">জেলা</label>
                                    <select class="form-control select2" id="district_id" name="district">
                                        <option value="" selected="selected">নির্বাচন করুন</option>
                                        @if($District)
                                            @foreach($District as $DistrictItem)
                                                <option value="{{ $DistrictItem->district_id }}" @if( Request::get('district') == $DistrictItem->district_id) {{ 'selected' }} @endif >{{ $DistrictItem->district_bn_name }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">উপজেলা</label>
                                    <select class="form-control select2" id="upazila_id" name="upazila">
                                        <option value="" selected="selected">নির্বাচন করুন</option>
                                        @if($Upazila)
                                            @foreach($Upazila as $UpazilaItem)
                                                <option value="{{ $UpazilaItem->upazila_id }}" @if( Request::get('upazila') == $UpazilaItem->upazila_id) {{ 'selected' }} @endif >{{ $UpazilaItem->upazila_bn_name }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                                <div class="mb-2 text-center">
                                    <button type="submit" class="btn btn-sm btn-primary text-white">অনুসন্ধান</button>
                                </div>
                            </form>

                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4 mb-4">
                                @for ($i = 0; $i < 10; $i++)
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
                                                        <small><a href="{{ url('/')."/".$News[$i]->cat_slug }}" class="text-body d-block"><i class="fa fa-fan"> {{$News[$i]->cat_bn_name}} </i></a></small>
                                                        <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"> {{bn_date(date("dM -Y", strtotime($News[$i]->created_date)))}} </i></small>
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

        $('#division_id').on('change',function (e){
            var division_id = e.target.value;
            axios.post('/DistrictGetData',{division_id:division_id}).then(function (response) {
                var JsonData = response.data;
                $('#district_id').empty();
                $('#district_id').append( JsonData );
            });
        });

        $('#district_id').on('change',function (e){
            var district_id = e.target.value;
            axios.post('/UpazilaGetData',{district_id:district_id}).then(function (response) {
                var JsonData = response.data;
                $('#upazila_id').empty();
                $('#upazila_id').append( JsonData );
            });
        });

    </script>
@endsection
