
@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">News Update</li>
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


                        <form action="{{ url('admin/news-status/'.$News->news_id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-12">
                                    <div class="form-group">
                                        <h6>{{ $News->news_head_title }}</h6>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>News Status</label>
                                        <select class="form-control select2" id="news_status_id" name="news_status_id">
                                            <option value=" " selected="selected">Select One</option>
                                            @if($NewsStatus)
                                                @foreach($NewsStatus as $NewsStatusItem)
                                                    <option value="{{ $NewsStatusItem->news_status_id }}" @if($NewsStatusItem->news_status_id == $News->news_status_id) {{ 'selected' }} @endif > {{ $NewsStatusItem->news_status_title }}</option>
                                                @endforeach
                                            @else

                                            @endif
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" id="news_series_status" name="status">
                                            <option value="" selected="selected">Select One</option>
                                            <option value="1" @if($News->status == "1") {{ 'selected' }} @endif>Active</option>
                                            <option value="2" @if($News->status == "2") {{ 'selected' }} @endif>Inactive</option>
                                        </select>
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
        $('.select2').select2();
    </script>
@endsection
