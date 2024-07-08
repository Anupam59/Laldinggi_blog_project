

<style>
    .pagination,
    .jsgrid .jsgrid-pager {
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem
    }
    .page-link {
        color: black
    }
    .pagination.pagination-rounded-flat .page-item {
        margin: 0 .25rem
    }
    .pagination-rounded-flat{

    }
    .pagination-success .page-item.active .page-link{
        background: #1b7dff;
        border-color: #1b7dff
    }
    .pagination.pagination-rounded-flat .page-item .page-link{
        border: none;
        border-radius: 50px;
    }
</style>



@if ($paginator->hasPages())
    <nav>
        <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success" role="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" aria-hidden="true"><i class="fa fa-angle-left"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></a>
                </li>
            @endif

            <?php
            $start = $paginator->currentPage() - 3; // show 3 pagination links before current
            $end = $paginator->currentPage() + 3; // show 3 pagination links after current
            if($start < 1) {
                $start = 1; // reset start to 1
                $end += 1;
            }
            if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
            ?>

            @if($start > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
                </li>
                @if($paginator->currentPage() != 4)
                    {{-- "Three Dots" Separator --}}
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                @endif
            @endif
            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                </li>
            @endfor
            @if($end < $paginator->lastPage())
                @if($paginator->currentPage() + 3 != $paginator->lastPage())
                    {{-- "Three Dots" Separator --}}
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                @endif
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif





{{--<div class="page-content page-container" id="page-content">--}}
{{--    <div class="padding">--}}
{{--        <div class="row container d-flex justify-content-center">--}}
{{--            <div class="col-md-4 col-sm-6 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <nav>--}}
{{--                            <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">--}}
{{--                                <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a></li>--}}
{{--                                <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
