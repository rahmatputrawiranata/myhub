<!DOCTYPE html>
<html>

<head>
    @include('layouts.adminsb.top.head')
    @yield('extra-css')
</head>

<body class="theme-light-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->


    <!-- Overlay For Sidebars -->
    <div class="overlay">
    </div>
    <!-- #END# Overlay For Sidebars -->
    
    
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    @include('layouts.adminsb.top.bar')
    <!-- #Top Bar -->


    <section>

        <!-- Left Sidebar -->
        @include('layouts.adminsb.sidebar.left')
        <!-- #END# Left Sidebar -->


        <!-- Right Sidebar -->
        @include('layouts.adminsb.sidebar.right')
        <!-- #END# Right Sidebar -->

    </section>
    
    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                @yield('content')
            </div>
        </div>
        <!-- Footer -->
    @include('layouts.adminsb.footer.default')
    <!-- #Footer -->

    </section>

<section>
</section>
    <!-- Jquery Core Js -->
    @include('layouts.adminsb.footer.scripts')
    
    @yield('extra-script')
    
</body>

</html>
