<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.remotehub.top.head')
  @yield('extra-css')
</head>
<body  class="theme-white">
  @include('pages.user.floating-button')
  <!-- Page Loader -->
  @include('layouts.remotehub.top.page-loader')
  <!-- #END# Page Loader -->  
  
  <!-- Overlay For Sidebars -->
  <div class="overlay">
  </div>
  <!-- #END# Overlay For Sidebars -->
  
  <!-- Search Bar -->
  <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div>
  <!-- #END# Search Bar -->
  
  <!-- Top Bar -->
  @include('layouts.remotehub.top.bar-extended')
  <!-- #Top Bar -->
  
  <section>
    
    <!-- Left Sidebar -->
    @include('layouts.remotehub.sidebar.left')
    <!-- #END# Left Sidebar -->
    
    <!-- Right Sidebar -->
    @include('layouts.remotehub.sidebar.right')
    <!-- #END# Right Sidebar -->
    
  </section>
  
  <section class="content">
    <div class="container-fluid">
      <div class="block-header">
        @yield('content')
        
      </div>
      
      @include('layouts.remotehub.footer.default')
      <!--  Scripts-->
      @include('layouts.remotehub.footer.scripts')
      @yield('extra-scripts')
    </div>
    
  </section>
  
  
  
</body>
</html>
