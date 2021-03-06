<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Yuk Beli | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>
    <ul class="navbar-nav ml-auto">      
      <!-- Account Dropdown Menu -->
      <li class="nav-item dropdown user user-menu">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
          <div class="image">
            <img src="/adminlte/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
            <span>{{Session::get('nama')}}</span>  
          </div>
        </a>        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{url('/admin/logout')}}" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2" aria-hidden="true"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
        </div>        
      </li>       
    </ul>       
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
      <img src="/adminlte/img/logo.jpg"
           alt="YukBeli Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Yuk Beli</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">          
          <a class="d-block">{{Session::get('nama')}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->          
          <li class="nav-item ">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ (Request::segment(2)=='dashboard') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-home"></i>              
              <p>
                Dashboard            
              </p>
            </a>            
          </li>          
          <li class="nav-item">
            <a href="{{ url('/admin/category') }}" class="nav-link {{ (Request::segment(2)=='category') ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar Kategori                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ url('/admin/product') }}" class="nav-link {{ (Request::segment(2)=='product') ? 'active' : ''}}">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Daftar Produk                
              </p>
            </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/user_list')}}" class="nav-link {{ (Request::segment(2)=='user_list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Daftar Pengguna
              </p>
            </a>            
          </li>
          <li class="nav-item has-treeview">
            <a href="{{url('/admin/profile')}}" class="nav-link {{ (Request::segment(2)=='profile') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile Admin
              </p>
            </a>            
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy;YukBeli 2020 .</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
</body>
</html>