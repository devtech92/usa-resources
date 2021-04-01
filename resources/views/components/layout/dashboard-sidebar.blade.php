
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse text-center overflow-auto vh-100"
     style="background-color: black; color: white; font-size: 20px;">

  <div class="position-sticky overflow-auto">
      <a href="/">
        <img class="h-25 img-fluid img-responsive" src="{{ asset('images/logo.jpg') }}" alt="log">
      </a>

    <ul class="nav flex-column pt-3">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          My Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file"></span>
          Listing Gallery
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="shopping-cart"></span>
          Memebers/ Subscriptions
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Manage System
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2"></span>
          Pending Approval
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('admin/transaction') ? 'active' : '' }}" href="/admin/transaction">
          <span data-feather="layers"></span>
          Transaction
        </a>
      </li>
    </ul>

    <img class="img-fluid mt-3" src="{{ asset('images/dashboard-bottom.png') }}" alt="bottom-arrow" style="height: 35px">
  </div>
</nav>
