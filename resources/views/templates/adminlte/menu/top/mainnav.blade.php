
<ul class="nav navbar-nav">
  <li class="active"><a href="{{ url('home')}}" class="btn btn-flat btn-xs">
    <i class="fa fa-home"></i> HOME  <span class="sr-only">(current)</span></a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('networks')}}" class="btn btn-flat btn-xs">
      <i class="fa fa-share-alt"></i> <small>NETWORKS</small>
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('jobs')}}" class="btn btn-flat btn-xs">
      <i class="fa fa-briefcase"></i> <small>JOBS</small>
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('learning')}}" class="btn btn-flat btn-xs">
      <i class="fa fa-graduation-cap"></i> <small>LEARNING</small>
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('market')}}" class="btn btn-flat btn-xs">
      <i class="fa fa-exchange"></i> <small>MARKET</small>
    </a>
</ul>
  {{-- @include('templates.adminlte.menu.top.remotehub') --}}
  {{-- @include('templates.adminlte.menu.top.jobshub') --}}
  {{-- @include('templates.adminlte.menu.top.learninghub') --}}
  {{-- @include('templates.adminlte.menu.top.markethub') --}}
  
  
</ul>
