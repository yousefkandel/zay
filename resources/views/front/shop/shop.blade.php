@extends('front.home')
@section('title')
Shop
@endsection
@section('info')
<!-- Start Content -->
@include('front.shop.inc.products')
<!-- End Content -->

<!-- Start Brands -->
@include('front.about.inc.brands')
<!--End Brands-->
@endsection
