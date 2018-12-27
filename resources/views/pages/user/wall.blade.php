@extends('layouts.tpl-dashboard')

@section('title')
Home
@endsection

@section('extra-css')

<!-- Bootstrap Core Css -->
<link href="{{ asset('bower_components/admin-md/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="{{ asset('bower_components/admin-md/plugins/node-waves/waves.css')}}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{ asset('bower_components/admin-md/plugins/animate-css/animate.css')}}" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{ asset('bower_components/admin-md/css/style.css')}}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset('bower_components/admin-md/css/themes/all-themes.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12">
            <div class="card">
                <div class="body">
                    <div>
                        <div class="pull-right">
                            @yield('title')
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="panel panel-default panel-post">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="{{ asset('img/user-lg.jpg')}}" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">Marc K. Hammond</a>
                                                </h4>
                                                Shared publicly - 26 Oct 2018
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="post">
                                            <div class="post-heading">
                                                <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                            </div>
                                            <div class="post-content">
                                                <img src="{{ asset('img/profile-post-image.jpg')}}" class="img-responsive" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">thumb_up</i>
                                                    <span>12 Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">comment</i>
                                                    <span>5 Comments</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">share</i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Type a comment" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default panel-post">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img src="{{ asset('img/user-lg.jpg')}}" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">Marc K. Hammond</a>
                                                </h4>
                                                Shared publicly - 01 Oct 2018
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="post">
                                            <div class="post-heading">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                            <div class="post-content">
                                                <iframe width="100%" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">thumb_up</i>
                                                    <span>125 Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">comment</i>
                                                    <span>8 Comments</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="material-icons">share</i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Type a comment" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="Marc K. Hammond" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="example@example.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputExperience" class="col-sm-2 control-label">Experience</label>
                                        
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputSkills" class="col-sm-2 control-label">Skills</label>
                                        
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                            <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('extra-script')

<script src="{{ asset('bower_components/admin-md/js/pages/examples/profile.js')}}"></script>




@endsection