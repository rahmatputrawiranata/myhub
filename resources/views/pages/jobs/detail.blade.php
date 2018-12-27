<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
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
            <a href="#talent_solution" data-toggle="tab">
              <i class="material-icons">important_devices</i> TALENT
            </a>
          </li>
          <li role="presentation">
            <a href="#career_solution" data-toggle="tab"> 
              <i class="material-icons">important_devices</i> CAREER
            </a>
          </li>
          <li role="presentation">
            <a href="#skill_sharing_icon_title" data-toggle="tab"> 
              <i class="material-icons">important_devices</i> SKILL SHARING
            </a>
          </li>
          <li role="presentation">
            <a href="#setting_only_icon_title" data-toggle="tab">
              <i class="material-icons">important_devices</i> SETTING
            </a>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="talent_solution">
            {{-- <p> <b>Add your network...</b></p> --}}
            <p>
              @include('pages.jobs.detail.talent')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="career_solution">
            {{-- <b>Add your Channel</b> --}}
            <p>
              @include('pages.jobs.detail.job')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="skill_sharing_icon_title">
            {{-- <b>Add your business network</b> --}}
            <p>
              @include('pages.jobs.detail.skill-sharing')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="setting_only_icon_title">
            {{-- <b>Follow trending topic</b> --}}
            <p>
              @include('pages.jobs.detail.setting')
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>