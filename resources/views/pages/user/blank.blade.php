@extends('layouts.tpl-parallax')

@section('title')
Kami Kerja Remote
@endsection

@section('extra-css')
@include('layouts.remotehub.top.extra-css.forms')
<link rel="stylesheet" href="{{ asset('bower_components/materialize/dist/css/materialize.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12">
           <div class="card">
             <div class="body">
                @include('pages.user.wall')
             </div>
           </div>
        </div>
    </div>
</div>
>
@endsection


@section('extra-script')

@include('layouts.remotehub.footer.extra-scripts.forms')

<script src="{{ asset('bower_components/materialize/dist/js/materialize.js')}}"></script>
<script>
    
    
</script>
@endsection