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
            <a href="#person_add_only_icon_title" data-toggle="tab">
              <i class="material-icons">person_add</i> NETWORKS
            </a>
          </li>
          <li role="presentation">
            <a href="#queue_play_next_only_icon_title" data-toggle="tab"> 
              <i class="material-icons">queue_play_next</i> CHANNEL
            </a>
          </li>
          <li role="presentation">
            <a href="#business_only_icon_title" data-toggle="tab"> 
              <i class="material-icons">business</i> COMPANIES
            </a>
          </li>
          <li role="presentation">
            <a href="#hearing_only_icon_title" data-toggle="tab">
              <i class="material-icons">hearing</i> TRENDING TOPIC
            </a>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="person_add_only_icon_title">
            <b>Add your network...</b>
            <p>
             @include('pages.remotehub.detail.people')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="queue_play_next_only_icon_title">
            <b>Add your Channel</b>
            <p>
             <img src="{{ asset('img/undercon.png')}}" class="img-responsive" alt="">
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="business_only_icon_title">
            <b>Add your business network</b>
            <p>
              @include('pages.remotehub.detail.companies')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="hearing_only_icon_title">
            <b>Follow trending topic</b>
            <p>
              @include('pages.remotehub.detail.hashtag')
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>