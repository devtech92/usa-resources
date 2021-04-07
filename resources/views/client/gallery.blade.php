<x-layout.app>
  <div class="gallery-wrap">
    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light" style="font-family: 'sans-serif'; font-size: 17px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button class="close-toggler" type="button" data-toggle="offcanvas">
            <span><i class="fas fa-times-circle" aria-hidden="true"></i></span>
          </button>

          <form class="form-inline my-2 my-lg-0">
            <div class="userImg"><img src="{{asset('images/userImg.jpg')}}"></div>
            <input class="form-control mr-sm-2" type="search" placeholder="Search all Cosplays" aria-label="Search">
          </form>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Download App <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('images/bell_icon.jpg') }}"></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('images/message_icon.jpg') }}"></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('images/cart_icon.jpg') }}"></a>
            </li>

          </ul>


          <div class="sell_btn">
            <span><a href="#">Sell</a></span>
            <span><a href="#">Shop</a></span>
          </div>
        </div>


      </nav>

      <div class="gallery_logoImg"><img src="{{ asset('images/gallery_logoImg.png') }}"></div>

      <form>
        <div class="input-group">
          <select class="form-control">
            <option>Dropdown</option>
            @foreach([1,2,3,4,5,6] as $item)
              <option value="01">Dropdown</option>
            @endforeach
          </select>
        </div>
      </form>

      <ul class="owl-carousel" style="padding-left: 0px;">
        @foreach([1,2,3,4,5,6] as $item)
          <li class="item">
            <div class="gallery_box">
              <div class="galleryImg"><img class="img-fluid" src="{{asset('images/galleryImg.jpg')}}"></div>
              <div class="gallerysec">
                <div class="gallery_border">
                  <div class="heart_iconWrp"><a href="#"><i class="far fa-heart"></i></a></div>
                  <h3>Mermaid Trail</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ex augue, pellentesque vitae
                    mattis
                    nec.</p>
                  <div class="size">Size L</div>

                  <div class="signsWrp">
                    <span><img src="{{asset('images/dollar_sign.jpg')}}"></span>
                    <span><img src="{{ asset('images/coin_sign.jpg') }}"></span>
                    <span class="rupees">200</span>
                  </div>

                  <div class="freeShipping"><a href="#"><img src="{{asset('images/freeshipping.jpg')}}"></a></div>
                  <div class="followWrp">
                    <div class="user">
                      <span><img src="{{asset('images/userImg.jpg')}}"></span>
                      <span><img src="{{ asset('images/arrows.png') }}"></span>
                      <span>Follow</span>
                    </div>

                    <div class="infoBtn"><a href="#">See Info</a></div>
                  </div>
                </div>
              </div>
            </div>

          </li>
        @endforeach
      </ul>
    </div>
  </div>

</x-layout.app>
