  <header class="main-header">
    <!-- Logo -->
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
      </div>
    </form>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        @include('templates.adminlte.menu.top.mainnav')
        
      </div>
      <!-- /.navbar-collapse -->
      
      <div class="navbar-custom-menu">
        @include('templates.adminlte.menu.top')
      </div>
    </nav>
  </header>