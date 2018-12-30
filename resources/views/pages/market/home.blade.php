@extends('layouts.tpl-remotehub')

@section('title')
SOCIAL MARKETPLACE
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

            @include('pages.market.detail')
        </div>
    </div>
</div>

@endsection


@section('extra-script')

<script src="{{ asset('bower_components/admin-md/js/pages/examples/profile.js')}}"></script>




@endsection