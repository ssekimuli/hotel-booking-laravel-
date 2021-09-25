    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#A17917">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-smile-wink" style="color: black;"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="color: black;">HOTEL</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('admindash')}}">
          <i class="fas fa-fw fa-tachometer-alt" style="color: black;"></i>
          <span style="color: black;">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-dark">
        website data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('clients')}}">
          <i class="fas fa-fw fa-eye" style="color: black;"></i>
          <span><b>CLIENT DATA</b></span>
        </a>
         <a class="nav-link" href="{{url('roles')}}">
          <i class="fas fa-fw fa-database" style="color: black;"></i>
          <span><b>ROLES</b></span>
        </a>
         <a class="nav-link collapsed" href="{{url('amenities')}}">
          <i class="fas fa-fw fa-database" style="color: black;"></i>
          <span><b>AMENITIES DATA</b></span>
        </a>
         <a class="nav-link collapsed" href="{{url('category')}}">
          <i class="fas fa-fw fa-database" style="color: black;"></i>
          <span><b>CATEGORY ROOM</b></span>
        </a>
         <a class="nav-link collapsed" href="{{url('package')}}">
          <i class="fas fa-fw fa-database" style="color: black;"></i>
          <span><b>PACKAGE DATA</b></span>
        </a>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog" style="color: black;"></i>
          <span>ROOM</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">VIEW</h6>
            <a class="collapse-item text-dark" href="{{url('addroom')}}">Add room</a>
            <a class="collapse-item text-dark" href="{{url('available')}}">Available room</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-fire" style="color: black;"></i>
          <span>Bookings</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Bookings:</h6>
            <a class="collapse-item" href="{{url('today')}}">Today</a>
            <a class="collapse-item" href="{{url('tomorrow')}}">Tomorrow</a>
            <a class="collapse-item" href="{{url('yesterday')}}">Yesterday</a>
            <a class="collapse-item" href="{{url('pending')}}">Pending</a>
             <a class="collapse-item" href="{{url('week')}}">Week</a>
             <a class="collapse-item" href="{{url('month')}}">Month</a>
              <a class="collapse-item" href="{{url('year')}}">Year</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-dark">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder" style="color: black;"></i>
          <span>Reports</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">report:</h6>
             <a class="collapse-item" href="utilities-other.html">Week</a>
             <a class="collapse-item" href="utilities-other.html">Month</a>
              <a class="collapse-item" href="utilities-other.html">Year</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-user" style="color: black;"></i>
          <span>Register</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-key" style="color: black;"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->