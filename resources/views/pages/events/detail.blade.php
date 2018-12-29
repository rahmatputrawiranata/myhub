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
            <a href="#weecly_sharing_only_icon_title" data-toggle="tab">
              <i class="material-icons">date_range</i> WEEKLY SHARING
            </a>
          </li>
          <li role="presentation">
            <a href="#monthly_meetup_only_icon_title" data-toggle="tab"> 
              <i class="material-icons">date_range</i> MONTHLY MEETUP
            </a>
          </li>
          <li role="presentation">
            <a href="#webinar_icon_title" data-toggle="tab"> 
              <i class="material-icons">date_range</i> WEBINAR
            </a>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="weecly_sharing_only_icon_title">
            <p><b>Upcoming Sharing...</b></p>
            @include('pages.events.detail.rawes')
          </div>
          <div role="tabpanel" class="tab-pane fade" id="monthly_meetup_only_icon_title">
            <p><b>Upcoming Meetup...</b></p>
            <p>
             @include('pages.events.detail.kopdar')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="webinar_icon_title">
            <p><b>Upcoming Webinar...</b></p>
            <p>
             @include('pages.events.detail.webinar')
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>