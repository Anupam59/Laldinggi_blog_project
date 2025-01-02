<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-12 col-xl-12">
                <h4 class="text-white">Get In Touch</h4>
            </div>
            @foreach($TopMenu[0]->menu_item as $key=>$TopMenuItem)
                <div class="col-lg-2 col-xl-2 col-md-3">
                    <a href="{{ url('/').$TopMenuItem->menu_item_link }}" class="btn-link text-white">{{ $TopMenuItem->menu_item_bn_title }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Footer End -->
