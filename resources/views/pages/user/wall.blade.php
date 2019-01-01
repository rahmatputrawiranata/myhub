@extends('layouts.tpl-remotehub')

@section('title')
Kami Kerja Remote
@endsection

@section('extra-css')
@include('layouts.remotehub.top.extra-css.forms')


{{-- <link rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.css')}}"> --}}
@endsection

@section('content')

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2 class="text-uppercase">
                        @yield('title')
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">more_vert</i></a>
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
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#my_post" aria-controls="settings" role="tab" data-toggle="tab">My Post</a></li>
                            <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile Settings</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                @include('pages.user.wall.home')
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="my_post">
                                @include('pages.user.wall.my_post')
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                @include('pages.user.wall.profile')
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
        
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-6">
                <div class="card">
                    <div class="body">
                        <a href="{{ url('user/home')}}" class="pull-right"><i class="material-icons">create</i></a>
                        <h2>
                            John Doe <small>Founder / CEO</small>
                        </h2>
                        
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Who's viewed your profile <span class="label pull-right label-primary">14</span></li>
                        <li class="list-group-item">Network HUB <span class="label pull-right label-primary">1.299</span></li>
                        <li class="list-group-item"><a href="{{ asset('remotehub/home')}}">View all recommendations</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="media-left">
                            <a href="javascript:void(0);">
                                <img class="media-object" src="{{ asset('img/icon/intersolusi.jpg')}}" width="64" height="64">
                            </a>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading">Organization</h6> Cras sit amet nibh libero, in gravida nulla. 
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Page notifications <span class="label pull-right label-primary">14</span></li>
                        <li class="list-group-item">Recent visitors <span class="label pull-right label-primary">99</span></li>
                        <li class="list-group-item"><a href="{{ asset('#')}}">Share an Update</a></li>
                    </ul>
                </div>
            </div>

            <div  class="col-sm-12 col-xs-6">
                <div class="card">
                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingOne_19">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                        <i class="material-icons">important_devices</i> Upcoming Events
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                <ul class="list-group">
                                        <li class="list-group-item">RAWES <span class="label pull-right bg-orange">Tommorow</span></li>
                                        <li class="list-group-item">MEETUP <span class="label pull-right label-primary">11-Jan</span></li>
                                        <li class="list-group-item">WEBINAR <span class="label pull-right label-primary">11-Jan</span></li>
                                        <li class="list-group-item"><a href="{{ asset('events/home')}}">Discover Events</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingTwo_19">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                        <i class="material-icons">hearing</i> Trending Topics
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
                                <ul class="list-group">
                                        <li class="list-group-item">#Topic 1 <span class="label pull-right label-primary">14</span></li>
                                        <li class="list-group-item">#Topic 2 <span class="label pull-right label-primary">1.299</span></li>
                                        <li class="list-group-item"><a href="{{ asset('#')}}">View all recommendations</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingThree_19">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
                                        <i class="material-icons">beach_access</i> Channel HUB
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                                <ul class="list-group">
                                        <li class="list-group-item">Bussiness Assistant <span class="label pull-right label-primary">14</span></li>
                                        <li class="list-group-item">Creative Hub <span class="label pull-right label-primary">7</span></li>
                                        <li class="list-group-item">Developer Hub <span class="label pull-right label-primary">17</span></li>
                                        <li class="list-group-item"><a href="{{ asset('remotehub/home')}}">Discover More</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingFour_19">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19">
                                        <i class="material-icons">airline_seat_recline_extra</i> Carreer & Projects
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
                                <ul class="list-group">
                                        <li class="list-group-item">Jobs <span class="label pull-right label-primary">3</span></li>
                                        <li class="list-group-item">Skill Sharing <span class="label pull-right label-primary">16</span></li>
                                        <li class="list-group-item">Projects <span class="label pull-right label-primary">9</span></li>
                                        <li class="list-group-item"><a href="{{ asset('jobs/home')}}">View all Opportunity</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row clearfix">
        <div class="col-xs-12">
            
        </div>
    </div>
</div>

@endsection


@section('extra-script')

@include('layouts.remotehub.footer.extra-scripts.forms')

<script>
    
    
</script>
@endsection