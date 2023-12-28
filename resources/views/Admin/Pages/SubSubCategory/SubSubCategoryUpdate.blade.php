@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>SubSubCategory Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">SubSubCategory Update</li>
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

                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/admin/') }}/sub-sub-category-list">
                            All Data
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
                                <ul>
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




                        <form action="{{ url('admin/sub-sub-category-update/'.$SubSubCategory->sub_sub_cat_id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="sub_sub_cat_title" value="{{ $SubSubCategory->sub_sub_cat_title }}" placeholder="Title" required>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control select2" id="cat_id" name="cat_id" required>
                                            <option value=" " selected="selected">Select One</option>

                                            @if(!$Category->isEmpty())
                                                @foreach($Category as $CategoryItem)
                                                    <option value="{{ $CategoryItem->cat_id }}" @if($CategoryItem->cat_id == $SubSubCategory->cat_id) {{ 'selected' }} @endif > {{ $CategoryItem->cat_title }}</option>
                                                @endforeach
                                            @else

                                            @endif

                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select class="form-control select2" id="sub_cat_id" name="sub_cat_id" required>
                                            <option value=" " selected="selected">Select One</option>

                                            @if(!$SubCategory->isEmpty())
                                                @foreach($SubCategory as $SubCategoryItem)
                                                    <option value="{{ $SubCategoryItem->sub_cat_id }}" @if($SubCategoryItem->sub_cat_id == $SubSubCategory->sub_cat_id) {{ 'selected' }} @endif > {{ $SubCategoryItem->sub_cat_title }}</option>
                                                @endforeach
                                            @else

                                            @endif

                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="sub_sub_cat_en_name" value="{{ $SubSubCategory->sub_sub_cat_en_name }}" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name (বাংলা)</label>
                                        <input type="text" class="form-control" name="sub_sub_cat_bn_name" value="{{ $SubSubCategory->sub_sub_cat_bn_name }}" placeholder="Name (বাংলা)" required>
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" id="sub_sub_cat_status" name="status" required>
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1" @if($SubSubCategory->status == "1") {{ 'selected' }} @endif>Active</option>
                                            <option value="2" @if($SubSubCategory->status == "2") {{ 'selected' }} @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="sub_sub_cat_en_desc" value="{{ $SubSubCategory->sub_sub_cat_en_desc }}" placeholder="Description" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description (বাংলা)</label>
                                        <input type="text" class="form-control" name="sub_sub_cat_bn_desc" value="{{ $SubSubCategory->sub_sub_cat_bn_desc }}" placeholder="Description (বাংলা)" required>
                                    </div>
                                </div>

                                <input id="showTagId" type="text" class="form-control d-none" name="sub_sub_cat_en_key" value="{{ $SubSubCategory->sub_sub_cat_en_key }}" placeholder="SubCategory Tag" required>

                                <div class="col-md-12 tag_input">
                                    <div class="wrapper">

                                        <div class="title">
                                            <label>Tag</label>
                                            <a id="removeBtn">All <i class="fa fa-trash"></i></a>
                                        </div>

                                        <div class="content">

                                            <ul id="ulId">
                                                <input id="inputId" type="text" spellcheck="false">
                                            </ul>
                                            <p><span id="detailsItem">10</span> tags are remaining</p>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
        $('#cat_id').select2();
        $('#sub_cat_id').select2();
        $('#sub_sub_cat_status').select2();



        $('#cat_id').on('change',function (e){
            var cat_id = e.target.value;
            axios.post('/SubCategoryGetData',{cat_id:cat_id}).then(function (response) {
                var JsonData = response.data;
                $('#sub_cat_id').empty();
                $('#sub_cat_id').append( JsonData );

            });
        });

    </script>

@endsection
