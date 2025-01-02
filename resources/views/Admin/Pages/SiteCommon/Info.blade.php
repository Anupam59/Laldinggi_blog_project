
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
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
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





                        <form action="{{ url('info-update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Time Zone</label>
                                        <input type="text" class="form-control" name="time_zone" value="{{ $SiteCommon->time_zone }}" placeholder="Time Zone">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" class="form-control" name="site_name" value="{{ $SiteCommon->site_name }}" placeholder="Site Name...">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Site Email</label>
                                        <input type="text" class="form-control" name="site_email" value="{{ $SiteCommon->site_email }}" placeholder="Site Email">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Contact</label>
                                        <input type="text" class="form-control" name="site_contact" value="{{ $SiteCommon->site_contact }}" placeholder="Site Contact">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Contact (বাংলা)</label>
                                        <input type="text" class="form-control" name="site_bn_contact" value="{{ $SiteCommon->site_bn_contact }}" placeholder="Site Contact (বাংলা)">
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <hr class="hr-red">
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Title</label>
                                        <input type="text" class="form-control" name="site_title" value="{{ $SiteCommon->site_title }}" placeholder="Site Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Link</label>
                                        <input type="text" class="form-control" name="site_link" value="{{ $SiteCommon->site_link }}" placeholder="Site Link">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Site Description</label>
                                        <textarea class="form-control" rows="3" id="SiteDescriptionId" name="site_description" placeholder="Site Description ...">{{ $SiteCommon->site_description }}</textarea>
                                    </div>
                                </div>



                                <input id="showTagId" type="text" class="form-control d-none" name="site_keyword" value="{{ $SiteCommon->site_keyword }}" placeholder="Site Keyword">
                                <div class="col-md-12 tag_input">
                                    <div class="wrapper">
                                        <div class="title">
                                            <label>Site Keyword</label>
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






                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Address</label>
                                        <textarea class="form-control" rows="3" id="SiteAddressId" name="site_address" placeholder="Site Address ...">{{ $SiteCommon->site_address }}</textarea>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Site Address (বাংলা)</label>
                                        <textarea class="form-control" rows="3" id="SiteBnAddressId" name="site_bn_address" placeholder="Site Address (বাংলা) ...">{{ $SiteCommon->site_bn_address }}</textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr class="hr-red">
                                </div>



                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Logo Image</label>
                                        <input type="file" class="form-control" name="site_logo">
                                    </div>

                                    <div class="form-group">
                                        @if($SiteCommon->site_logo)
                                            <img class="img-fluid w-100" src="{{asset($SiteCommon->site_logo)}}" alt="Photo">
                                        @else
                                            <img class="img-fluid w-100" src="{{asset('Admin/dist/img/photo1.png')}}" alt="Photo">
                                        @endif
                                    </div>
                                </div>




                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Logo Big Image</label>
                                        <input type="file" class="form-control" name="site_logo_big">
                                    </div>

                                    <div class="form-group">
                                        @if($SiteCommon->site_logo_big)
                                            <img class="img-fluid w-100" src="{{asset($SiteCommon->site_logo_big)}}" alt="Photo">
                                        @else
                                            <img class="img-fluid w-100" src="{{asset('Admin/dist/img/photo1.png')}}" alt="Photo">
                                        @endif
                                    </div>
                                </div>




                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Favicon Image</label>
                                        <input type="file" class="form-control" name="site_favicon">
                                    </div>

                                    <div class="form-group">
                                        @if($SiteCommon->site_favicon)
                                            <img class="img-fluid w-100" src="{{asset($SiteCommon->site_favicon)}}" alt="Photo">
                                        @else
                                            <img class="img-fluid w-100" src="{{asset('Admin/dist/img/photo1.png')}}" alt="Photo">
                                        @endif
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Default Image</label>
                                        <input type="file" class="form-control" name="site_default_img">
                                    </div>

                                    <div class="form-group">
                                        @if($SiteCommon->site_default_img)
                                            <img class="img-fluid w-100" src="{{asset($SiteCommon->site_default_img)}}" alt="Photo">
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
        $('#SiteDescriptionId').summernote({
            placeholder: 'Site Description',
            height: 120,
        });
        $('#SiteAddressId').summernote({
            placeholder: 'Site Address',
            height: 120,
        });
        $('#SiteBnAddressId').summernote({
            placeholder: 'Site Address',
            height: 120,
        });


    </script>
@endsection
