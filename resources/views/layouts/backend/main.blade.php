<!DOCTYPE html>
<html lang="en">
  <head>
   @include('partial_backend._head')
     @yield('style')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <!-- Navbar -->
      @include('partial_backend._navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
           @include('partial_backend._sidebar')

            <!-- Sidebar Menu -->

        <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
         @include('partial_backend._pageheader')
          <!-- /.content-header -->
           <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                 @yield('content')
              </div>
            </section>
           <!-- /.content -->

    <!-- /.content -->
      </div>
       <!-- /.content-wrapper -->
  @include('partial_backend._footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
  @include('partial_backend._modal')
 <!-- modal-->
  @include('partial_backend._scripts')
    @yield('modal')
    @yield('script')

</body>
</html>
