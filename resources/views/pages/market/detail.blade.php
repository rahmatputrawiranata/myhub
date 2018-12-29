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
            <a href="#product_marketplace" data-toggle="tab">
              <i class="material-icons">devices_other</i> PRODUCTS
            </a>
          </li>
          <li role="presentation">
            <a href="#project_solution" data-toggle="tab"> 
              <i class="material-icons">devices_other</i> PROJECTS
            </a>
          </li>
          <li role="presentation">
            <a href="#content_solution" data-toggle="tab"> 
              <i class="material-icons">devices_other</i> CONTENT SOLUTION
            </a>
          </li>
          <li role="presentation">
            <a href="#training_solution" data-toggle="tab">
              <i class="material-icons">devices_other</i> TRAINING SOLUTION
            </a>
          </li>
          <li role="presentation">
            <a href="#marketing_solution" data-toggle="tab">
              <i class="material-icons">devices_other</i>  MARKETING SOLUTION
            </a>
          </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="product_marketplace">
           {{-- <p> <b>Add your network...</b></p> --}}
            <p>
             @include('pages.market.detail.product')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="project_solution">
            {{-- <b>Add your Channel</b> --}}
            <p>
             @include('pages.market.detail.projects')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="content_solution">
            {{-- <b>Add your business network</b> --}}
            <p>
              @include('pages.market.detail.content')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="training_solution">
            {{-- <b>Follow trending topic</b> --}}
            <p>
              @include('pages.market.detail.training')
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="marketing_solution">
            {{-- <b>Follow trending topic</b> --}}
            <p>
              @include('pages.market.detail.marketing')
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>