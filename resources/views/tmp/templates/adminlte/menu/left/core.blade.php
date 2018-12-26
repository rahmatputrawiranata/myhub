<section class="sidebar" style="height: auto;">
  
  <!-- Sidebar Menu -->
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="">
      <a href="http://localhost/legaltech/public/welcome">
        <i class="fa fa-fw fa-home "></i>
        <span>RemoteHUB</span>
      </a>
    </li>
    <li class="header">e-KEJAKSAAN</li>
    <li class="active">
      <a href="http://localhost/legaltech/public/home">
        <i class="fa fa-fw fa-dashboard "></i>
        <span>DASHBOARD</span>
      </a>
    </li>

    @include('layouts.adminlte.menu.core.bin')

    @include('layouts.adminlte.menu.core.intel')

    @include('layouts.adminlte.menu.core.pidum')

    @include('layouts.adminlte.menu.core.pidus')

    @include('layouts.adminlte.menu.core.datun')

    @include('layouts.adminlte.menu.core.was')  


    @include('layouts.adminlte.menu.core.setting')

    @include('layouts.adminlte.menu.core.others')
    
  </ul>
  <!-- /.sidebar-menu -->
</section>