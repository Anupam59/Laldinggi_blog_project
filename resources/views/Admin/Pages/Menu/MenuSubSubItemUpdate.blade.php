@extends('Admin.Layout.main')

@section('content')



    <div class="content-wrapper" style="min-height: 1604.08px;" data-select2-id="31">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menu Sub Sub Item Update</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/') }}/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Menu Sub Sub Item Update</li>
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

                        <a class="btn btn-danger btn-sm add_btn" href="{{ url('/admin/') }}/menu-sub-sub-item-list">
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




                        <form action="{{ url('/menu-sub-sub-item-update/'.$MenuSubSubItem->menu_sub_sub_item_id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" value="{{ $MenuSubSubItem->menu_sub_sub_item_title }}" name="menu_sub_sub_item_title" placeholder="Title">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title (বাংলা)</label>
                                        <input type="text" class="form-control" value="{{ $MenuSubSubItem->menu_sub_sub_item_bn_title }}" name="menu_sub_sub_item_bn_title" placeholder="Title (বাংলা)">
                                    </div>
                                </div>



                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Menu </label>
                                        <select class="form-control select2" id="menu_id" name="menu_id" required>
                                            <option value=" " selected="selected">Select One</option>

                                            @if($Menu)
                                                @foreach($Menu as $MenuI)
                                                    <option value="{{ $MenuI->menu_id }}" @if($MenuI->menu_id == $MenuSubSubItem->menu_id) {{ 'selected' }} @endif> {{ $MenuI->menu_title }}</option>
                                                @endforeach
                                            @else

                                            @endif

                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Menu Item</label>
                                        <select class="form-control select2" id="menu_item_id" name="menu_item_id" required>
                                            <option value=" " selected="selected">Select One</option>

                                            @if($MenuItem)
                                                @foreach($MenuItem as $MenuItemI)
                                                    <option value="{{ $MenuItemI->menu_item_id }}" @if($MenuItemI->menu_item_id == $MenuSubSubItem->menu_item_id) {{ 'selected' }} @endif> {{ $MenuItemI->menu_item_title }}</option>
                                                @endforeach
                                            @else

                                            @endif

                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label>Menu Sub Item</label>
                                        <select class="form-control select2" id="menu_sub_item_id" name="menu_sub_item_id" required>
                                            <option value=" " selected="selected">Select One</option>

                                            @if($MenuSubItem)
                                                @foreach($MenuSubItem as $MenuSubItemI)
                                                    <option value="{{ $MenuSubItemI->menu_sub_item_id }}" @if($MenuSubItemI->menu_sub_item_id == $MenuSubSubItem->menu_sub_item_id) {{ 'selected' }} @endif> {{ $MenuSubItemI->menu_sub_item_title }}</option>
                                                @endforeach
                                            @else

                                            @endif

                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Link</label>
                                        <input type="text" class="form-control" value="{{ $MenuSubSubItem->menu_sub_sub_item_link }}" name="menu_sub_sub_item_link" placeholder="Link">
                                    </div>
                                </div>




                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" id="cat_status" name="status">
                                            <option value=" " selected="selected">Select One</option>
                                            <option value="1" @if($MenuSubSubItem->status == "1") {{ 'selected' }} @endif>Active</option>
                                            <option value="2" @if($MenuSubSubItem->status == "2") {{ 'selected' }} @endif>Inactive</option>
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
        $('#menu_id').select2();
        $('#menu_item_id').select2();
        $('#menu_sub_item_id').select2();
        $('#cat_status').select2();



        $('#menu_id').on('change',function (e){
            var menu_id = e.target.value;
            axios.post('/MenuItemGetData',{menu_id:menu_id}).then(function (response) {
                var JsonData = response.data;
                $('#menu_item_id').empty();
                $('#menu_sub_item_id').empty();
                $('#menu_item_id').append( JsonData );

            });
        });


        $('#menu_item_id').on('change',function (e){
            var menu_item_id = e.target.value;
            axios.post('/MenuSubItemGetData',{menu_item_id:menu_item_id}).then(function (response) {
                var JsonData = response.data;
                $('#menu_sub_item_id').empty();
                $('#menu_sub_item_id').append( JsonData );
            });

        });



    </script>

@endsection
