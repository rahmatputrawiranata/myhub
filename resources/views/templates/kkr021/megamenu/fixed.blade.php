<nav class="navbar navbar-default navbar-sticky bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span> 
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
        <!-- End Atribute Navigation -->
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
            <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('img/logo-5-dark.png')}}" class="logo logo-scrolled" alt=""> </a> 
        </div>
        <!-- End Header Navigation -->
        <!-- Megamenu -->
        @include('templates.kkr021.megamenu._myhub')
        <!-- /.navbar-collapse -->
    </div>
<!-- Start Side Menu -->
<div class="side light-bg">
    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
    <div class="widget">
        <p class="text-center text-white my-3"> <a href="{{ url('/') }}"><img src="{{ asset('templates/kkr021/images/logo-5-white.png')}}" class="logo" alt="" /><br><h3>Remote<b>Hub</b>  <small>.id</small></h3></a></p>
        <div class="login-logo">
            
        </div>
    </div>
    <div class="widget">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} icon-input">
                        <input  id="email" type="email"  class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} icon-input">
                        
                        <input  id="password" name="password"  type="password" class="form-control" placeholder="Password" required>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}id="check1" checked="">
                            <label for="ingat saya"><span class="text-gray">ingat saya</span></label>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-flat btn-sm btn-block btn-default fill-dark">
                            Login
                        </button>
                        
                        <a class="btn btn-flat btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                        <a class="btn btn-flat btn-link" href="{{ route('register') }}">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="widget">
        <div class="social-icons animated color">
            <ul class="clearfix">
                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Side Menu -->
    </nav>