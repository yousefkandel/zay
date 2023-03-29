@include('back.inc.head')
<div class="min-height-300 bg-primary position-absolute w-100"></div>
{{-- side bar --}}
@include('back.inc.sideBar')
{{-- side bar --}}
{{-- navBar --}}
@include('back.inc.nav')
  <!-- End Navbar -->
  @yield('admin')

    @include('back.inc.footer')
