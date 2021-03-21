<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse text-center"
     style="background-color: black; color: white; font-size: 20px;">
  <div class="position-sticky">
    <div class="">
      <img class="h-25 w-100 img-fluid" src="{{ asset('images/logo.jpg') }}" alt="log">
    </div>

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
        <a class="nav-link {{ request()->is('transaction') ? 'active' : '' }}" href="/transaction">
          <span data-feather="layers"></span>
          Transaction
        </a>
      </li>
    </ul>


  </div>
</nav>
