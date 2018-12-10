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

    @include('templates.adminlte.menu.core.bin')

    @include('templates.adminlte.menu.core.intel')

    @include('templates.adminlte.menu.core.pidum')

    @include('templates.adminlte.menu.core.pidus')

    @include('templates.adminlte.menu.core.datun')

    @include('templates.adminlte.menu.core.was')  


    @include('templates.adminlte.menu.core.setting')

    @include('templates.adminlte.menu.core.others')
    
  </ul>
  <!-- /.sidebar-menu -->
</section>