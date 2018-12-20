@extends('templates.kkr021.tpl-home')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section  class="full-height bg white-text header-slide single-image overlay" data-overlay-color="dark" data-overlay="8" data-bg-img="{{ asset('templates/kkr021/images/corporate/banner.jpg')}}" data-jarallax-video="https://www.youtube.com/watch?v=gDFdHnkohLg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title"> Remote <span class="text-primary"><i class="fa fa-coffee "></i></span> HUB</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#project" class="btn btn-flat btn-default btn-outline white-border white-text fill-white">Project <strong class="text-primary">HUB</strong></a>&nbsp;&nbsp; 
                <a href="#myhub" class="btn btn-flat btn-default animated theme-bg white-text">My <strong class="text-yellow">HUB</strong> <i class="fa fa-cubes" aria-hidden="true"></i></a> &nbsp;&nbsp; 
                <a href="member" class="btn btn-flat btn-default btn-outline white-border white-text fill-white" id="project">Member <strong class="text-primary">HUB</strong class="text-primary"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- CTA ProjectHUB -->
    @include('guest.partials.cta-project')
    <!-- End CTA ProjectHUB -->
    <!-- service -->
    @include('guest.partials.cta-myhub')
    <!-- End service -->
    
    <!-- CTE-Event Rawes & Kopdar -->
    {{-- @include('guest.partials.cta-events') --}}
    <!-- End Rawes & Kopdar -->
    
    <!-- CTA About Us -->
    @include('guest.partials.cta-mobile')
    <!-- CTA About Us -->
    <!-- Counter fancy -->
    {{-- @include('guest.partials.cta-counter') --}}
    <!-- End Counter fancy -->
    <!-- Text position left -->
    
    <!-- End Text position left -->
    <!-- CTA Blogs -->
    @include('guest.partials.cta-blog')
    <!-- End CTA Blogs -->
    
    <!-- Mobile Apps -->
    
    <!-- End Mobile Apps -->
    
    <!-- CTA Success Story -->
    @include('guest.partials.cta-success')
    <!-- End CTA Success Story -->
    
    @endsection()                 
    
    
    @section('scripts')
    {{-- expr --}}
    @endsection