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
  {{-- @include('layouts.adminlte.menu.core.ekejaksaan')
  
  <li class="header">BIDANG TEKNIS</li>
  
  @include('layouts.adminlte.menu.core.bin')
  
  @include('layouts.adminlte.menu.core.was') 
  
  @include('layouts.adminlte.menu.core.intel')
  
  @include('layouts.adminlte.menu.core.pidum')
  
  @include('layouts.adminlte.menu.core.pidsus')
  
  @include('layouts.adminlte.menu.core.datun') --}}
  
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-book"></i> <span>Examples</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    
    <ul class="treeview-menu">
      
      @include('layouts.adminlte.menu.left.documentation')
      
      {{-- @include('layouts.adminlte.menu.left.others') --}}
    </ul>
  </li>
  </ul>
  <!-- /.sidebar-menu -->
  