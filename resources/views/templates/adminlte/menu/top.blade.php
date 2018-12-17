  <ul class="nav navbar-nav">
    
    <!-- Messages: style can be found in dropdown.less-->
    <!-- messages -->
    {{-- @include('templates.adminlte.menu.top.messages') --}}
    <!-- Notifications: style can be found in dropdown.less -->
    <!-- notif -->
    {{-- @include('templates.adminlte.menu.top.notif') --}}
    
    <!-- Tasks: style can be found in dropdown.less -->
    
    <!-- tasks -->
    {{-- @include('templates.adminlte.menu.top.tasks') --}}
    <!-- end task item -->
    
    
    <!-- User Account: style can be found in dropdown.less -->
    <!-- Authentication Links -->
    @if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
    @else
    <li class="dropdown user user-menu">
      <!-- Menu Toggle Button -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ asset('img/ths.jpeg')}}" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">
          {{-- {{ Auth::user()->name }}  --}}
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="{{ asset('img/ths.jpeg')}}" class="img-circle" alt="User Image">
            
            <p>
              {{ Auth::user()->name }} 
              <br> 
              <small>FOUNDER / CEO LEGAL TECHNOLOGY
                <br>INDONESIA</small>
              </li>
              @include('templates.adminlte.menu.top.myhub')
              <!-- Menu Body -->
              <li class="user-body">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                  <a href="administrator" class="btn btn-flat btn-default btn-flat">Administrator</a>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="pengguna" class="btn btn-flat btn-default btn-flat">Kelola Akun</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-flat btn-default btn-flat">
                  Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
            @endif
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>