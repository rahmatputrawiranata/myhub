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
<section class="team-style">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-block text-center">
          <h4 class="text-uppercase text-theme">Creative Member</h4>
          <div class="divider"></div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme light-arrow" data-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="10">
          <div class="item">
            <div class="team">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member1.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Nick Brew</h3>
                <h5 class="member-position">CEO/Founder</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member2.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Jenny Doe</h3>
                <h5 class="member-position">Sales Assistance</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member3.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Crow Alex</h3>
                <h5 class="member-position">Art Director</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member4.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Ronnie Rice</h3>
                <h5 class="member-position">Developer</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Team style1  -->
<!-- Team style2  -->
<section class="section-pt team-style">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-block text-center">
          <h4 class="text-uppercase text-theme">E.R.P. Member</h4>
          <div class="divider"></div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme light-arrow" data-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="10">
          <div class="item">
            <div class="team team-2">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member1.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Nick Brew</h3>
                <h5 class="member-position">CEO/Founder</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-2">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member2.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Jenny Doe</h3>
                <h5 class="member-position">Sales Assistance</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-2">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member3.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Crow Alex</h3>
                <h5 class="member-position">Art Director</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-2">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member4.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Ronnie Rice</h3>
                <h5 class="member-position">Developer</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Team style2  -->
<!-- Team style3  -->
<section class="section-pt team-style">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-block text-center">
          <h4 class="text-uppercase text-theme">Developer Member</h4>
          <div class="divider"></div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme light-arrow" data-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="10">
          <div class="item">
            <div class="team team-3">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member1.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Nick Brew</h3>
                <h5 class="member-position">CEO/Founder</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-3">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member2.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Jenny Doe</h3>
                <h5 class="member-position">Sales Assistance</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-3">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member3.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Crow Alex</h3>
                <h5 class="member-position">Art Director</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team team-3">
              <div class="member-image clearfix">
                <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member2.jpg')}}" alt="" />
              </div>
              <div class="team-info">
                <h3 class="member-name">Ronnie Rice</h3>
                <h5 class="member-position">Developer</h5>
                <div class="social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</section>
<!-- End Team style3  -->


@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection