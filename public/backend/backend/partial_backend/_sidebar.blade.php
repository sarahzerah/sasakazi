@endsection
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a  class="brand-link">
      {{-- <img src="{{asset('/images/icons/Pluslogo.png')}}"
           alt="Plusfarm"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Shopnbuy</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image_thumb_url}}"
          class="img-circle elevation-2" alt="{{ Auth::user()->name}}"/>
        </div>
        <div class="info">
          <a class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
             @hasanyrole('superadmin|accountant')
             <a href="{{ route('admin') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
             @endhasanyrole
                @hasanyrole('inventory|secretary|cashier|admin')
          <a href="{{ route('home') }}" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
                 @endhasanyrole
          </li>
            @role('superadmin')
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
                <a href="{{ route('backend.users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.roles.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('backend.permissions.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permissions</p>
                </a>
              </li>
            </ul>
          </li>
           @endrole
            @role('superadmin')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
             Invetory Management
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                 @can('inventories-list')
                <a href="{{ route('backend.inventories.index') }}" class="nav-link">
                <i class="far fas fa-align-justify nav-icon"></i>
                  <p> Inventory Records</p>
                </a>
                 @endcan
              </li>
              <li class="nav-item">
                 @can('inventories-list')
                <a href="{{ route('inv-orders') }}" class="nav-link">
                <i class="far fas fa-align-justify nav-icon"></i>
                  <p> Inventory Orders</p>
                </a>
                 @endcan
              </li>
            </ul>
          </li>
           @endrole
          @role('superadmin')
         <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
            Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sales') }}" class="nav-link">
                  <i class="far fa-money-bill-alt nav-icon"></i>
                  <p>Pos</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{ route('sales-records') }}" class="nav-link">
                      <i class="far fas fa-money-bill nav-icon"></i>
                      <p>Sales</p>
                    </a>
                    </li>
               {{-- <li class="nav-item">
                <a href="{{ url('activities') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity Log</p>
                </a>
              </li> --}}
            </ul>
          </li>
             @endrole
            <li class="nav-item">
                @can('categories-list')
                <a href="{{ route('backend.categories.index') }}" class="nav-link">
                <i class="far fas fa-sitemap nav-icon"></i>
                  <p>Categories</p>
                </a>
                @endcan
              </li>
              @hasanyrole('accountant|superadmin')
               <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-file-invoice-dollar"></i>
                    <p>
                  Account
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="{{ route('all-orders') }}" class="nav-link">
                      <i class="far fas fa-database nav-icon"></i>
                      <p>All Orders</p>
                    </a>
                    </li>
                     <li class="nav-item">
                    <a href="{{ route('approve-orders') }}" class="nav-link">
                      <i class="far fas fa-table nav-icon"></i>
                      <p>Approved Orders</p>
                    </a>
                    </li>
                   <li class="nav-item">
                    <a href="{{ route('all-customers') }}" class="nav-link">
                      <i class="far fas fa-users nav-icon"></i>
                      <p>All Customers</p>
                    </a>
                    </li>
                     <li class="nav-item">
                    <a href="{{ route('user-records') }}" class="nav-link">
                      <i class="far fas fa-users nav-icon"></i>
                      <p>All Users</p>
                    </a>
                    </li>
                  </ul>
                </li>
                 @endhasanyrole
              <li class="nav-item">
                  @can('poses-list')
                <a href="{{ route('backend.pos.index') }}" class="nav-link">
                <i class="far fas fa-shopping-cart nav-icon"></i>
                  <p>Sales</p>
                </a>
                 @endcan
              </li>
             <li class="nav-item">
                @can('suppliers-list')
                <a href="{{ route('backend.suppliers.index') }}" class="nav-link">
                <i class="far fas fa-address-book nav-icon"></i>
                  <p> Suppliers' Records</p>
                </a>
                  @endcan
              </li>
                 <li class="nav-item">
                      @can('all-orders')
                    <a href="{{ route('all-orders') }}" class="nav-link">
                      <i class="far fas fa-database nav-icon"></i>
                      <p>All Orders</p>
                    </a>
                    @endcan
                    </li>
               <li class="nav-item">
                   @can('customers-list')
                <a href="{{ route('backend.customers.index') }}" class="nav-link">
                <i class="far fas fa-address-card nav-icon"></i>
                  <p> Customers Records</p>
                </a>
                  @endcan
              </li>
               <li class="nav-item">
                  @can('allorders-list')
                <a href="#" class="nav-link">
                  <i class="far fas fa-file-invoice nav-icon"></i>
                  <p>invoice</p>
                </a>
                   @endcan
              </li>
                <li class="nav-item">
                 @can('orders-list')
                <a href="{{ route('backend.orders.index') }}" class="nav-link">
                <i class="far fas fa-table nav-icon"></i>
                  <p> Order Records</p>
                </a>
                 @endcan
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
                <a href="{{route('backend.account.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item">
                   <?php $user = Auth::user(); ?>
                <a href="{{ route('profile-edit', ['user' => $user]) }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p> Edit Password</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item">
                <a href="{{ route('logout') }}"   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">
                  <i class=" nav-icon fas fa-sign-out-alt"></i>
                  <p> Sign Out</p>
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
