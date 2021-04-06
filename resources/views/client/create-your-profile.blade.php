<x-layout.app>
  <div class="contact-wrap profileWrp">
    <div class="container">
      <div class="profilebox">
        <div class="row">
          <div class="col-lg-6 float-right">
            <div class="formbox">
              <h3>Create Your Profile</h3>
              <form>
                <div class="input-group">
                  <label>Create yout Username <span><img src="{{ asset('images/star.png') }}"></span></label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>

                <div class="input-group">
                  <label>Email <span><img src="{{ asset('images/star.png') }}"></span>
                    <span class="alertbox">(To Alert you cosplay requests)</span>
                  </label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group">
                  <label>Choose a Password <span><img src="{{ asset('images/star.png') }}"></span>
                  </label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group">
                  <label>Conforming Password <span><img src="{{ asset('images/star.png') }}"></span></label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group">
                  <label>Phone <span><img src="{{ asset('images/star.png') }}"></span> <span
                      class="alertbox">(area code + number)</span></label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group">
                  <label>Profile Photo <span><img src="{{ asset('images/star.png') }}"></span></label>
                  <input type="file" name="" class="form-control" placeholder="">
                </div>

                <div class="input-group text-center">
                  <h3>Create Your Profile</h3>
                </div>

                <div class="input-group">
                  <label>Create yout Username </label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>

                <div class="input-group">
                  <label>Shipping Address</label>
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group">
                  <input type="text" name="" class="form-control" placeholder="">
                </div>
                <div class="input-group btnWrp">
                  <button class="p-0"><img src="{{ asset('images/submit_btn.png') }}"></button>
                </div>

              </form>

            </div>
          </div>

          <div class="col-lg-6">
            <div class="ladyImg profileformImg"><img src="{{ asset('images/profileImg.jpg') }}"></div>
          </div>

        </div>

      </div>
    </div>

  </div>
</x-layout.app>
