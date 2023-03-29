@section('title')
Home
@endsection  <!-- Start head -->

@include('front.inc.heade')
  <!-- end head -->

  <!-- Start Top Nav -->
@include('front.inc.topNav')
<!-- Close Top Nav -->


<!-- Header -->
@include('front.inc.nav')
<!-- Close Header -->

<!-- Modal -->
@include('front.inc.model')

@yield('info')


@include('front.inc.footer')
