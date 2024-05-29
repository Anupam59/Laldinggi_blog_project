@extends('Site.Layout.SiteMain')
@section('SiteContent')

    @include('Site.Component.Features',['News'=>$SelectiveNews])
    @include('Site.Component.TopSection1')
    @include('Site.Component.Subscribe')
    @include('Site.Component.NewsSection1',['News'=>$PoliticsNews])
    @include('Site.Component.NewsSection1',['News'=>$BangladeshNews])
    @include('Site.Component.NewsSection4')
    @include('Site.Component.NewsSection1',['News'=>$InternationalNews])
    @include('Site.Component.NewsSection3',['News'=>$SportsNews])

@endsection
@section('SiteScript')
    @yield('NewsSection4')
    <script>

    </script>
@endsection
