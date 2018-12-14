@extends('templates.kkr021.fullutube')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
<!-- Banner -->
<section  class="full-height bg white-text header-slide single-image overlay" data-overlay-color="dark" data-overlay="8" data-bg-img="{{ asset('templates/kkr021/images/corporate/banner.jpg')}}" data-jarallax-video="https://www.youtube.com/watch?v=gDFdHnkohLg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1 class="title"> <span class="fa fa-exchange"></span> RemoteHub.id </h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="#project" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Project <strong class="text-primary">HUB</strong></a>&nbsp;&nbsp; 
                <a href="#myhub" class="btn btn-default animated btn-radius theme-bg white-text">My <strong class="text-yellow">HUB</strong> <i class="fa fa-cubes" aria-hidden="true"></i></a> &nbsp;&nbsp; 
                <a href="#member" class="btn btn-default btn-radius btn-outline white-border white-text fill-white">Family <strong class="text-primary">HUB</strong class="text-primary"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    @include('guest.partials.cta-project')
    <!-- service -->
    <section id="myhub" class="theme-bg pb-7 sm-pb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block text-center">
                        <h3 class="text-uppercase text-theme">My HUB</h3>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Few More Leads</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Close More Deals</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Connect With Customer</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Predict customer wants</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Working with care</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="feature icon-position-left">
                        <div class="feature-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="feature-info">
                            <h5 class="solid-weight">Monitor and manage</h5>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua ut enim
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="heading-block text-center">
                <a href="myhub" class="btn btn-default btn-sm fill-white">More Detail <i class="fa fa-eye" aria-hidden="true"></i></a>
              </div>
          
    </section>
    <!-- End service -->
    @include('guest.partials.cta-team')
    <!-- Company Milestone -->
    <section class="p-0 pos-r dark-bg">
        <div class="fullbg" data-bg-img="{{ asset('templates/kkr021/images/main/bg-2.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-sm-offset-4 col-md-offset-6">
                    <div class="py-7 pl-7 xs-py-4 sm-py-5 sm-pl-7 xs-pl-0">
                        <div class="heading-block">
                            <span class="text-uppercase light-weight">Tempor incididunt labore dolore veniam</span>
                            <h2 class="text-uppercase solid-weight">Rawes & Kopdar</h2>
                            <div class="divider"></div>
                        </div>
                        <p>Nullam felis sapien, commodo ac posuere non, pretium nec mauris. Ut nibh velit, accumsan at dapibus quis, venenatis ac turpis.</p>
                        <div class="timeline timeline-3 clearfix mt-4">
                            <div class="timeline-panel">
                                <label class="year theme-bg">03.1</label>
                                <div class="timeline-body">
                                    <h5 class="title theme-text">Founded John Smith started company</h5>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. laboris nisi ut aliquip ex ea commodo consequat labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <label class="year theme-bg">10.1</label>
                                <div class="timeline-body">
                                    <h5 class="title theme-text">Awarded for Best Product quality</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <label class="year theme-bg">17.1</label>
                                <div class="timeline-body">
                                    <h5 class="title theme-text">New production unit started in NC</h5>
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. laboris nisi ut aliquip ex ea lorem ipsum dolor sit amet, consectetur adipiscing elit, commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- icon position right -->
            </div>
        </div>
    </section>
    <!-- End Company Milestone -->
    <!-- Our Mission -->
    <section class="pos-r p-0">
        <div class="fullbg bg-pos-right" data-bg-img="{{ asset('templates/kkr021/images/main/bg1.jpg')}}" ></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="py-7 pr-7 xs-py-3 xs-pr-0">
                        <div class="heading-block">
                            <span class="text-uppercase light-weight">VESTIBULUM QUIS VELIT RUTRUM</span>
                            <h2 class="text-uppercase solid-weight">Connect.Collaborate.Create</h2>
                            <div class="divider"></div>
                        </div>
                        <p >Nullam felis sapien, commodo ac posuere non, pretium nec mauris. Ut nibh velit, accumsan at dapibus quis, venenatis ac turpis.</p>
                        <div class="panel-group accordion border" id="accordion1-2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading1-2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion1-2" href="#collapse1-2" aria-expanded="true" aria-controls="collapse1-2">
                                            Many desktop publishing packages
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1-2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1-2">
                                    <div class="panel-body">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1-2" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                            The standard Lorem Ipsum passage
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse2-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2-2">
                                    <div class="panel-body">
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,qui dolorem ipsum quia dolor sit amet.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3-2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1-2" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
                                            Written by Cicero in 45 BC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse3-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3-2">
                                    <div class="panel-body">
                                        On the other hand,we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment,so blinded by desire,that they cannot foresee the pain and trouble that are bound to ensue.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Mission -->
    <!-- Counter fancy -->
    <section class="pb-7 sm-pb-4 xs-pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6 col-xx-12 mb-3">
                    <div class="counter fancy">
                        <div class="counter-icon">
                            <i class="icon-question icons"></i>
                        </div>
                        <div class="counter-info">
                            <span class="timer" data-to="25000" data-speed="10000">25000</span>
                            <label>Questions Answered</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xx-12 mb-3">
                    <div class="counter fancy">
                        <div class="counter-icon">
                            <i class="icon-badge icons"></i>
                        </div>
                        <div class="counter-info">
                            <span class="timer" data-to="25000" data-speed="10000">25000</span>
                            <label>Awords</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xx-12 mb-3">
                    <div class="counter fancy">
                        <div class="counter-icon">
                            <i class="icon-check icons"></i>
                        </div>
                        <div class="counter-info">
                            <span class="timer" data-to="25000" data-speed="10000">25000</span>
                            <label>Completed Projects</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xx-12 mb-3">
                    <div class="counter fancy">
                        <div class="counter-icon">
                            <i class="icon-emotsmile icons"></i>
                        </div>
                        <div class="counter-info">
                            <span class="timer" data-to="25000" data-speed="10000">25000</span>
                            <label>Happy Clients</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter fancy -->
    <!-- Text position left -->
    <section class="section-pt pb-6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="counter timer-lg">
                        <div class="counter-info">
                            <span class="timer theme-text" data-to="1200" data-speed="10000">1200</span>
                            <label>
                                Questions Answered 
                                <span>Sed do Eiusmod tempor incididunt ut labore</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="counter timer-lg">
                        <div class="counter-info">
                            <span class="timer theme-text" data-to="2555" data-speed="10000">2555</span>
                            <label>
                                Awords 
                                <span>Sed do Eiusmod tempor incididunt ut labore</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="counter timer-lg">
                        <div class="counter-info">
                            <span class="timer theme-text" data-to="2450" data-speed="10000">2450</span>
                            <label>
                                Completed Projects 
                                <span>Sed do Eiusmod tempor incididunt ut labore</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Text position left -->
    
    <!-- our experts -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-3 col-sm-12">
                    <div class="pxy-5">
                        <div class="heading-block">
                            <span class="text-uppercase light-weight">Excellent Advisors</span>
                            <h2 class="text-uppercase solid-weight">Success Story</h2>
                            <div class="divider"></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="owl-carousel owl-theme light-arrow" data-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-nav-dots="false" data-nav-arrow="false" data-auto-play="true"  data-space="0">
                        <div class="item">
                            <div class="team">
                                <div class="member-image clearfix">
                                    <a class="arrow-btn" href="#"><i class="lnr lnr-arrow-right"></i></a>
                                    <img class="img-responsive" src="{{ asset('templates/kkr021/images/team/member2.jpg')}}" alt="" />
                                </div>
                                <div class="team-info">
                                    <h3 class="member-name">Alice Willy</h3>
                                    <h5 class="member-position">Web Designer</h5>
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
                                    <h3 class="member-name">John Doe</h3>
                                    <h5 class="member-position">Engineer</h5>
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
                                    <h3 class="member-name">Dan O’Brien</h3>
                                    <h5 class="member-position">Founder, London</h5>
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
    <!-- End our experts --
        
        @endsection()                 
        
        
        @section('scripts')
        {{-- expr --}}
        @endsection