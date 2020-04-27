<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('partials._head')
</head>

<body>
  <!-- preloader start -->
  {{-- <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div> --}}
  <!-- preloader end -->

<!-- header -->

    @include('partials._header')

<!-- /header -->
<!-- Modal -->

    @include('partials._modal')

<!-- /Modal -->
<!-- hero slider -->

    {{-- @include('partials._slider') --}}

<!-- /hero slider -->

@yield('content')


<!-- footer -->
<head>
    @include('partials._footer')
</head>
<!-- /footer -->

    @include('partials._script')
</body>
</html>