<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-link flex-grow-0">
{{--                    {{bn_date(date("dM -Y", strtotime($NewsDetails->created_date)))}}--}}
                    <i class="fas fa-calendar-alt text-white pe-2 me-2"> <span class="text-body"> Tuesday, Sep 12, 2024</span></i>
                </div>
                <div class="top-link flex-lg-wrap">
                    <div class="d-flex icon">
                        <p class="mb-0 text-white me-2">Follow Us:</p>

                        @if($SiteCommon->site_fb_link)
                            <a href="{{$SiteCommon->site_fb_link}}" target="_blank" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                        @endif

                        @if($SiteCommon->site_tw_link)
                            <a href="{{$SiteCommon->site_tw_link}}" target="_blank" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                        @endif

                        @if($SiteCommon->site_ig_link)
                            <a href="{{$SiteCommon->site_ig_link}}" target="_blank" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                        @endif

                        @if($SiteCommon->site_yt_link)
                            <a href="{{$SiteCommon->site_yt_link}}" target="_blank" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                        @endif

                        @if($SiteCommon->site_in_link)
                            <a href="{{$SiteCommon->site_in_link}}" target="_blank" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                        @endif

                        @if($SiteCommon->site_spe_link)
                            <a href="{{$SiteCommon->site_spe_link}}" target="_blank" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar bg-light navbar-expand-xl">
                <a href="{{ url('/') }}" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">LaldiGGi</p>
                    <small class="text-body fw-normal" style="letter-spacing: 9px;">newspaper</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-1" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
{{--                        <a href="/" class="nav-item nav-link active">Home</a>--}}

                        @foreach($TopMenu[0]->menu_item as $key=>$TopMenuItem)
                        <div class="nav-item dropdown">
                            <a href="{{ url('/').$TopMenuItem->menu_item_link }}" class="nav-link @if(!$TopMenu[0]->menu_item[$key]->menu_sub_item->isEmpty()) {{ 'dropdown-toggle' }} @endif">{{ $TopMenuItem->menu_item_bn_title }}</a>
                            @if(!$TopMenu[0]->menu_item[$key]->menu_sub_item->isEmpty())
                                <div class="dropdown-menu m-0 rounded-0">
                                    @foreach($TopMenu[0]->menu_item[$key]->menu_sub_item as $key=>$TopSubMenuItem)
                                    <a href="{{ url('/').$TopSubMenuItem->menu_sub_item_link }}" class="dropdown-item">{{ $TopSubMenuItem->menu_sub_item_bn_title }}</a>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                        @endforeach

                    </div>

                    <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                        <a href="{{ url('search') }}" class="btn-search btn border border-primary btn-sm-square rounded-circle bg-white my-auto"><i class="fas fa-search text-primary"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
