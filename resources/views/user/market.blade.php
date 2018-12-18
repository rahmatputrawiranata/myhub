@extends('templates.adminlte.tpl-home')

@section('title', 'MarketHUB')

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
          <h3 class="box-title">Explore our solutions for enterprise companies<br><small>Talk to a Talent Solutions sales specialist. We're here to help.
</small> </h3>
        </div>
        <div class="box-body">
          Market Hub
        </div>

      </div>
    </div>
    <!-- /.col -->
    
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop