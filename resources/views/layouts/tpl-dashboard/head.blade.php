<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title') | RemoteHUB</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Bootstrap Core Css -->
    @section('css')
    
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/node-waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/plugins/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/admin-md/css/themes/all-themes.css') }}">
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    @show
    @yield('extra-css')