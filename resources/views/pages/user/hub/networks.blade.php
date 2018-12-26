@extends('layouts.adminlte.tpl-home')

@section('title', 'NetworkHUB')

@section('content_header')
{{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
<!-- Main content -->
<section class="content">
  
  <div class="row">
    <div class="col-md-9 col-sm-8">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">RemoteHUB.id Members</h3>
        </div>
        <div class="box-body">
          <!-- Networks -->
          @include('user.networks.detail')
        </div>
        
      </div>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-4">     
      @include('user.profile.detail')
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop