@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Series Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">News Series Create</li>
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
                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/admin/') }}/news-series-list">
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





                        <form action="{{ url('admin/news-series-entry') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" value="{{ old('news_series_title') }}" name="news_series_title" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{ old('news_series_en_name') }}" name="news_series_en_name" placeholder="Name">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name (বাংলা)</label>
                                        <input type="text" class="form-control" value="{{ old('news_series_bn_name') }}" name="news_series_bn_name" placeholder="Name (বাংলা)">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" value="{{ old('news_series_en_desc') }}" name="news_series_en_desc" placeholder="Description">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description (বাংলা)</label>
                                        <input type="text" class="form-control" value="{{ old('news_series_bn_desc') }}" name="news_series_bn_desc" placeholder="Description (বাংলা)">
                                    </div>
                                </div>


                                <input id="showTagId" type="text" class="form-control d-none" value="{{ old('news_series_en_key') }}" name="news_series_en_key" placeholder="NewsSeries Tag">


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

        $('#news_series_status').select2();

    </script>
@endsection
