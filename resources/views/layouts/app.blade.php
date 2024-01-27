<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | Destiny Ecomm</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
 </head>

 <body>
  {{-- <div id="preloder">
   <div class="loader"></div>
  </div> --}}
  @include('header.index')
  @yield('content')
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/player.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  @stack('extra_script')
 </body>

</html>
