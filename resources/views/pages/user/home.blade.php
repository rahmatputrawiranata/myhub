@extends('layouts.tpl-remotehub')

@section('title')
Profile
@endsection

@section('extra-css')
@include('layouts.remotehub.footer.extra-scripts.ui')

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


@endsection