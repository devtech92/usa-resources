<x-layout.dashboard>
  <div class="bg-dark text-white" style="font-family: 'Conv_CormorantSC-Light';">
    <div class="member_header d-flex justify-content-between px-5 py-3" style="background-color: #130015;">
      <h1><img src="{{asset('images/green_circle.png')}}"> JackSparrow</h1>
      <h1><img src="{{asset('images/green_circle.png')}}"> Marina</h1>
    </div>

    <div class="chat-list p-5" style="    font-family: 'Conv_CormorantGaramond-Light';">
      @foreach([1,2,3,4] as $item)
        <div class="row mt-5">
          <div class="col-4">
            <div class="memberImg"><img class="img-fluid" src="{{asset('images/member01.png')}}"></div>
          </div>
          <div class="col-8 mt-md-4">
            <h3 style="font-size: 2.5vw;">
              Do you Think we can do that gig in Atlanta? Do you Think we can do that gig in Atlanta?
              Do you Think we can do that gig in Atlanta?
            </h3>
          </div>
        </div>
      @endforeach


      <div class="member_footer text-right">
        <span><a href="#"><img src="{{asset('images/camera.png')}}"></a></span>
        <span><a href="#"><img src="{{asset('images/link.png')}}"></a></span>
      </div>

      <div class="submit-button">
        <div class="input-group input-group-lg my-5">
          <input type="text" class="form-control py-4" placeholder="Enter your message" aria-label="Recipient's username"
                 aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-outline-light" type="button" id="button-addon2">Submit</button>
            <a href="#" class="btn btn-outline-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
              </svg>
            </a>
            <a href="#" class="btn btn-outline-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>

</x-layout.dashboard>
