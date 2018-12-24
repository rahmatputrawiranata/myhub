<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.reveal.head')

  @yield('stylesheets')
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  @include('layouts.reveal.head')

  <!--==========================
    Header
  ============================-->
  @include('layouts.reveal.header')

  <!--==========================
    Intro Section
  ============================-->


  <main id="main">

   @yield('content')

  </main>

  <!--==========================
    Footer
  ============================-->
   @include('layouts.reveal.header')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
   @include('layouts.reveal.scripts')

   @yield('scripts')

</body>
</html>
