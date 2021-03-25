<x-layout.app>

  <div class="mt-5">
    <div class="container">

      <h1 class="text-center">Direct Transaction Sales</h1>
      <div class="form-group" style="width: 25%">
        <label for="form-label tax-year">Your tax year</label>
        <select class="form-control" id="tax-year">
          <option>2021</option>
          <option>2020</option>
        </select>
      </div>

      <table class="table table-bordered border-light">
        <thead>
        <tr class="bg-light">
          <th scope="col">Months</th>
          <th scope="col">Sales Amount</th>
          <th scope="col">Free Paid</th>
          <th scope="col"># of Sales</th>
        </tr>
        </thead>
        <tbody>
        @foreach([1,2,3,4,5,6,7,8,9] as $item)
          <tr>
            <td class="align-middle">
              Lorem
            </td>
            <td class="align-middle">
              $20.33
            </td>
            <td class="align-middle"></td>
            <td class="align-middle">0</td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="bg-light">
          <th scope="col">Total</th>
          <th scope="col">$00.00</th>
          <th scope="col"></th>
          <th scope="col">$0</th>
        </tr>
        </tfoot>
      </table>
      <div>
        <h5>Revenue in sales</h5>
        <h5>Total fees paid</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque dicta dolor, dolorem ea
          error est facere illum nobis numquam odio possimus quas, quis rem repudiandae saepe sapiente sint
          suscipit!
        </p>
      </div>
    </div>
  </div>

</x-layout.app>
