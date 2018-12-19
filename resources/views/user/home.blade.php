@extends('templates.adminlte.tpl-home')

@section('title', 'RemoteHUB.id')

@section('content_header')
{{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<!-- Main content -->
<section class="content">
  
  <div class="row">
    <div class="col-md-9 col-sm-8">
      @include('user.home.activity')
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-4">     
      @include('user.home.profile')
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop