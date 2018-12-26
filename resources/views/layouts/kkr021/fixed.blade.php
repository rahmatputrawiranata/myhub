
    @include('layouts.kkr021.head.default')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/images/loading.gif')}}" width="100" alt=""></div>
    </div>
    <!-- Start Navigation -->
    @include('layouts.kkr021.megamenu.fixed')
    <!-- End Navigation -->
    <!-- Banner -->
    @include('layouts.kkr021.banner.fixed')
    <!-- End Banner -->

    @yield('content')
    
    <!-- footer  -->
    @include('layouts.kkr021.footer.1')
    <!-- End footer -->
    <!-- scripts  -->
    @include('layouts.kkr021.scripts.default')
    <!-- end scripts -->
</body>
</html>