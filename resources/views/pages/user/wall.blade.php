@extends('layouts.tpl-remotehub')

@section('title')
Kami Kerja Remote
@endsection

@section('extra-css')
<link rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12">
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
    </div>
</div>
<div class="fixed-action-btn direction-left">
    <a class="btn-floating btn-large orange">
        <i class="material-icons">add</i>
    </a>
    <ul>
        <li>
            <a href="{{ url('jobs/home')}}" class="btn-floating btn light-blue">
                <i class="material-icons">airline_seat_recline_extra</i>
            </a>
        </li>
        <li>
            <a href="{{ url('market/home')}}" class="btn-floating btn light-blue">
                <i class="material-icons">touch_app</i>
            </a>
        </li>
        <li>
            <a href="{{ url('events/home')}}" class="btn-floating btn light-blue">
                <i class="material-icons">important_devices</i>
            </a>
        </li>
        <li>
            <a href="{{ url('remotehub/home')}}" class="btn-floating btn light-blue">
                <i class="material-icons">beach_access</i>
            </a>
        </li>
        <li>
            <a class="btn-floating btn-large blue">
                <i class="material-icons">border_color</i>
            </a>
        </li>
    </ul>
</div>
@endsection


@section('extra-script')


<script>
    
    
</script>
@endsection