
@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Site Info</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Site Info</li>
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
                        <a class="btn btn-danger btn-sm add_btn" href="#">
                            Site Info Page
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





                        <form action="{{ url('about-update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" class="form-control" name="site_name" value="{{ $SiteCommon->site_name }}" placeholder="Site Name...">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Time Zone</label>
                                        <input type="text" class="form-control" name="time_zone" value="{{ $SiteCommon->time_zone }}" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Email</label>
                                        <input type="text" class="form-control" name="site_email" value="{{ $SiteCommon->site_email }}" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Contact</label>
                                        <input type="text" class="form-control" name="site_contact" value="{{ $SiteCommon->site_contact }}" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Contact (বাংলা)</label>
                                        <input type="text" class="form-control" name="site_bn_contact" value="{{ $SiteCommon->site_bn_contact }}" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Title</label>
                                        <input type="text" class="form-control" name="site_adout_bn_title" value="{{ $SiteCommon->site_adout_bn_title }}" placeholder="Site Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Description</label>
                                        <input type="text" class="form-control" name="site_adout_bn_title" value="{{ $SiteCommon->site_adout_bn_title }}" placeholder="Title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="site_adout_description" placeholder="Description ...">{{ $SiteCommon->site_adout_description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description (বাংলা)</label>
                                        <textarea class="form-control" rows="3" name="site_adout_bn_description" placeholder="Description (বাংলা) ...">{{ $SiteCommon->site_adout_bn_description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="site_adout_img">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        @if($SiteCommon->site_adout_img)
                                            <img class="img-fluid w-100" src="{{asset($SiteCommon->site_adout_img)}}" alt="Photo">
                                        @else
                                            <img class="img-fluid w-100" src="{{asset('Admin/dist/img/photo1.png')}}" alt="Photo">
                                        @endif
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
