@extends('templates.kkr021.fullscreen')

@section('stylesheets')
{{-- expr --}}
@endsection

@section('content')
            <!-- coming-soon -->
            <section class="coming-soon p-0 pos-r">
                <div class="fullbg bg-pos-right " data-bg-img="{{ asset('img/guest/people1.jpg')}}" ></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 text-center">
                            <div class="py-7 pr-7 xs-pr-0 xs-py-5 coming-block text-center">
                                <div class="valign-middle">
                                    <h2 class="title"> <span class="text-primary">Remote</span><strong><i class="fa fa-share-alt "></i>HUB</strong></span></h2>
                                    <span class="label-coming theme-text mb-1">Coming Soon</span>
                                    <p><span class="text-primary"><i class="fa fa-share-alt "></i> Remote</span><strong class="text-primary">HUB.id</strong>. Digital nomad and remote worker collaborations, scale up, hangout, lifestyle, travelpreneur, work life balance.</p>
                                    <h4 class="text-uppercase mb-0"><i class="icon-envelope-letter icons" aria-hidden="true"></i> Provide your email address!</h4>
                                    <p class="mb-2">We will notify you when site is ready :</p>
                                    <form role="form" class="search-form">
                                        <div class="form-group">
                                            <input name="search" class="form-control" placeholder="Notify Me" type="text">
                                            <a href="#" class="submit"><i class="icon-magnifier icons" aria-hidden="true"></i></a>
                                        </div>
                                    </form>
                                    <ul class="countdown list-unstyled mb-3">
                                        <li>
                                            <span class="days theme-text">56</span>
                                            <p class="days_ref">Days</p>
                                        </li>
                                        <li>
                                            <span class="hours theme-text">10</span>
                                            <p class="hours_ref">Hours</p>
                                        </li>
                                        <li>
                                            <span class="minutes theme-text">42</span>
                                            <p class="minutes_ref">Minutes</p>
                                        </li>
                                        <li>
                                            <span class="seconds theme-text">36</span>
                                            <p class="seconds_ref">Seconds</p>
                                        </li>
                                    </ul>
                                    <div class="social-icons animated color text-center mt-1">
                                        <ul>
                                            {{-- <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                                            {{-- <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                            <li class="social-instagram"><h1><a href="https://www.instagram.com/remotehub.id/" target="_blank"><i class="fa fa-instagram fa-4"></i></a></h1></li>
                                            <li><a href="welcome" class="btn btn-link animated dark-text">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                                            <li class="social-digg"><a href="login"><i class="fa fa-digg"></i></a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 
    @endsection()                 
    
    
    @section('scripts')
    {{-- expr --}}
    @endsection