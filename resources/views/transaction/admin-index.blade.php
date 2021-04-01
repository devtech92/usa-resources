<x-layout.dashboard>

  <div class="mt-5">
    <div class="container">

      <h1 class="bg-success py-1 text-white text-center">Transactions</h1>

{{--      <h1 class="text-center">Direct Transaction Sales</h1>--}}
{{--      <div class="form-group" style="width: 25%">--}}
{{--        <label for="form-label tax-year">Your tax year</label>--}}
{{--        <select class="form-control" id="tax-year">--}}
{{--          <option>2021</option>--}}
{{--          <option>2020</option>--}}
{{--        </select>--}}
{{--      </div>--}}
      <div class="row">
        <div class="col-7">
          <table class="table table-bordered border-light">
            <thead class="bg-info text-white ">
            <tr>
              <th scope="col">User Name</th>
              <th scope="col">Sales Fees</th>
              <th scope="col">Coin Purchases</th>
              <th scope="col">Subscription Fee</th>
              <th scope="col">Monthly</th>
              <th scope="col">Year to Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach([1,2,3,4,5,6,7,8,9] as $item)
              <tr>
                <td class="align-left">ABCGuy</td>
                <td class="align-right">00</td>
                <td class="align-right">00</td>
                <td class="align-right">01</td>
                <td class="align-right">10</td>
                <td class="align-right">10</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <div class="col">
          <table class="table table-bordered border-light">
            <thead class="bg-light">
            <tr>
              <th><p>All Users Monthly Total</p></th>
              <th><p>All Users Year to Date</p></th>
              <th><p>Coin Dashboard Y2D</p></th>
            </tr>
            </thead>
            <tbody>
            @foreach([1,2,] as $item)
              <tr>
                <td class="align-middle">$001</td>
                <td class="align-middle">$001</td>
                <td class="align-middle">$020</td>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>

</x-layout.dashboard>
