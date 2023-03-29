@extends('front.home')
@section('title')
Home
@endsection
@section('info')
<!-- Start Banner Hero -->
@include('front.home.inc.hero')
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
@include('front.home.inc.categories')
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
@include('front.home.inc.fearured')
<!-- End Featured Product -->

@endsection
