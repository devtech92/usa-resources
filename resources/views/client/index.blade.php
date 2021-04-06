<x-layout.app>

  <div class="top-bar">
    <div class="container">
      <div class="topbar">
        <h2>New feature including Direct Buy & Sell</h2>
      </div>
    </div>
  </div>

  <div class="header_wrap">


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/main_logo.png') }}" alt=""></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
          <button class="close-toggler" type="button" data-toggle="offcanvas">
            <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
          </button>
          <ul class="navbar-nav mx-auto pl-lg-5 pl-0 d-flex">
            <li class="nav-item">
              <a class="nav-link text-white active" href="/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">MY PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">RESOURCES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">SELL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">SHOP</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white signin" href="#">SIGN IN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <!--Header End-->


  <!--Video Start-->
  <div class="video">
    <div class="container">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('videos/Cosplay-exchange-Aniamtion.mp4') }}" type="video/mp4">
      </video>

    </div>
  </div>
  <!--Video End-->

  <!--CTA Start-->
  <div class="cta-overlap">
    <div class="container">
      <div class="text">
        <h2 class="h3">SEARCH COSPLAY ACROSS AMERICA</h2>
        <div class="ml-auto btn-wrap">
          <a href="#" class="btn-cta btn gold-btn">Try For Free</a>
        </div>
      </div>
    </div>
  </div>
  <!--CTA End-->


  <!--Sell & Buy Start-->
  <div class="sell_buy-Wrp">
    <div class="container">
      <div class="sellWraper">

        <ul class="tabsLinks">
          <li><a href="#">BUY</a></li>
          <li><a href="#">SELL</a></li>
          <li><a href="#">TRADE</a></li>
        </ul>


        <div class="row cosWrp">
          <div class="col-lg-6 col-md-6">
            <h2>COSPLAYS</h2>
            <div class="colImg"><img src="{{ asset('images/cosplays.jpg') }}" alt=""></div>
          </div>

          <div class="col-lg-6 col-md-6">
            <h2>ACCESSORIES</h2>
            <div class="colImg"><img src="{{ asset('images/accessories.jpg') }}" alt=""></div>
          </div>

        </div>


        <p>Exchange your cosplay costumes with thousands of cosplayers across America</p>
        <p><a href="#" class="btn black-btn">View All Cosplays</a></p>


      </div>
    </div>
  </div>
  <!--Sell & Buy End-->


  <!--Home Gallery Start-->
  <div class="home_gallery">
    <div class="container">
      <div class="row no-gutters mt-5">
        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/1.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/2.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/3.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/4.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/5.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a>
            <img src="{{ asset('images/6.png') }}" alt="Image placeholder" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="normal-btn"><a href="#" class="btn normal-btn">View All Cosplays</a></div>
    </div>
  </div>
  <!--Home Gallery Start-->


  <!--Coin Section Start-->
  <div class="meet_wrap">
    <div class="container">

      <div class="meet_coin"><img src="{{asset('images/purchase_coin.png')}}"></div>
      <h2>Meet the cosplay coin </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <p><a href="#" class="btn black-btn">MEMBERSHIP</a></p>


      <div class="home_coins"><img src="{{ asset('images/home_coins.png') }}"></div>


    </div>
  </div>


  <!--Register start-->
  <div class="register-wrap">
    <div class="container">

      <div class="register_page">
        <div class="row">
          <div class="col-lg-8">
            <div class="registerImg"><img class="img-fluid" src="{{ asset('images/registerImg.jpg') }}"></div>
          </div>

          <div class="col-lg-4">
            <div class="register_box">
              <h3>Be Featured</h3>
              <p>We are accepting enteries from cosplayers who would like to be featured on our website and our social
                media.</p>
              <div class="register_btn"><a href="#">Register</a></div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <!--Register end-->


  <!--Ribbon Start-->
  <div class="ribbon-wrapper"><img class="img-fluid" src="{{asset('images/ribbon.png')}}"></div>
  <!--Ribbon start-->

  <!--Footer End-->
  <footer class="site-footer bg-dark" role="contentinfo">
    <div class="container">

      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap mt-5">
        <p class="footer-text m-0"><img src="{{ asset('images/footer_logo.png') }}" alt=""></p>
      </div>


      <div class="row">
        <div class="col-md-12 text-center mb-5">
          <h3 class="text-white gold-highlight">CONNECT</h3>
          <ul class="list-unstyled footer-link footer-social text-center">
            <li class="d-inline-block"><a href="#" class="p-3 m-2 twitter"></a></li>
            <li class="d-inline-block"><a href="#" class="p-3 m-2 facebook"></a></li>
            <li class="d-inline-block"><a href="#" class="p-3 m-2 instagram"></a></li>
            <li class="d-inline-block"><a href="#" class="p-3 m-2 pinterest"></a></li>
            <li class="d-inline-block"><a href="#" class="p-3 m-2 youtube"></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mr-5">
          <h3 class="text-white">Overview</h3>
          <p class="">
            We have designed the most optimal cosplay trading platform in america. By becoming a member, You immediately
            become part of the most engaged community of cosplayers and costume enthusiasts in america.</p>
          <p class="">With very affordable subscriptions you have the option to choose from two membership types. Pay
            only when you sell ($5) or purchase a menthly subscription for $8 a month with absolutley no selling
            fees.</p>
          <p class="">with either membership you will receive unlimited access and costume trading ablities all across
            the country. Get your next custume by trade and save thousands!
          </p>
        </div>
        <div class="col-md-3">
          <h3 class="text-white">Navigate</h3>
          <ul class="list-unstyled footer-link">
            <li class="link-area"><a href="#">Join our mailing list</a></li>
            <li class="link-area"><a href="#">Be Featured</a></li>
            <li class="link-area"><a href="#">Subscriptions</a></li>
            <li class="link-area"><a href="#">My Profile</a></li>
            <li class="link-area"><a href="#">Resources</a></li>
            <li class="link-area"><a href="#">Contact Us</a></li>
            <li class="link-area"><a href="#">Shop</a></li>
            <li class="link-area"><a href="#">Register</a></li>
            <li class="link-area"><a href="#">Sell</a></li>
            <li class="link-area"><a href="#">FAQ</a></li>
          </ul>
        </div>


      </div>


      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap mt-5">
        <p class="footer-text m-0 text-white">Copyright © 2021 COSPLAY EXCHANGE. ALL RIGHTS RESERVED</p>
      </div>
    </div>
  </footer>


</x-layout.app>
