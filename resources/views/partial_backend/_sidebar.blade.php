<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a  class="brand-link">
      {{-- <img src="{{asset('/images/icons/Pluslogo.png')}}"
           alt="Plusfarm"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">sarah</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=""  class="img-circle elevation-2" alt="" />
        </div>
        <div class="info">
          <a class="d-block">sara</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">

                  <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
             </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
             User Management
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Profile Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="# class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p> Edit Password</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class=" nav-icon fas fa-sign-out-alt"></i>
                  <p> Sign Out</p>
                </a>
                 <form id="logout-form" action="#" method="POST" style="display: none;">
                 @csrf
             </form>
              </li>
              <li class="nav-item">
             <form name="clock" class=" ml-4">
              <input style="width:150px;" type="submit" class="trans" name="face" value="">
              </form>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
