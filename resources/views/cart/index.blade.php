<x-layout.app>
  <style>

    .table th {
      border-bottom-color: red !important;
    }

    table > thead > tr > th {
      /*border-bottom-width: 4px;*/
      /*border-bottom-color: #ffed4a;*/
    }

  </style>


  <div class="icon-bar">
    {{--        <a href="#" class="bg-primary text-white" style="writing-mode: vertical-rl;transform: rotate(180deg);">--}}
    {{--            CONTACT US--}}
    {{--        </a>--}}
    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
    <a href="#" class="google"><i class="fab fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
    {{--        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>--}}
  </div>


  <div class="mt-5">
    <div class="container">

      <nav class="navbar navbar-light bg-light mb-3">
        <a class="navbar-brand font-weight-bold">Cart</a>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <div class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-house-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-chevron-double-right ml-1" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                        d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd"
                        d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                <span class="text-primary ml-1">Cart</span>
              </div>
            </a>
          </li>
        </ul>
      </nav>


      <table class="table table-bordered border-light">
        <thead>
        <tr class="bg-light text-center">
          <th scope="col">Delete</th>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach([1,2,3,4] as $item)
          <tr class="text-center">
            <td class="align-middle">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                   class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path
                  d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg>
            </td>
            <td class="align-middle">
              <img src="https://picsum.photos/seed/picsum/300" alt="product image" class="img-fluid"
                   style="width: 10%">
            </td>
            <td class="align-middle">Lorem ipsum dolor.</td>
            <td class="align-middle">$65.45</td>
            <td class="align-middle">Quantity 1</td>
            <td class="align-middle">$100.23</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
        <button class="btn btn-dark">Update Cart</button>
      </div>

      <div>

        <div class="row mt-5">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header bg-dark">
                <p class="mb-0 text-white">COUPON</p>
              </div>
              <div class="card-body">
                <h5 class="card-title">Enter your coupon if you have one.</h5>
                <div class="input-group mb-1">
                  <input type="text" class="form-control" placeholder="Coupon code"
                         aria-label="Recipient's username" aria-describedby="coupon-code">
                  <button class="btn btn-dark text-white font-weight-bold" type="button" id="coupon-code">APPLY COUPON</button>
                </div>
                <a href="#" class="btn btn-link">Search active coupons</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-header bg-dark">
                <p class="mb-0 text-white">CART TOTALS</p>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p>Subtotal</p>
                  <p><strong>$215.3</strong></p>
                </div>
                <div class="d-flex justify-content-between">
                  <p>Shipping</p>
                  <p><strong>FREE</strong></p>
                </div>
                <div class="d-flex justify-content-end border-bottom">
                  <a href="#" class="mr-3">Happiness Guarantee</a>
                  <a href="#">Shipping Guarantee</a>
                </div>
                <div class="d-flex justify-content-between mt-3">
                  <p>Total</p>
                  <p><strong>$215.00</strong></p>
                </div>

                <div class="d-flex justify-content-end mb-2">
                  <button class="btn btn-primary">Proceed to Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <style>

  </style>
</x-layout.app>
