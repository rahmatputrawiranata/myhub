@extends('templates.adminlte.tpl-home')

@section('title', 'JobsHUB')

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
    <div class="col-md-9">
      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Jobs you may be interested in</h3>
        </div>
        <div class="box-body">
          @include('user.partials.jobs')
        </div>

      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop