<x-layout.app>
  <div class="favorite-wrap">
    <div class="container">
      <h1><i class="far fa-heart"></i> My Listing <i class="far fa-heart"></i></h1>

      <div class="row">
        @foreach([1,2,3,4] as $item)
          <div class="col">

            <div class="favWro">
              <div class="noimg"><img src="{{ asset('images/noImg.jpg') }}"></div>
              <h3><a href="#">New Anthropologie Flor...</a></h3>
              <div class="iconswrp">
                <span class="coin"><i class="fas fa-coins"></i></span>
                <span><i class="fas fa-dollar-sign"></i></span>
              </div>

              <p>Anthropologie</p>

              <div class="pricingbox">
                <div class="priceInfo">$114 <span>$128</span></div>
                <div class="offprice">10% <span>OFF</span></div>
                <div class="heart_icon"><a href="#"><i class="fas fa-heart"></i></a></div>
              </div>
            </div>

          </div>
        @endforeach
      </div>

      <div class="row">
        @foreach([1,2,3,4] as $item)
          <div class="col">

            <div class="favWro">
              <div class="noimg"><img src="{{ asset('images/noImg.jpg') }}"></div>
              <h3><a href="#">New Anthropologie Flor...</a></h3>
              <div class="iconswrp">
                <span class="coin"><i class="fas fa-coins"></i></span>
                <span><i class="fas fa-dollar-sign"></i></span>
              </div>

              <p>Anthropologie</p>

              <div class="pricingbox">
                <div class="priceInfo">$114 <span>$128</span></div>
                <div class="offprice">10% <span>OFF</span></div>
                <div class="heart_icon"><a href="#"><i class="fas fa-heart"></i></a></div>
              </div>
            </div>

          </div>
        @endforeach
      </div>

    </div>
  </div>
</x-layout.app>
