<div class="collapse navbar-collapse" id="navbar-collapse">
    <a href="{{ url('home')}}"><img src="{{ asset('img/logo-6-white.png')}}" class="push-right" height="55px" alt=""></a>
    <ul class="nav navbar-nav navbar-right">
        @guest
        
        @if (Route::has('register'))
        
        @endif
        @else
        <!-- Call Search -->
        {{-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> --}}
        <!-- #END# Call Search --
            <!-- Notifications -->
            {{-- @include('layouts.tpl-dashboard.menu.notif') --}}
            <!-- #END# Notifications -->
            <!-- Tasks -->
            {{-- @include('layouts.tpl-dashboard.menu.task') --}}
            
            <li class="push-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">format_color_fill</i></a>
            </li>
            @endguest
            <!-- #END# Tasks -->
        </ul>
    </div>