@extends('templates.adminlte.tpl-home')

@section('title', 'RemoteHUB.id')

@section('content_header')
{{-- <h1>Heading Title</h1> --}}
@stop

@section('content')
<!-- Widget: user widget style 1 -->
<section>
  <div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-black" style="background: url('{{ asset('/img/photo1.png')}}') center center;">
      <h3 class="widget-user-username">Tonny Soerojo S.H.</h3>
      <h5 class="widget-user-desc">Founder / CEO at Legaltech Indonesia</h5>
      <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> DKI Jakarta</h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle" src="{{ asset('img/ths.jpeg')}}" alt="User Avatar">
    </div>
    <div class="box-footer">
      <div class="row">
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header"><img src="{{ asset('img/trusted.png')}}" height="25px" alt=""></h5>
            <span class="description-text">TRUSTED</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 border-right">
          <div class="description-block">
            <h5 class="description-header">Business Analyst</h5>
            <span class="description-text">Front End Developer</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="description-block">
            <h5 class="description-header">35</h5>
            <span class="description-text">Projects</span>
          </div>
          <!-- /.description-block -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
</section>
<!-- /.widget-user -->  
<div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          @include('user.partials.home.profile')
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#experience" data-toggle="tab">Experience</a></li>
              <li><a href="#networks" data-toggle="tab">My Networks</a></li>
              <li><a href="#myevents" data-toggle="tab">My Events</a></li>
              <li><a href="#mycourse" data-toggle="tab">My Course</a></li>
              <li><a href="#mymedia" data-toggle="tab">My Media</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="experience">
                @include('user.partials.profile.detail')
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="networks">
                <!-- Networks -->
                @include('user.partials.profile.networks')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="myevents">
                <!-- myevents -->
                myevents
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="mycourse">
                <!-- mycourse -->
                mycourse
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="mymedia">
                <!-- mymedia -->
                @include('user.partials.profile.media')
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-flat btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->





@stop
