<!-- Most Populer News Start -->
<div class="container-fluid populer-news py-3">
    <div class="container py-1">
        <div class="tab-class mb-4">
            <div class="row g-4">
                <div class="col-lg-12">

                    <div class="d-flex flex-column flex-md-row justify-content-md-between border-bottom mb-4">
                        <h1 class="mb-4">Some News..</h1>
                        @if(!$TabMenu[0]->menu_item->isEmpty())
                        <p id="firstShow">{{ $TabMenu[0]->menu_item[0]->menu_item_link }}</p>

                        <ul class="nav nav-pills d-inline-flex text-center">
                            @foreach($TabMenu[0]->menu_item as $key=>$TabMenuItem)
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 bg-light rounded-pill me-2" id="TabActive{{$TabMenuItem->menu_item_link}}" onclick="TabChange({{$TabMenuItem->menu_item_link}})" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 100px;">{{ $TabMenuItem->menu_item_bn_title }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>


                    <div class="tab-content mb-4">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                                <div class="col-lg-5" id="TabFirst">

                                </div>


                                <div class="col-lg-7">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="row g-4" id="TabSecond">

                                            </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="row g-4" id="TabThird">

                                            </div>

                                            <div class="row g-4 pt-4">
                                                <div class="col-12">
                                                    <div class="rounded overflow-hidden mb-3">
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most Populer News End -->


@section('NewsSection4')
    <script type="text/javascript">
        let menu_first =$('#firstShow').html();
        let menu_first_id = "#TabActive"+menu_first;
        $(menu_first_id).addClass('active');
        getProjectData(menu_first,7);

        function getProjectData(catID,limit) {
            var base_url = window.location.origin;
            axios.post('/getTabData',{catID:catID,limit:limit})
                .then(function(response) {
                    if (response.status == 200) {

                        var jsonData = response.data;
                        console.log(jsonData);

                        $('#TabFirst').empty();
                        $('#TabSecond').empty();
                        $('#TabThird').empty();

                        $('<div>').html(
                            "<div class='position-relative rounded overflow-hidden'>"+
                            "<img src='"+base_url+jsonData[0].news_image+"' class='img-zoomin img-fluid rounded w-100'>"+
                            "<div class='position-absolute text-white px-4 py-2 bg-primary rounded' style='top: 20px; right: 20px;'>"+
                            jsonData[0].cat_bn_name+
                            "</div>"+
                            "</div>"+
                            "<div class='my-4'>"+
                            "<a href='#' class='h5'>"+jsonData[0].news_head_title+"</a>"+
                            "<small class='text-body d-block'><i class='fas fa-calendar-alt me-1 mt-3'></i>"+jsonData[0].created_date+"</small>"+
                            "</div>"
                        ).appendTo('#TabFirst');


                        for (i = 1; i > 0 && i < 5; i++){
                            $('<div class="col-12">').html(
                                "<div class='col-12'>"+
                                "<div class='row g-4 align-items-center'>"+
                                "<div class='col-5'>"+
                                "<div class='overflow-hidden rounded'>"+
                                "<img src='"+base_url+jsonData[i].news_image+"' class='img-zoomin img-fluid rounded w-100'>"+
                                "</div>"+
                                "</div>"+
                                "<div class='col-7'>"+
                                "<div class='features-content d-flex flex-column'>"+
                                "<p class='text-uppercase mb-2'>"+jsonData[i].cat_bn_name+"</p>"+
                                "<a href='#' class='h6'>"+jsonData[i].news_head_title+"</a>"+
                                "<small class='text-body d-block'><i class='fas fa-calendar-alt me-1'></i>"+jsonData[i].created_date+"</small>"+
                                "</div>"+
                                "</div>"+
                                "</div>"+
                                "</div>"
                            ).appendTo('#TabSecond');
                        }


                        for (i = 5; i > 4 && i < 7; i++){
                            $('<div class="col-12">').html(
                                "<div class='col-12'>"+
                                "<div class='row g-4 align-items-center'>"+
                                "<div class='col-5'>"+
                                "<div class='overflow-hidden rounded'>"+
                                "<img src='"+base_url+jsonData[i].news_image+"' class='img-zoomin img-fluid rounded w-100'>"+
                                "</div>"+
                                "</div>"+
                                "<div class='col-7'>"+
                                "<div class='features-content d-flex flex-column'>"+
                                "<p class='text-uppercase mb-2'>"+jsonData[i].cat_bn_name+"</p>"+
                                "<a href='#' class='h6'>"+jsonData[i].news_head_title+"</a>"+
                                "<small class='text-body d-block'><i class='fas fa-calendar-alt me-1'></i>"+jsonData[i].created_date+"</small>"+
                                "</div>"+
                                "</div>"+
                                "</div>"+
                                "</div>"
                            ).appendTo('#TabThird');
                        }



                    } else {

                    }
                })
                .catch(function(error) {

                });
        }

        function TabChange(menu_item_link) {
            getProjectData(menu_item_link,7);
        }
    </script>
@endsection
