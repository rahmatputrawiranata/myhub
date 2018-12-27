
@include('layouts.kkr021.head.default')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="clear-loading loading-effect"><img src="{{ asset('templates/kkr021/img/loading.gif')}}" width="100" alt=""></div>
    </div>
    <!-- Start Navigation -->
    @include('layouts.kkr021.megamenu.default')
    <!-- End Navigation -->
    <!-- Banner -->
    @include('layouts.kkr021.banner.default')
    <!-- End Banner -->
    
    @yield('content')
    
    
    <!-- scripts  -->
    @include('layouts.kkr021.scripts.default')
    <!-- End scripts -->
    
    <!-- footer  -->
    @include('layouts.kkr021.footer.3')
    <!-- End footer -->
    
</body>
</html>