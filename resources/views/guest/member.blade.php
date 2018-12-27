@extends('layouts.kkr021.fixed')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section class="inner-intro  small-intro dark-bg bg bg-fixed overlay jarallax" data-jarallax='{"speed": 0.2}' data-overlay-color="dark" data-overlay="2" data-bg-img="{{ asset('templates/kkr021/img/banner.jpg')}}">
  <div class="container">
    <div class="row intro-title">
      <div class="col-sm-12 text-left">
        <h2 class="title text-white">Member <strong class="text-primary">HUB</strong></h2>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 text-left"><span class="sub-title">Connect.Collaborate.Create</span></div>
          <div class="col-sm-6 text-right">
            <ul class="page-breadcrumb">
              <li><a href="{{ url('/')}}">Home</a></li>
              <li><a href="javascript:void(0)">Elements</a></li>
              <li><span class="theme-text">Member <strong class="text-primary">HUB</strong></span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Clients slider -->
<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4>E.R.P <br><small class="text-primary">Content Creator | Writer | Virtual Assistant | Legal </small></h4>
        @include('guest.partials.member.sm-1')<br>
        <h4>Creative Team<br>
        <small class="text-primary">Graphic Design | Videographer | Photographer | 3D Artist </small></h4>
        @include('guest.partials.member.sm-2')<br>
        <h4>Digital Marketing<br>
        <small class="text-primary">Channel 1 | Channel 2 | Channel 3 | Channel 4 </small></h4>
        @include('guest.partials.member.sm-3')<br>
        <h4>Developers<br>
          <small class="text-primary">Channel 1 | Channel 2 | Channel 3 | Channel 4 </small></h4>
        @include('guest.partials.member.sm-4')<br>
        <h4>Device, Security & Networking<br>
          <small class="text-primary">Channel 1 | Channel 2 | Channel 3 | Channel 4 </small>
        </h4>
        @include('guest.partials.member.sm-5')
      </div>
    </div>
  </div>
</section>
<!-- End Clients slider -->
@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection