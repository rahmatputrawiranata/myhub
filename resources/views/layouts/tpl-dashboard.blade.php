<!DOCTYPE html>
<html>

<head>
    @include('layouts.tpl-dashboard.head')
</head>

<body class="theme-light-blue">
    @include('layouts.tpl-dashboard.loader')
    <div class="overlay"></div>
    @include('layouts.tpl-dashboard.header')
    <section>
        <!-- Left Sidebar -->
        @include('layouts.tpl-dashboard.sidebar')
    </section>
    <section class="content">
        @yield('content')
    </section>
    @include('layouts.tpl-dashboard.sidebar-r')
    
    @section('script')
    
    
    
    @show    
    
    @include('layouts.tpl-dashboard.scripts')
    
    @yield('extra-script')
    
    
    @section('script-bottom')
    
    <!-- Custom Js -->
    <script src="{{ asset('bower_components/admin-md/js/admin.js')}}"></script>
    
    <!-- Demo Js -->
    <script src="{{ asset('bower_components/admin-md/js/demo.js')}}"></script>
    @show
</body>

</html>