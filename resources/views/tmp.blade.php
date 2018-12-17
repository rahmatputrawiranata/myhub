@extends('templates.adminlte.tpl-home')

@section('title', 'RemoteHUB.id')

@section('content_header')
{{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<!-- Main content -->
<section class="content">
  
  <div class="row">
    <div class="col-md-3">
      
      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <a href="setting/profile"><img class="profile-user-img img-responsive img-circle" src="{{ asset('img/ths.jpeg')}}" alt="User profile picture"></a>
          
          <h3 class="profile-username text-center">Tonny Soerojo S.H.</h3>
          <p class="text-muted text-center">Founder / CEO at Legaltech Indonesia</p>
          
          <p class="text-muted text-center">Front End Developer</p>
          
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>
          
          <a href="#" class="btn btn-flat btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
          
          <p class="text-muted">
            B.S. in Computer Science from the University of Tennessee at Knoxville
          </p>
          
          <hr>
          
          <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
          
          <p class="text-muted">Malibu, California</p>
          
          <hr>
          
          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
          
          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>
          
          <hr>
          
          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="box">
        <div class="box-body">
          <div class="panel panel-default panel-create"> <!-- panel-create -->
            <div class="panel-heading">
              <div class="heading-text">
                What's going on?
              </div>
            </div>
            <div class="panel-body">        
              <textarea name="description" class="form-control createpost-form comment" cols="30" rows="3" id="createPost" placeholder="Write something.....#hashtags @mentions"></textarea>
              
              
              <div class="user-tags-added" style="display:none">
                &nbsp; -- with
                <div class="user-tag-names">
                  
                </div>
              </div>
              <div class="user-tags-addon post-addon" style="display: none">
                <span class="post-addon-icon"><i class="fa fa-user-plus"></i></span>
                <div class="form-group">
                  <input type="text" id="userTags" class="form-control user-tags youtube-text selectized" placeholder="Who are you with?" autocomplete="off" value="" tabindex="-1" style="display: none;"><div class="selectize-control form-control user-tags youtube-text multi plugin-remove_button"><div class="selectize-input items not-full"><input type="text" autocomplete="off" tabindex="" placeholder="Who are you with?" style="width: 112px;"></div><div class="selectize-dropdown multi form-control user-tags youtube-text plugin-remove_button" style="display: none; width: 100px; top: 0px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="users-results-wrapper"></div>
              <div class="youtube-iframe"></div>
              
              <div class="video-addon post-addon" style="display: none">
                <span class="post-addon-icon"><i class="fa fa-film"></i></span>
                <div class="form-group">
                  <input type="text" name="youtubeText" id="youtubeText" class="form-control youtube-text" placeholder="What are you watching?" value="">
                  <div class="clearfix"></div>
                </div>
              </div>
              
              <div class="location-addon post-addon" style="display: none">
                <span class="post-addon-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                <div class="form-group">
                  <input type="text" name="location" id="pac-input" class="form-control" placeholder="Where are you?" autocomplete="off" value="" onkeypress="return initMap(event)" style="position: relative; overflow: hidden;"><div class="clearfix"></div>
                </div>                 
              </div>
              <div class="emoticons-wrapper  post-addon" style="display:none">
                
              </div>
              <div class="images-selected post-images-selected" style="display:none">
                <span>3</span> photo(s) selected
              </div>
              <div class="images-selected post-video-selected" style="display:none">
                <span>3</span>
              </div>
              <!-- Hidden elements  -->
              <input type="hidden" name="timeline_id" value="1">
              <input type="hidden" name="youtube_title" value="">
              <input type="hidden" name="youtube_video_id" value="">
              <input type="hidden" name="locatio" value="">
              <input type="hidden" name="soundcloud_id" value="">
              <input type="hidden" name="user_tags" value="">
              <input type="hidden" name="soundcloud_title" value="">
              <input type="file" class="post-images-upload hidden" multiple="multiple" accept="image/jpeg,image/png,image/gif" name="post_images_upload[]" id="post_images_upload[]">
              <input type="file" class="post-video-upload hidden" accept="video/mp4" name="post_video_upload">
              <div id="post-image-holder"></div>
            </div><!-- panel-body -->
            
            <div class="panel-footer">
              <ul class="list-inline left-list">
                <li><a href="#" id="addUserTags"><i class="fa fa-user-plus"></i></a></li>
                <li><a href="#" id="imageUpload"><i class="fa fa-camera-retro"></i></a></li>
                
                <li><a href="#" id="videoUpload"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" id="locationUpload"><i class="fa fa-map-marker"></i></a></li>
                <li><a href="#" id="emoticons"><i class="fa fa-smile-o"></i></a></li>
                <div class="pull-right"><li><button type="submit" class="btn btn-submit btn-success btn-flat">post</button></li></div>
              </ul>
              
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
          <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
          <li><a href="#settings" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <!-- Post -->
            <div class="post">
              <div class="user-block">
                <img class="img-circle img-bordered-sm" src="{{ asset('img/user1-128x128.jpg')}}" alt="user image">
                <span class="username">
                  <a href="#">Jonathan Burke Jr.</a>
                  <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                </span>
                <span class="description">Shared publicly - 7:30 PM today</span>
              </div>
              <!-- /.user-block -->
              <p>
                Lorem ipsum represents a long-held tradition for designers,
                typographers and the like. Some people hate it and argue for
                its demise, but others ignore the hate as they create awesome
                tools to help create filler text for everyone from bacon lovers
                to Charlie Sheen fans.
              </p>
              <ul class="list-inline">
                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                </li>
                <li class="pull-right">
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                    (5)</a></li>
                  </ul>
                  
                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                
                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('img/user7-128x128.jpg')}}" alt="User Image">
                    <span class="username">
                      <a href="#">Sarah Ross</a>
                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                    </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  
                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-flat btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->
                
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{ asset('img/user6-128x128.jpg')}}" alt="User Image">
                    <span class="username">
                      <a href="#">Adam Jones</a>
                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                    </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="{{ asset('img/photo1.png')}}" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{ asset('img/photo2.png')}}" alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{ asset('img/photo3.jpg')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{ asset('img/photo4.jpg')}}" alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{ asset('img/photo1.png')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                      </ul>
                      
                      <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-blue"></i>
                        
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                          
                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                          
                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-flat btn-primary btn-xs">Read more</a>
                            <a class="btn btn-flat btn-danger btn-xs">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-aqua"></i>
                        
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                          
                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-yellow"></i>
                        
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                          
                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                          
                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a class="btn btn-flat btn-warning btn-flat btn-xs">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>
                        
                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                          
                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                          
                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                            <img src="http://placehold.it/150x100" alt="..." class="margin">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
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
          
        </section>
        <!-- /.content -->
        @stop