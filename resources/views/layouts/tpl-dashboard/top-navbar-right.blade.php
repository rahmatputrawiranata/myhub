<div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
         <img src="{{ asset('img/logo-6-white.png')}}" height="55px" alt="">
        <!-- Call Search -->
        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
        <!-- #END# Call Search -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <!-- Notifications -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                <i class="material-icons">notifications</i>
                <span class="label-count">7</span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">NOTIFICATIONS</li>
                <li class="body">
                    <ul class="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 14 mins ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-cyan">
                                    <i class="material-icons">add_shopping_cart</i>
                                </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 22 mins ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-red">
                                    <i class="material-icons">delete_forever</i>
                                </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 3 hours ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-orange">
                                    <i class="material-icons">mode_edit</i>
                                </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 2 hours ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue-grey">
                                    <i class="material-icons">comment</i>
                                </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 4 hours ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-light-green">
                                    <i class="material-icons">cached</i>
                                </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> 3 hours ago
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="icon-circle bg-purple">
                                    <i class="material-icons">settings</i>
                                </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p>
                                        <i class="material-icons">access_time</i> Yesterday
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer">
                    <a href="javascript:void(0);">View All Notifications</a>
                </li>
            </ul>
        </li>
        <!-- #END# Notifications -->
        <!-- Tasks -->
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                <i class="material-icons">exit_to_app</i>
                {{-- <span class="label-count">9</span> --}}
                
            </a>
            <ul class="dropdown-menu">
                <li class="header"> {{ Auth::user()->name }}</li>
                <li class="body">
                    <ul class="menu tasks">
                        <li>
                           <a> Menu 01</a>
                        </li>
                        <li>
                            <a>Menu 02</a>
                        </li>
                        <li>
                           <a>Menu 03</a>
                        </li>
                        <li>
                            <a>Menu 04</a>
                        </li>
                        <li>
                            <a>Menu 05</a>
                        </li>
                    </ul>
                </li>
                <li class="footer">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
    @endguest
    <!-- #END# Tasks -->
    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a>
    </li>
</ul>
</div>