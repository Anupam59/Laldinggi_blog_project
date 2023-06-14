

@extends('Admin.Layout.main')

@section('content')


    <div class="content-wrapper" style="min-height: 1604.08px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">





        @if(!$Category->isEmpty())

            <!-- Default box -->
            <div class="card">
                <div class="card-header">

                    <a class="btn btn-danger btn-sm add_btn" href="{{ url('/') }}/category-create">
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
                            <th style="width: 30%">
                                Name
                            </th>
                            <th style="width: 30%">
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

                        @foreach($Category as $key=>$CategoryItem)

                            <tr>
                                <td>{{ $key+1 }}</td>

                                <td>
                                    <a>{{ $CategoryItem->cat_en_name }}</a>
                                    <br>
                                    <small>{{ $CategoryItem->cat_bn_name }}</small>
                                </td>



                                <td>
                                    <a>{{ $CategoryItem->cat_title }}</a>
                                    <br>
                                    <small><b>slug :</b> {{ $CategoryItem->cat_slug }}</small>
                                </td>





                                <td class="project-state">
                                    @if($CategoryItem->status == 1)
                                        <span class="badge badge-success">Active</span>
                                    @elseif($CategoryItem->status == 2)
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>


                                <td class="project-actions text-right">

                                    <a class="btn btn-primary btn-sm" href="{{ url('/') }}/category-edit/{{ $CategoryItem->cat_id }}">
                                        <i class="fas fa-pencil-alt"></i>
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
                    {{ $Category->onEachSide(3)->links('Admin.Common.Paginate') }}
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

    </script>
@endsection
