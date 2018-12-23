<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Remote Hub Indonesia | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  @include('templates.adminlte.layouts.head')
  
  @yield('stylesheets')
  
</head>
<body class="skin-black-light sidebar-collapse fixed layout-boxed ">
  <div class="wrapper">
    
    <!-- Header -->
    @include('templates.adminlte.layouts.header')
    
    <!-- Left side column. contains the logo and sidebar -->
    @include('templates.adminlte.layouts.sidebar')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('templates.adminlte.layouts.content-header')
      
      
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('templates.adminlte.layouts.footer')
    
    
    <!-- Control Sidebar -->
    @include('templates.adminlte.layouts.sidebar-right')
    
  </div>
  <!-- ./wrapper -->
  <!-- scripts -->
  @include('templates.adminlte.layouts.scripts')
  
  @yield('scripts')
</body>
</html>
