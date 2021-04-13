<x-layout.app>

  <div class="memWrp_box">
    <div class="container-fluid text-white" style="background-color: black; font-family: 'Conv_CormorantGaramond-Light';">

      <div class="row" style="
        background-image: url({{asset('images/app-bg.jpg')}});
        background-position: center 600px;
        background-repeat: no-repeat;
        ">
        <div class="col">
          <div class="member-wrap">
            <div class="follow_member">
              <div class="d-flex m-0 p-0 justify-content-between">

                <div class="p-3">
                  <img src="{{ asset('images/coin_small.png') }}">
                  <span class="h1">1,353</span>
                </div>

                <div>
{{--                  <div class="mem_circle_icon"><img src="images/circle_icon.jpg"></div>--}}
                </div>

              </div>
            </div>

            <div class="member_content text-center">
              <div class="memberImg">
{{--                <img class="img-fluid w-75" src="{{asset('images/membersImg.png')}}">--}}
                <image-slider></image-slider>
              </div>
              <div class="my-2">
                <a href="#"><img class="h-25 w-25" src="{{asset('images/follow_btn.png')}}"></a>
              </div>
              <h1 class="my-3 text-xl" style="font-size: 5rem; font-family: 'Conv_Bright Sunshine Demo';">Marina
                Bella</h1>
              <p class="h2 mt-5 text-xl ">Success is Belief & Effort Combined.</p>
              <p class="h2 text-xl m-n1">WI Based Cosplayer</p>
              <p class="h2 mt-5 text-xl ">Next Con: C2E2 chocagp</p>
              <p class="h2 text-xl m-n1">Cosplans: Nefretiti, Yeenefer & Mermaid Marina</p>
              <p class="h2 text-xl m-n1">Linktree. Blahblah halh</p>

              <div class="listingImg mt-5"><a href="#"><img src="{{asset('images/listingImg.png')}}"></a></div>

              <div class="h2 my-5 mb-1"><a class="text-white" href="#">Chat</a></div>

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>

</x-layout.app>
