@extends('Site.Layout.SiteMain')
@section('SiteContent')

    @include('Site.Component.Features',['News'=>$SelectiveNews])
    @include('Site.Component.TopSection1')
    @include('Site.Component.Subscribe')
    @include('Site.Component.NewsSection1',['News'=>$PoliticsNews, 'More'=>null])
    @include('Site.Component.NewsSection1',['News'=>$BangladeshNews, 'More'=>null])
    @include('Site.Component.NewsSection4')
    @include('Site.Component.NewsSection1',['News'=>$InternationalNews, 'More'=>null])
    @include('Site.Component.NewsSection3',['News'=>$SportsNews])

@endsection
@section('SiteScript')
    @yield('NewsSection4')
    <script>

    </script>
@endsection
