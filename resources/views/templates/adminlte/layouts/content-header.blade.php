<section class="content-header">
      <div class="media">
          <div class="media-left media-middle">
            <a href="{{ url('home')}}">
                <img class="media-object" src="{{asset('img/logo-dark.png')}}" height="40px" alt="logo"  height="100"">
              </a>
          </div>
          <div class="media-body">
            <h2 class="media-heading">@yield('judulhalaman')</h2>
            <h4>@yield('subjudul') </h4>
          </div>
        </div>


        <!-- You can dynamically generate breadcrumbs here -->
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
    </section>