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
                     <h1 class="title text-white"><span class="fa fa-exchange"></span> Remote<strong class="text-primary">Hub</strong>.id</h1>
                  </div>
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-sm-6 text-left"><span class="sub-title">Subtittle Goes Here</span></div>
                        <div class="col-sm-6 text-right">
                           <ul class="page-breadcrumb">
                              <li><a href="{{ url('/')}}">Home</a></li>
                              <li><a href="javascript:void(0)">Elements</a></li>
                              <li><span class="theme-text">Feature Box</span> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Banner -->
         <!-- Feature box Defult  -->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Creative <strong class="text-primary">Hub</strong></h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Writer, Vlogger Channel</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Graphic, Video & 3D Channel</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Lifestyle Channel</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Feature box Defult  -->
         <!-- Feature box Icon Position right  -->
         <section class="theme-bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Business Manager <strong class="text-green">Hub</strong></h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature icon-position-right">
                        <div class="feature-info">
                           <h4>Virtual Assistant</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature icon-position-right">
                        <div class="feature-info">
                           <h4>Accounting</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature icon-position-right">
                        <div class="feature-info">
                           <h4>Legal</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Feature box Icon Position right  -->
         <!-- Feature box Icon Position left  -->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Developer <strong class="text-primary">Hub</strong></h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature icon-position-left">
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Web Dev</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature icon-position-left">
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Mobile Dev</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature icon-position-left">
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Device & Networking</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Feature box Icon Position left  -->
         <!-- Fature box large -->
         <section class="dark-bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Marketing <strong class="text-primary">Hub</strong></h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Working with care</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Working with care</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature">
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h4>Working with care</h4>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Fature box large -->
         <!-- Fature box Medium -->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Gamer's <strong class="text-primary">Hub</strong></h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature text-center icon-medium">
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h5>Working with care</h5>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature text-center icon-medium">
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h5>Working with care</h5>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature text-center icon-medium">
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h5>Working with care</h5>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Fature box Medium -->
         <!-- Fature box small -->
         {{-- <section class="section-pt">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="heading-block text-center">
                        <h4 class="text-uppercase ">Fature box small</h4>
                        <div class="divider"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature text-right icon-small">
                        <div class="feature-icon">
                           <i class="lnr lnr-cog theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h6>Working with care</h6>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4 sm-mb-4">
                     <div class="feature text-right icon-small">
                        <div class="feature-icon">
                           <i class="lnr lnr-heart theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h6>Working with care</h6>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="feature text-right icon-small">
                        <div class="feature-icon">
                           <i class="lnr lnr-screen theme-text"></i>
                        </div>
                        <div class="feature-info">
                           <h6>Working with care</h6>
                           <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua ut enim
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> --}}
         <!-- End Fature box small -->

@endsection()                 


@section('scripts')
{{-- expr --}}
@endsection