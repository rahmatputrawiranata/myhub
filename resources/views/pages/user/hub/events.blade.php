@extends('layouts.tpl-adminsb')

@section('title', 'LearningHUB')

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
          <h3 class="box-title">Keep learning in moments that matter<br><small>Courses for every step of your career. Instructors with real-world experience.</small></h3>
        </div>
        <div class="box-body">
          @include('pages.events.detail')
        </div>
        
      </div>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-4">     
      @include('pages.profile.detail')
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  
</section>
<!-- /.content -->
@stop