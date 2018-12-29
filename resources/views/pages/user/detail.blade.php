<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2 class="text-uppercase">
          @yield('title')
        </h2>
        <ul class="header-dropdown m-r--5">
          <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">more_vert</i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="{{ url('/home')}}" class=" waves-effect waves-block">Home</a></li>
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">REMOTEHUB</a></li>
              <li><a href="{{ url('events/home')}}" class=" waves-effect waves-block">EVENTS</a></li>
              <li><a href="{{ url('market/home')}}" class=" waves-effect waves-block">MARKETPLACE</a></li>
              <li><a href="{{ url('jobs/home')}}" class=" waves-effect waves-block">JOBS</a></li>
              <li><a href="{{ url('user/home')}}" class=" waves-effect waves-block">PROFILE</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
          <li role="presentation" class="active">
            <a href="#my_experience" data-toggle="tab">
              <i class="material-icons">devices_other</i> EXPERIENCE
            </a>
          </li>
          <li role="presentation">
            <a href="#mymedia" data-toggle="tab"> 
              <i class="material-icons">devices_other</i> MY MEDIA
            </a>
          </li>
          <li role="presentation">
            <a href="#my_network" data-toggle="tab"> 
              <i class="material-icons">devices_other</i> MY NETWORK
            </a>
          </li>
          <li role="presentation">
            <a href="#myevents" data-toggle="tab">
              <i class="material-icons">devices_other</i> MY EVENTS
            </a>
          </li>
          <li role="presentation">
            <a href="#my_course" data-toggle="tab">
              <i class="material-icons">devices_other</i> MY COURSE
            </a>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="my_experience">
           {{-- <p> <b>Add your network...</b></p> --}}
            <p>
             @include('pages.user.detail.experience')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="mymedia">
            {{-- <b>Add your Channel</b> --}}
            <p>
             @include('pages.user.detail.mymedia')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="my_network">
            {{-- <b>Add your business network</b> --}}
            <p>
              @include('pages.user.detail.mynetwork')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="myevents">
            {{-- <b>Follow trending topic</b> --}}
            <p>
              @include('pages.user.detail.myevents')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="my_course">
            {{-- <b>Follow trending topic</b> --}}
            <p>
              @include('pages.user.detail.mycourses')
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>