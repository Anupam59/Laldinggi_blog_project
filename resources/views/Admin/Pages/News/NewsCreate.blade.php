
@extends('Admin.Layout.main')

@section('content')

    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">News Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/admin/') }}/news-list">
                            All News
                        </a>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert error_success">
                                <ul class="m-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if (session('success_message'))
                            <div class="alert alert_success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('success_message') }}
                            </div>
                        @elseif (session('error_message'))
                            <div class="alert error_success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('error_message') }}
                            </div>
                        @else

                        @endif


                        <form action="{{ url('admin/news-entry') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select class="form-control select2" id="cat_id" name="cat_id" required>
                                            <option value="" selected="selected">Select One</option>
                                            @if(!$Category->isEmpty())
                                                @foreach($Category as $CategoryItem)
                                                    <option value="{{ $CategoryItem->cat_id }}"> {{ $CategoryItem->cat_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select class="form-control select2" id="sub_cat_id" name="sub_cat_id">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Sub Category</label>
                                        <select class="form-control select2" id="sub_sub_cat_id" name="sub_sub_cat_id">

                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Division</label>
                                        <select class="form-control select2" id="division_id" name="division_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($Division)
                                                @foreach($Division as $DivisionItem)
                                                    <option value="{{ $DivisionItem->division_id }}"> {{ $DivisionItem->division_name }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" id="district_id" name="district_id">

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Upazila</label>
                                        <select class="form-control select2" id="upazila_id" name="upazila_id">

                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>News Page</label>
                                        <select class="form-control select2" id="news_page_id" name="news_page_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($NewsPage)
                                                @foreach($NewsPage as $NewsPageItem)
                                                    <option value="{{ $NewsPageItem->news_page_id }}"> {{ $NewsPageItem->news_page_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>News Type</label>
                                        <select class="form-control select2" id="news_type_id" name="news_type_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($NewsType)
                                                @foreach($NewsType as $NewsTypeItem)
                                                    <option value="{{ $NewsTypeItem->news_type_id }}"> {{ $NewsTypeItem->news_type_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>News Series</label>
                                        <select class="form-control select2" id="news_series_id" name="news_series_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($NewsSeries)
                                                @foreach($NewsSeries as $NewsSeriesItem)
                                                    <option value="{{ $NewsSeriesItem->news_series_id }}"> {{ $NewsSeriesItem->news_series_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>News Status</label>
                                        <select class="form-control select2" id="news_status_id" name="news_status_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($NewsStatus)
                                                @foreach($NewsStatus as $NewsStatusItem)
                                                    <option value="{{ $NewsStatusItem->news_status_id }}"> {{ $NewsStatusItem->news_status_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Head Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="news_head_title" placeholder="Head Title ..." required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Head Caption Tag</label>
                                        <input type="text" class="form-control" name="news_head_caption_tag" placeholder="Head Caption Tag...">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>News Details Brief</label>
                                        <textarea class="form-control" id="news_details_brief" name="news_details_brief" placeholder="News Details Brief..."></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>News Details</label>
                                        <textarea class="form-control" id="news_details" name="news_details" placeholder="News Details..."></textarea>
                                    </div>
                                </div>


                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="news_image">
                                    </div>
                                </div>

                                <div class="col-md-3 d-none">
                                    <div class="form-group">
                                        <img class="img-fluid w-100" src="{{asset('Admin/dist/img/photo1.png')}}" alt="Photo">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>News Image Caption</label>
                                        <input type="text" class="form-control" name="news_image_caption" placeholder="News Image Caption ...">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Videos</label>
                                        <input type="text" class="form-control" name="news_vidos" placeholder="News Videos ...">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Videos Caption</label>
                                        <input type="text" class="form-control" name="news_vidos_caption" placeholder="News Videos Caption ...">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Audio</label>
                                        <input type="text" class="form-control" name="news_audio" placeholder="News Audio ...">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Audio Caption</label>
                                        <input type="text" class="form-control" name="news_audio_caption" placeholder="News Audio Caption ...">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Source</label>
                                        <input type="text" class="form-control" name="news_source" placeholder="News Audio ...">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Source Link</label>
                                        <input type="text" class="form-control" name="news_source_link" placeholder="News Source Link ...">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group select2multiple">
                                        <label>News Reporter</label>
                                        <select class="form-control select2" multiple data-placeholder="Select Reporter" id="user_id" name="news_reporter[]">
                                            @if($User)
                                                @foreach($User as $UserItem)
                                                    <option value="{{ $UserItem->id }}"> {{ $UserItem->name }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>

                                </div>


                                <input id="showTagId" type="text" class="form-control d-none" value="{{ old('news_writer') }}" name="news_writer" placeholder="News Writer">
                                <div class="col-md-6 tag_input">
                                    <div class="wrapper">
                                        <div class="title">
                                            <label>News Writer</label>
                                            <a id="removeBtn">All <i class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="content">
                                            <ul id="ulId">
                                                <input id="inputId" type="text" spellcheck="false">
                                            </ul>
                                            <p><span id="detailsItem">10</span> Writer are remaining</p>
                                        </div>
                                    </div>
                                </div>



                                <input id="showTagId2" type="text" class="form-control d-none" value="{{ old('news_tag_keyword') }}" name="news_tag_keyword" placeholder="News Tag">
                                <div class="col-md-12 tag_input">
                                    <div class="wrapper">
                                        <div class="title">
                                            <label>News Tag Keyword</label>
                                            <a id="removeBtn2">All <i class="fa fa-trash"></i></a>
                                        </div>
                                        <div class="content">
                                            <ul id="ulId2">
                                                <input id="inputId2" type="text" spellcheck="false">
                                            </ul>
                                            <p><span id="detailsItem2">10</span> Reporters are remaining</p>
                                        </div>
                                    </div>
                                </div>




                                <div class="card card-dark w-100">
                                    <div class="card-header">
                                        <h3 class="card-title">SEO Part</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body" style="display: block;">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SEO Title </label>
                                                <input type="text" class="form-control" name="news_seo_title" placeholder="Head Title ...">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>SEO Description</label>
                                                <textarea class="form-control" id="news_seo_description" name="news_seo_description" placeholder="News Details Brief..."></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection

@section('script')
    <script>

        $('.select2').select2();
        $('#user_id').select2({
            multiple: true,
        })
        $('#news_details').summernote({
            placeholder: 'News Description',
            height: 120,
        });

        $('#cat_id').on('change',function (e){
            var cat_id = e.target.value;
            axios.post('/SubCategoryGetData',{cat_id:cat_id}).then(function (response) {
                var JsonData = response.data;
                $('#sub_cat_id').empty();
                $('#sub_cat_id').append( JsonData );
            });
        });

        $('#sub_cat_id').on('change',function (e){
            var sub_cat_id = e.target.value;
            axios.post('/SubSubCategoryGetData',{sub_cat_id:sub_cat_id}).then(function (response) {
                var JsonData = response.data;
                $('#sub_sub_cat_id').empty();
                $('#sub_sub_cat_id').append( JsonData );
            });
        });

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
