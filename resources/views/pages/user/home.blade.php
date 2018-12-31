@extends('layouts.tpl-remotehub')

@section('title')
Profile
@endsection

@section('extra-css')
@include('layouts.remotehub.footer.extra-scripts.ui')
<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{ asset('bower_components/admin-md/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

<!-- Bootstrap DatePicker Css -->
<link href="{{ asset('bower_components/admin-md/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />

<!-- Wait Me Css -->
<link href="{{ asset('bower_components/admin-md/plugins/waitme/waitMe.css')}}" rel="stylesheet" />

<!-- Bootstrap Select Css -->
<link href="{{ asset('bower_components/admin-md/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

<!-- Custom Css -->
<link href="{{ asset('bower_components/admin-md/css/style.css')}}" rel="stylesheet">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ asset('bower_components/admin-md/css/themes/all-themes.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12">
            {{-- <h1>@yield('title')</h1> --}}
            {{-- <img src="{{ asset('img/undercon.png')}}" class="img-responsive" alt=""> --}}
            @include('pages.user.detail')
        </div>
    </div>
</div>

@endsection


@section('extra-script')
 <!-- Jquery Core Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>')}}

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/jquery-slimscroll/jquery.slimscroll')}}js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/node-waves/waves.js')}}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('bower_components/admin-md/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    \<!-- Custom Js -->
    <script src="{{ asset('bower_components/admin-md/js/admin.js')}}"></script>
    <script src="{{ asset('bower_components/admin-md/js/pages/forms/basic-form-elements.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('bower_components/admin-md/js/demo.js')}}"></script>

@endsection