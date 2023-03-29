@section('title')
About
@endsection
@extends('front.home')
@section('info')
<!-- start Banner -->
@include('front.about.inc.Banner')
<!-- Close Banner -->

<!-- Start Services -->
@include('front.about.inc.Services')
<!-- End Services -->

<!-- Start Brands -->
@include('front.about.inc.brands')
<!--End Brands-->
@endsection
