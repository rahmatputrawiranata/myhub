<!-- Sidebar Menu -->
<ul class="sidebar-menu tree" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="">
    <a href="{{ url('home')}}">
      <i class="fa fa-fw fa-home "></i>
      <span>Home</span>
    </a>
  </li>

 <li class="">
    <a href="{{ url('networks')}}">
      <i class="fa fa-share-alt fa-lg"></i> REMOTE HUB
    </a>
  </li>
  <li class="">
    <a href="{{ url('jobs')}}">
      <i class="fa fa-briefcase fa-lg"></i> JOBS HUB
    </a>
  </li>
  <li class="">
    <a href="{{ url('events')}}">
      <i class="fa fa-calendar fa-lg"></i> EVENTS HUB
    </a>
  </li>
  <li class="">
    <a href="{{ url('market')}}">
      <i class="fa fa-exchange fa-lg"></i> MARKET HUB
    </a>
  {{-- @include('templates.adminlte.menu.core.ekejaksaan')
  
  <li class="header">BIDANG TEKNIS</li>
  
  @include('templates.adminlte.menu.core.bin')
  
  @include('templates.adminlte.menu.core.was') 
  
  @include('templates.adminlte.menu.core.intel')
  
  @include('templates.adminlte.menu.core.pidum')
  
  @include('templates.adminlte.menu.core.pidsus')
  
  @include('templates.adminlte.menu.core.datun') --}}
  
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i> <span>Examples</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    
    <ul class="treeview-menu">
      
      @include('templates.adminlte.menu.left.documentation')
      
      {{-- @include('templates.adminlte.menu.left.others') --}}
    </ul>
  </li>
  </ul>
  <!-- /.sidebar-menu -->
  