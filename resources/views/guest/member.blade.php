@extends('templates.kkr021.fixed')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section class="inner-intro  small-intro dark-bg bg bg-fixed overlay jarallax" data-jarallax='{"speed": 0.2}' data-overlay-color="dark" data-overlay="2" data-bg-img="{{ asset('templates/kkr021/images/banner.jpg')}}">
  <div class="container">
    <div class="row intro-title">
      <div class="col-sm-12 text-left">
        <h1 class="title text-white">Family <strong class="text-primary">Hub</strong></h1>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 text-left"><span class="sub-title">Connect.Collaborate.Create</span></div>
          <div class="col-sm-6 text-right">
            <ul class="page-breadcrumb">
              <li><a href="{{ url('/')}}">Home</a></li>
              <li><a href="javascript:void(0)">Elements</a></li>
              <li><span class="theme-text">Family <strong class="text-primary">Hub</strong></span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner -->
<!-- Team style1  -->
@include('guest.partials.teamtyle1')
<!-- End Team style1  -->
<!-- Team style2  -->
@include('guest.partials.teamtyle2')
<!-- End Team style2  -->
<!-- Team style3  -->
@include('guest.partials.teamtyle3')

<!-- End Team style3  -->


@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection