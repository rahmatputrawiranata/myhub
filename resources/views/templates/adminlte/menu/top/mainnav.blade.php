
<ul class="nav navbar-nav">
  <li class="active"><a href="{{ url('home')}}" class="btn btn-flat">
    <i class="fa fa-home"></i> home  <span class="sr-only">(current)</span></a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('networks')}}" class="btn btn-flat">
      <i class="fa fa-share-alt fa-lg"></i> REMOTE HUB
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('jobs')}}" btn btn-flat">
      <i class="fa fa-briefcase fa-lg"></i> JOBS HUB
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('learning')}}" btn btn-flat">
      <i class="fa fa-graduation-cap fa-lg"></i> LEARNING HUB
    </a>
  </li>
  <li class="dropdown messages-menu">
    <a href="{{ url('market')}}" btn btn-flat">
      <i class="fa fa-exchange fa-lg"></i> MARKET HUB
    </a>
</ul>
  {{-- @include('templates.adminlte.menu.top.remotehub') --}}
  {{-- @include('templates.adminlte.menu.top.jobshub') --}}
  {{-- @include('templates.adminlte.menu.top.learninghub') --}}
  {{-- @include('templates.adminlte.menu.top.markethub') --}}
  
  
</ul>
