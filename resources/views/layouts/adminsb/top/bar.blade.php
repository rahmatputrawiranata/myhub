<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="pull-left m-l-40"><a href="{{ url('home')}}"><img src="{{ asset('img/logo-5-white.png')}}" height="40" alt=""></a></div>
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            {{-- <a class="navbar-brand text-uppercase" href="{{ url('home')}}">@yield('title')</a> --}}
            @include('layouts.adminsb.top.menu.main')
        </div>
        
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <div class="pull-right m-t-10"><a href="{{ url('home')}}"><img src="{{ asset('img/logo-6-white.png')}}" height="40" alt=""></a></div>
                
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                
                <!-- Home -->
                <li><a href="{{ url('home')}}" ><i class="material-icons">home</i></a></li>
                <!-- #END# Home -->

                <!-- Notifications -->
                {{-- @include('layouts.adminsb.top.menu.notif') --}}
                <!-- #END# Notifications -->
                
                <!-- Tasks -->
                {{-- @include('layouts.adminsb.top.menu.task') --}}
                <!-- #END# Tasks -->
                
                <!-- Profile -->
                @include('layouts.adminsb.top.menu.profile')
                <!-- #END# Profile -->

                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">format_color_fill</i></a></li>
            </ul>
        </div>
    </div>
</nav>