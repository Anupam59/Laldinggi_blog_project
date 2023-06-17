@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category Update</li>
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

                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/') }}/category-list">
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




                        <form action="{{ url('/category-update/'.$Category->cat_id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="cat_title" value="{{ $Category->cat_title }}" placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" id="cat_status" name="status">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1" @if($Category->status == "1") {{ 'selected' }} @endif>Active</option>
                                            <option value="2" @if($Category->status == "2") {{ 'selected' }} @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="cat_en_name" value="{{ $Category->cat_en_name }}" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name (বাংলা)</label>
                                        <input type="text" class="form-control" name="cat_bn_name" value="{{ $Category->cat_bn_name }}" placeholder="Name (বাংলা)" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="cat_en_desc" value="{{ $Category->cat_en_desc }}" placeholder="Description" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description (বাংলা)</label>
                                        <input type="text" class="form-control" name="cat_bn_desc" value="{{ $Category->cat_bn_desc }}" placeholder="Description (বাংলা)" required>
                                    </div>
                                </div>

                                <input id="showTagId" type="text" class="form-control d-none" name="cat_en_key" value="{{ $Category->cat_en_key }}" placeholder="Category Tag" required>


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
        $('#cat_status').select2();
    </script>

@endsection
