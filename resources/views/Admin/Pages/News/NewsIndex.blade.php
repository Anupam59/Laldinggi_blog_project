

@extends('Admin.Layout.main')

@section('content')


    <div class="content-wrapper" style="min-height: 1604.08px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/">Dashboard</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-default">
                <div class="card-header">
                    <a class="btn btn-danger btn-sm add_btn" href="#" data-card-widget="collapse">
                        Filter News
                    </a>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <form action="{{ url('admin/news-list') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" id="cat_id" name="cat_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if(!$Category->isEmpty())
                                            @foreach($Category as $CategoryItem)
                                                <option value="{{ $CategoryItem->cat_id }}" @if( Request::get('cat_id') == $CategoryItem->cat_id) {{ 'selected' }} @endif >{{ $CategoryItem->cat_title }}</option>
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

                                        <option value="" selected="selected">Select One</option>
                                        @if($SubCategory)
                                            @foreach($SubCategory as $SubCategoryItem)
                                                <option value="{{ $SubCategoryItem->sub_cat_id }}" @if( Request::get('sub_cat_id') == $SubCategoryItem->sub_cat_id) {{ 'selected' }} @endif >{{ $SubCategoryItem->sub_cat_title }}</option>
                                            @endforeach
                                        @else

                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sub Sub Category</label>
                                    <select class="form-control select2" id="sub_sub_cat_id" name="sub_sub_cat_id">

                                        <option value="" selected="selected">Select One</option>
                                        @if($SubSubCategory)
                                            @foreach($SubSubCategory as $SubSubCategoryItem)
                                                <option value="{{ $SubSubCategoryItem->sub_sub_cat_id }}" @if( Request::get('sub_sub_cat_id') == $SubSubCategoryItem->sub_sub_cat_id) {{ 'selected' }} @endif >{{ $SubSubCategoryItem->sub_sub_cat_title }}</option>
                                            @endforeach
                                        @else

                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Division</label>
                                    <select class="form-control select2" id="division_id" name="division_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if($Division)
                                            @foreach($Division as $DivisionItem)
                                                <option value="{{ $DivisionItem->division_id }}" @if( Request::get('division_id') == $DivisionItem->division_id) {{ 'selected' }} @endif >{{ $DivisionItem->division_name }}</option>
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
                                        <option value="" selected="selected">Select One</option>
                                        @if($District)
                                            @foreach($District as $DistrictItem)
                                                <option value="{{ $DistrictItem->district_id }}" @if( Request::get('district_id') == $DistrictItem->district_id) {{ 'selected' }} @endif >{{ $DistrictItem->district_name }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Upazila</label>
                                    <select class="form-control select2" id="upazila_id" name="upazila_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if($Upazila)
                                            @foreach($Upazila as $UpazilaItem)
                                                <option value="{{ $UpazilaItem->upazila_id }}" @if( Request::get('upazila_id') == $UpazilaItem->upazila_id) {{ 'selected' }} @endif >{{ $UpazilaItem->upazila_name }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                            </div>




                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Page</label>
                                    <select class="form-control select2" id="news_page_id" name="news_page_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if($NewsPage)
                                            @foreach($NewsPage as $NewsPageItem)
                                                <option value="{{ $NewsPageItem->news_page_id }}" @if( Request::get('news_page_id') == $NewsPageItem->news_page_id) {{ 'selected' }} @endif >{{ $NewsPageItem->news_page_title }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Type</label>
                                    <select class="form-control select2" id="news_type_id" name="news_type_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if($NewsType)
                                            @foreach($NewsType as $NewsTypeItem)
                                                <option value="{{ $NewsTypeItem->news_type_id }}" @if( Request::get('news_type_id') == $NewsTypeItem->news_type_id) {{ 'selected' }} @endif >{{ $NewsTypeItem->news_type_title }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News Status</label>
                                    <select class="form-control select2" id="news_status_id" name="news_status_id">
                                        <option value="" selected="selected">Select One</option>
                                        @if($NewsStatus)
                                            @foreach($NewsStatus as $NewsStatusItem)
                                                <option value="{{ $NewsStatusItem->news_status_id }}" @if( Request::get('news_status_id') == $NewsStatusItem->news_status_id) {{ 'selected' }} @endif >{{ $NewsStatusItem->news_status_title }}</option>
                                            @endforeach
                                        @else

                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <a id="ResetForm" class="btn btn-danger">Reset</a>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>


            @if(!$News->isEmpty())

            <!-- Default box -->
                <div class="card">
                    <div class="card-header">

                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/admin/') }}/news-create">
                            Add <i class="fas fa-plus"></i>
                        </a>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>

                        </div>

                    </div>
                    <div class="card-body p-0">

                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">
                                    SL
                                </th>
                                <th style="width: 60%">
                                    Title
                                </th>

                                <th class="text-center">
                                    Status
                                </th>
                                <th style="width: 20%" class="text-right">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($News as $key=>$NewsItem)

                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>
                                        <a>{{ $NewsItem->news_head_title }}</a>
                                    </td>


                                    <td class="project-state">
                                        @if($NewsItem->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @elseif($NewsItem->status == 2)
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>


                                    <td class="project-actions text-right">

                                        <a class="btn btn-info btn-sm" href="{{ url('/admin/') }}/news-status/{{ $NewsItem->news_id }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <a class="btn btn-primary btn-sm" href="{{ url('/admin/') }}/news-edit/{{ $NewsItem->news_id }}">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                    </td>



                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center">
                        {{ $News->onEachSide(3)->links('Admin.Common.Paginate') }}
                    </div>
                </div>

            @else
                @include('Admin.Common.DataNotFound')
            @endif
        </section>
        <!-- /.content -->
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

        $("#ResetForm").click(function(){
            window.location.replace("/admin/news-list?cat_id=&sub_cat_id=&sub_sub_cat_id=&division_id=&district_id=&upazila_id=&news_page_id=&news_type_id=&news_status_id=");
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
