<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>USA Resources</title>

  {{--    Fontawesome--}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  {{--Style --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  {{--Script--}}
  <script src="{{asset('js/app.js')}}" defer></script>

</head>

<body>

{{--<x-layout.dashboard-top-navbar></x-layout.dashboard-top-navbar>--}}
<div class="container-fluid">
  <div class="row">
    <x-layout.dashboard-sidebar></x-layout.dashboard-sidebar>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 offset-md-2">
      {{ $slot }}
    </main>
  </div>
</div>


{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>--}}


</body>

</html>
