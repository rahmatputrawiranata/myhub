<!DOCTYPE html>
<html>

<head>
    @include('layouts.tpl-dashboard.head')
</head>

<body class="theme-light-blue">
    @include('layouts.tpl-dashboard.loader')
    <div class="overlay"></div>
    @include('layouts.tpl-dashboard.header')
    @include('layouts.tpl-dashboard.sidebar')
    @include('layouts.tpl-dashboard.sidebar-r')
    
    <section class="content">
        @yield('content')
    </section>
    
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