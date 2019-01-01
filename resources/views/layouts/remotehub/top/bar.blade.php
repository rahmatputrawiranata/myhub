<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand pull-left " href="{{ url('/home')}}"><img src="{{ asset('img/logo-5-dark.png')}}" height="45px" class="m-l-25 m-t--15" alt=""></a>
            </div>
        
     
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right m-r-10">
                <li class="pull-right"><a href=" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>   </a></li>
                
                
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">format_color_fill</i></a></li>
                
                
                
                <!-- Home -->
                {{-- <li class="pull-right"><a href="{{ url('home')}}" ><i class="material-icons">home</i></a></li> --}}
                <!-- #END# Home -->
            
                
                <!-- Notifications -->
                {{-- @include('layouts.remotehub.top.menu.notif') --}}
                <!-- #END# Notifications -->
                
                <!-- Tasks -->
                {{-- @include('layouts.remotehub.top.menu.task') --}}
                <!-- #END# Tasks -->
                
                <!-- Profile -->
                {{-- @include('layouts.remotehub.top.menu.profile') --}}
                <!-- #END# Profile -->
                
                <div class="pull-right m-t-10"><a href="{{ url('home')}}"><img src="{{ asset('img/logo-6-dark.png')}}" class="m-b--30" height="30" alt=""></a></div>
            </ul>
            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
        </div>
    </div>
</nav>