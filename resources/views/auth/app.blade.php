<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | RemoteHUB Indonesia</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    @section('css')
        
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/morrisjs/morris.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/css/themes/all-themes.css') }}">
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @show
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            
            <a href="{{ url('/')}}"><span><img src="{{ asset('img/logo-5-dark.png')}}" height="55px" alt=""><br><img src="{{ asset('img/logo-6-white.png')}}" height="55px" alt=""></span></a>
            <small>C o n n e c t . C o l l a b o r a t e . C r e a t e</small>
        </div>
        <div class="card">
            <div class="body">
                @yield('content')
            </div>
        </div>
    </div>

    @section('script')
       
    <!-- Jquery Core Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap/js/bootstrap.js')}}"></script>
    
    <!-- Select Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/node-waves/waves.js')}}"></script>

    {{-- <script src="{{ asset('bower_components/materialize/dist/js/materialize.js')}}"></script> --}}
    
    @show    
    
    
    @yield('extra-script')
    
    
    @section('script-bottom')
    
    <!-- Custom Js -->
    <script src="{{ asset('bower_components/admin-md/js/admin.js')}}"></script>
    
    <!-- Demo Js -->
    <script src="{{ asset('bower_components/admin-md/js/demo.js')}}"></script>
    @show

</body>

</html>