<ul class="nav navbar-nav">
  <li class="active"><a href="{{ url('home')}}" class="btn btn-flat">
    <i class="fa fa-home"></i> home  <span class="sr-only">(current)</span></a>
  </li>
  @include('templates.adminlte.menu.top.remotehub')
  @include('templates.adminlte.menu.top.jobshub')
  @include('templates.adminlte.menu.top.learninghub')
  @include('templates.adminlte.menu.top.markethub')
  
  
</ul>