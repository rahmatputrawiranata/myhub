<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="m-t--15"><a href="{{ url('home')}}" class="m-l-40 " ><img src="{{ asset('img/logo-6-mini.png')}}"height="40" alt=""></a></div>
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            {{-- <a class="navbar-brand text-uppercase" href="{{ url('home')}}">@yield('title')</a> --}}
            {{-- @include('layouts.remotehub.top.menu.main') --}}
        </div>
        
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right m-t--15">
                <li class="pull-right"><a href=" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>   </a></li>
                
                
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li class="pull-right m-b-20"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons md-36">format_color_fill</i></a></li>
                
                
                
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
                
                {{-- <div class="pull-right m-t-10"><a href="{{ url('home')}}"><img src="{{ asset('img/logo-6-white.png')}}" height="40" alt=""></a></div> --}}
            </ul>
            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
        </div>
    </div>
</nav>