<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>USA Resources</title>


  {{--    Fontawesome--}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">

  {{--Style --}}
  <script src="{{asset('js/app.js')}}" defer></script>

</head>

<body>

<x-top-navbar></x-top-navbar>

<main role="main">

  <div id="app" class="mt-3">
    {{ $slot }}
  </div><!-- /.container -->

</main>

<script src="{{asset('js/jquery.nice-select.js')}}"></script>
<!-- general script file -->
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

@stack('scripts')


</body>

</html>
