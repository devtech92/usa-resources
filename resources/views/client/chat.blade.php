<x-layout.dashboard>

  <div class="chat-wrap">
    <div class="chat_header">
      <ul>
        <li><a href="#">Chats</a></li>
        <li><a href="#">Follow Up</a></li>
      </ul>
    </div>
    <div class="chat_list" style=" min-height: 100vh;">
      <ul>
        <li>
          <div class="row">
            <div class="col-lg-3 col-3">
              <div class="chatImg"><img class="img-fluid" src="{{ asset('images/chatImg.png') }}"></div>
            </div>

            <div class="col-lg-7 col-6">
              <div class="chat_info">
                <h3 style="font-size: 5vw;">JackSparrow</h3>
                <p>Do not have any time meet up this...</p>
              </div>
            </div>

            <div class="col-lg-2 col-3">
              <div class="chat_icon">
                <img class="img-fluid" src="{{ asset('images/chat_icon.png') }}">
                <img class="img-fluid" src="{{ asset('images/tagImg.png') }}">
              </div>
            </div>

          </div>
        </li>
        @foreach([1,2,3,4,5] as $item)
          <li>
            <div class="row">
              <div class="col-lg-3 col-3">
                <div class="chatImg"><img class="img-fluid" src="{{ asset('images/chatImg.png') }}"></div>
              </div>

              <div class="col-lg-7 col-6">
                <div class="chat_info">
                  <h3 style="font-size: 5vw;">JackSparrow</h3>
                  <p>Do not have any time meet up this...</p>
                </div>
              </div>

              <div class="col-lg-2 col-3">
                <div class="chat_icon">
                  <img class="img-fluid" src="{{ asset('images/chat_icon.png') }}">
                </div>
              </div>

            </div>
          </li>
        @endforeach
      </ul>


    </div>
  </div>
</x-layout.dashboard>
