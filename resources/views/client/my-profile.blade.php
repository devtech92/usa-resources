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
  <link rel="stylesheet" href="{{asset('css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('css/cascade-slider.css')}}">


</head>

<body>

<main role="main">

  <div id="app">

    <div class="main-page-bg" style="overflow-x: hidden; background-size: cover; background-repeat: no-repeat; ">
      <!-- ----------------------Navbar----------------------------------- -->
      <!-- <button type="button" class="sidebar-togl"><i class="fas fa-bars"></i></button> -->
      <div class="sidenav mySidebar">
        <button class="navbar-toggler" id="close_nav" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar" style="font-size: 50px; border: medium none; margin-left: -20px;">
          <span class="fa fa-times"></span>
        </button>
        <img src="{{ asset('images/logo.png') }}" class="img-fluid logomain">
        <a href="#">My Profile</a>
        <a href="#">Shop</a>
        <a href="#">Post</a>
        <a href="#">My Listings</a>
        <a href="#">Favorites</a>
        <a href="#">Cosplay Coins</a>
        <a href="#">Dashboard</a>
        <a href="#">Q & A</a>
        <div class="logo3">
          <img src="{{ asset('images/logo3.png') }}" alt="logo3">
        </div>
      </div>

      <nav class="navbar navbar-expand-md bg-transparent navbar-dark">
        <button class="navbar-toggler" id="open_nav" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar"
                style="margin-left: 0px; font-size: 50px; border: none; margin-left: -20px">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline">
          <input class="" type="text" placeholder="Search all cosplays...">
        </form>

        <div class="icons ">
          <div class="button button-download ">
            <input type="submit" class="btn" value="Download App">
          </div>
          <img src="{{ asset('images/cart.png') }}" alt="logo3" style="max-width: 110px;">
        </div>
      </nav>
      <div class="main-content">
        <section class="sec-testmonial" style="padding-left: 350px;">
          <div class="container-fluid">
            <div class="d-flex justify-content-center mx-auto">
              <h1 class="text-center mb-3 marina">M<span>ARINA</span></h1>
            </div>
            <div class="slider-wrap mt-2">
              <div class="cascade-slider_container" id="cascade-slider">
                <div class="cascade-slider_slides">
                  <div class="cascade-slider_item">
                    <div class="testimonial-slide">
                      <div class="testimonial-img">
                        <img src="{{ asset('images/center_image.png') }}" alt="right" class="img-responsive" >
                      </div>
                      <div class="testimonial-details">
                        <div class='rating-stars text-center'>
                          <ul id='stars'>
                            <li class='star selected' title='Poor' data-value='1'>
                              <img src="{{ asset('images/single-stars.png') }}" alt="" class="active">
                              <img src="{{ asset('images/single-stars-2.png') }}" alt=""
                                   class="deactive">
                            </li>
                            <li class='star selected' title='Fair' data-value='2'>
                              <img src="{{ asset('images/single-stars.png') }}" alt="" class="active">
                              <img src="{{ asset('images/single-stars-2.png') }}" alt=""
                                   class="deactive">
                            </li>
                            <li class='star selected' title='Good' data-value='3'>
                              <img src="{{ asset('images/single-stars.png') }}" alt="" class="active">
                              <img src="{{ asset('images/single-stars-2.png') }}" alt=""
                                   class="deactive">
                            </li>
                            <li class='star selected' title='Excellent' data-value='4'>
                              <img src="{{ asset('images/single-stars.png') }}" alt="" class="active">
                              <img src="{{ asset('images/single-stars-2.png') }}" alt=""
                                   class="deactive">
                            </li>
                            <li class='star selected' title='WOW!!!' data-value='5'>
                              <img src="{{ asset('images/single-stars.png') }}" alt="" class="active">
                              <img src="{{ asset('images/single-stars-2.png') }}" alt="" class="deactive">
                            </li>
                          </ul>
                        </div>

                        <div class="cs-button text-center">
                          <a href="#">My Profile</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

</main>

<script src="{{asset('js/app.js')}}" defer></script>

</body>

</html>
