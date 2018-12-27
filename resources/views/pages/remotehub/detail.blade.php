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
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">View All</a></li>
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">Add Network</a></li>
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">Add Channel</a></li>
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">Search Business</a></li>
              <li><a href="{{ url('remotehub/home')}}" class=" waves-effect waves-block">Trending Cause</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
          <li role="presentation" class="active">
            <a href="#person_add_only_icon_title" data-toggle="tab">
              <i class="material-icons">person_add</i>
            </a>
          </li>
          <li role="presentation">
            <a href="#queue_play_next_only_icon_title" data-toggle="tab">
              <i class="material-icons">queue_play_next</i>
            </a>
          </li>
          <li role="presentation">
            <a href="#business_only_icon_title" data-toggle="tab">
              <i class="material-icons">business</i>
            </a>
          </li>
          <li role="presentation">
            <a href="#hearing_only_icon_title" data-toggle="tab">
              <i class="material-icons">hearing</i>
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
              Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
              Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
              pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
              sadipscing mel.
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="business_only_icon_title">
            <b>Add your business network</b>
            <p>
              Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
              Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
              pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
              sadipscing mel.
            </p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="hearing_only_icon_title">
            <b>Follow trending topic</b>
            <p>
              Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
              Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
              pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
              sadipscing mel.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>