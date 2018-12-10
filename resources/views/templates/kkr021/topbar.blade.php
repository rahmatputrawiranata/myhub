<!DOCTYPE html>
<!-- 
    Template: Soerojo S.H. dan Rekan HTML Template Built With Twitter Bootstrap 3.3.7
    Version: 1.0.0
-->

<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    @include('templates.kkr021.head.default')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/images/loading.gif')}}" width="100" alt=""></div>
    </div>
    <!-- Start Navigation -->
    @include('templates.kkr021.megamenu.topbar')
    <!-- End Navigation -->
    <!-- Banner -->
    @include('templates.kkr021.banner.topbar')
    <!-- End Banner -->
    @yield('content')
    <!-- footer  -->
    @include('templates.kkr021.footer.1')
    <!-- End footer -->
    <!-- scripts  -->
    @include('templates.kkr021.scripts.default')
    <!-- end scripts -->
</body>
</html>