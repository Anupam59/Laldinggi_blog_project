<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laldiggi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Anupam Talukdar</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/') }}/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Site Info
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('/') }}/info-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Info</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/about-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/policy-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Policy</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/terms-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Terms</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/communication-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Communication</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Site Setup
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('/') }}/category-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/sub-category-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/sub-sub-category-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Sub Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/news-page-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Page</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/news-type-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Type</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/news-status-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Status</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu Setup
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('/') }}/menu-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/menu-item-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu Item</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/menu-sub-item-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu Sub Item</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/menu-sub-sub-item-list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu Sub Sub Item</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('/') }}/dashboard" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/') }}/dashboard" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Create</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Main Sidebar Container -->




{{--<li class="nav-item menu-open">--}}
{{--    <a href="#" class="nav-link active">--}}
{{--        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--        <p>--}}
{{--            Site Setup--}}
{{--            <i class="right fas fa-angle-left"></i>--}}
{{--        </p>--}}
{{--    </a>--}}

{{--    <ul class="nav nav-treeview">--}}

{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link active">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Active Page</p>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="nav-item">--}}
{{--            <a href="#" class="nav-link">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Inactive Page</p>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--</li>--}}
