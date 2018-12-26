@extends('layouts.adminlte.tpl-home')

@section('title', 'RemoteHUB.id')

@section('content_header')
<h1>Heading Title</h1>
@stop

@section('content')



<!-- Main content -->
<section class="content">
  
  <div class="error-page">
    <h2 class="headline text-red">500</h2>
    
    <div class="error-content">
      <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>
      
      <p>
        We will work on fixing that right away.
        Meanwhile, you may <a href="{{ url('/')}}">return to dashboard</a> or try using the search form.
      </p>
      
      <form class="search-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search">
          
          <div class="input-group-btn">
            <button type="submit" name="submit" class="btn btn-flat btn-danger btn-flat"><i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <!-- /.input-group -->
      </form>
    </div>
  </div>
  <!-- /.error-page -->
  
</section>
<!-- /.content -->
@stop