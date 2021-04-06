<x-layout.app>
  <div class="text-white" style="background-color: black; font-family: 'Conv_CormorantSC-Light';">
    <div class="container text-center">
      <div class="coinSec" style="
        background-image: url({{asset('images/coin-popup-bg.jpg')}});
        background-position: center top;
        background-repeat: no-repeat;
        position: relative;
        padding: 520px 40px 100px 40px;
        ">
        <button class="close_icon_pop" type="button" data-toggle="offcanvas">
          <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
        </button>
        <h1 class="mb-0" style="font-size: 70px;">You Received</h1>
        <p class="mb-0" style="font-size: 70px; font-family: 'Open Sans', sans-serif; color: #b9bdc2">15</p>
        <h3 class="mb-0" style="font-size: 70px;">Cosplay Coins</h3>
        <div class="coins"><img class="img-fluid w-50" src="{{ asset('images/coins.png') }}"></div>
        <a class="btn btn-primary btn-lg my-5 p-3 text-xl" href="#">View Balance</a>
      </div>
    </div>
  </div>

</x-layout.app>
