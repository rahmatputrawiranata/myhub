@extends('templates.kkr021.fixed')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section class="inner-intro  small-intro dark-bg bg bg-fixed overlay jarallax" data-jarallax='{"speed": 0.2}' data-overlay-color="dark" data-overlay="2" data-bg-img="{{ asset('templates/kkr021/images/banner.jpg')}}" >
  <div class="container">
    <div class="row intro-title">
      <div class="col-sm-12 text-left">
        <h1 class="title text-white">Project Hub</h1>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-6 text-left"><span class="sub-title">Member Project / Apps</span></div>
          <div class="col-sm-6 text-right">
            <ul class="page-breadcrumb">
              <li><a href="{{ url('/')}}">Home</a></li>
              <li><a href="javascript:void(0)">Elements</a></li>
              <li><span class="theme-text">Clients</span> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner -->
<!-- Apps Category -->
<section class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4>Apps Category</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="owl-carousel clients-carousel" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-space="25">
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo4.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo5.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo4.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo5.png')}}" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Apps Category -->
<!-- Outline -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4>Apps Category with Outline</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="owl-carousel clients-carousel line" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2"  data-space="25">
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo4.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo5.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo4.png')}}" alt="" /></div>
          <div class="item"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo5.png')}}" alt="" /></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Outline -->
<!-- Clients Grid -->
<section class="section-pt pb-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h4>Apps Category Grid</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="clients line">
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt=""></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="clients line">
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo1.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo2.png')}}" alt=""></div>
          </div>
          <div class="col-sm-4 col-xs-6 col-xx-12">
            <div class="media"><img class="img-responsive" src="{{ asset('templates/kkr021/images/clients/logo3.png')}}" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Clients Grid -->

@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection