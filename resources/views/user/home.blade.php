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
      @include('user.partials.home.profile')
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      @include('user.partials.home.activity')
    </div>
    <!-- /.col -->
    <div class="col-md-3">
      @include('user.partials.home.hubs')
    </div>
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop