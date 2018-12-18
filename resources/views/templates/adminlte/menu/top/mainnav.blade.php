
<ul class="nav navbar-nav">
  <li class="active"><a href="{{ url('home')}}" class="btn btn-flat">
    <i class="fa fa-home"></i> home  <span class="sr-only">(current)</span></a>
  </li>
  <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle btn btn-flat" data-toggle="dropdown">
      <i class="fa fa-share-alt fa-lg"></i> 
    </a>
    <ul class="dropdown-menu">
      <li class="header"><a href="{{ url('networks')}}">REMOTE HUB</a></li>
    </ul>
  </li>
  <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle btn btn-flat" data-toggle="dropdown">
      <i class="fa fa-briefcase fa-lg"></i> 
    </a>
    <ul class="dropdown-menu">
      <li class="header"><a href="{{ url('jobs')}}">JOBS HUB</a></li>
    </ul>
  </li>
  <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle btn btn-flat" data-toggle="dropdown">
      <i class="fa fa-graduation-cap fa-lg"></i> 
    </a>
    <ul class="dropdown-menu">
      <li class="header"><a href="{{ url('learning')}}">LEARNING HUB</a></li>
    </ul>
  </li>
  <li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle btn btn-flat" data-toggle="dropdown">
      <i class="fa fa-exchange fa-lg"></i> 
    </a>
    <ul class="dropdown-menu">
      <li class="header"><a href="{{ url('market')}}">MARKET HUB</a></li>
    </ul>
  </li>
</ul>
  {{-- @include('templates.adminlte.menu.top.remotehub') --}}
  {{-- @include('templates.adminlte.menu.top.jobshub') --}}
  {{-- @include('templates.adminlte.menu.top.learninghub') --}}
  {{-- @include('templates.adminlte.menu.top.markethub') --}}
  
  
</ul>
