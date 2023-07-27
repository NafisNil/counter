<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Counters</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
   
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link {{$route == 'about.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('slider.index')}}" class="nav-link {{$route == 'slider.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Slider
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('privacy.index')}}" class="nav-link {{$route == 'privacy.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Privacy
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('term.index')}}" class="nav-link {{$route == 'term.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Term
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('location.index')}}" class="nav-link {{$route == 'location.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Location
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('refund.index')}}" class="nav-link {{$route == 'refund.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Refund Policy
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('event.index')}}" class="nav-link {{$route == 'event.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Event
                
              </p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>


          <li class="nav-header">MISCELLANEOUS</li>

          <li class="nav-header">MULTI LEVEL EXAMPLE</li>

          <li class="nav-header">LABELS</li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>