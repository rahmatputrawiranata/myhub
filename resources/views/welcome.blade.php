@extends('templates.kkr021.fullutube')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section class="full-height bg white-text header-slide single-image overlay" data-overlay-color="dark" data-overlay="8" data-bg-img="{{ asset('templates/kkr021/images/corporate/banner.jpg')}}" data-jarallax-video="https://www.youtube.com/watch?v=gDFdHnkohLg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="title">Remote <span class="fa fa-home"></span> MyHub.id </h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Pekerjaan</a>&nbsp;&nbsp; <a href="#" class="btn btn-default animated btn-radius theme-bg white-text">Anggota <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a> 
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->


@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection