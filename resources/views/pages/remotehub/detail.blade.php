<div class="row clearfix">
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="card">
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#person_add_only_icon_title" data-toggle="tab">
                            <i class="material-icons">person_add</i> NETWORKS
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#queue_play_next_only_icon_title" data-toggle="tab"> 
                            <i class="material-icons">queue_play_next</i> CHANNEL
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#business_only_icon_title" data-toggle="tab"> 
                            <i class="material-icons">business</i> COMPANIES
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#hearing_only_icon_title" data-toggle="tab">
                            <i class="material-icons">hearing</i> TRENDING TOPIC
                        </a>
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="person_add_only_icon_title">
                        @include('pages.remotehub.detail.people')
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="queue_play_next_only_icon_title">
                        <b>Add your Channel</b>
                        <p>
                            <img src="{{ asset('img/undercon.png')}}" class="img-responsive" alt="">
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="business_only_icon_title">
                        <b>Add your business network</b>
                        <p>
                            @include('pages.remotehub.detail.companies')
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="hearing_only_icon_title">
                        <b>Follow trending topic</b>
                        <p>
                            @include('pages.remotehub.detail.hashtag')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="col-sm-12 col-xs-6">
            <div class="card">
                <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="headingOne_19">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                    <i class="material-icons">important_devices</i> Upcoming Events
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                            <ul class="list-group">
                                <li class="list-group-item">RAWES <span class="label pull-right bg-orange">Tommorow</span></li>
                                <li class="list-group-item">MEETUP <span class="label pull-right label-primary">11-Jan</span></li>
                                <li class="list-group-item">WEBINAR <span class="label pull-right label-primary">11-Jan</span></li>
                                <li class="list-group-item"><a href="{{ asset('events/home')}}">Discover Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="headingTwo_19">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19">
                                    <i class="material-icons">hearing</i> Trending Topics
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
                            <ul class="list-group">
                                <li class="list-group-item">#Topic 1 <span class="label pull-right label-primary">14</span></li>
                                <li class="list-group-item">#Topic 2 <span class="label pull-right label-primary">1.299</span></li>
                                <li class="list-group-item"><a href="{{ asset('#')}}">View all recommendations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="headingThree_19">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19">
                                    <i class="material-icons">beach_access</i> Channel HUB
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                            <ul class="list-group">
                                <li class="list-group-item">Bussiness Assistant <span class="label pull-right label-primary">14</span></li>
                                <li class="list-group-item">Creative Hub <span class="label pull-right label-primary">7</span></li>
                                <li class="list-group-item">Developer Hub <span class="label pull-right label-primary">17</span></li>
                                <li class="list-group-item"><a href="{{ asset('remotehub/home')}}">Discover More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="headingFour_19">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19">
                                    <i class="material-icons">airline_seat_recline_extra</i> Carreer & Projects
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
                            <ul class="list-group">
                                <li class="list-group-item">Jobs <span class="label pull-right label-primary">3</span></li>
                                <li class="list-group-item">Skill Sharing <span class="label pull-right label-primary">16</span></li>
                                <li class="list-group-item">Projects <span class="label pull-right label-primary">9</span></li>
                                <li class="list-group-item"><a href="{{ asset('jobs/home')}}">View all Opportunity</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div  class="col-sm-12 col-xs-6">
            <div class="card">
                <div class="body">
                    <div class="media-left">
                        <a href="javascript:void(0);">
                            <img class="media-object" src="{{ asset('img/icon/intersolusi.jpg')}}" width="64" height="64">
                        </a>
                    </div>
                    <div class="media-body">
                        <h6 class="media-heading">Organization</h6> Cras sit amet nibh libero, in gravida nulla. 
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Page notifications <span class="label pull-right label-primary">14</span></li>
                    <li class="list-group-item">Recent visitors <span class="label pull-right label-primary">99</span></li>
                    <li class="list-group-item"><a href="{{ asset('#')}}">Share an Update</a></li>
                </ul>
            </div>
            <div class="card">
                <div class="body">
                    <a href="{{ url('user/home')}}" class="pull-right"><i class="material-icons">create</i></a>
                    <h2>
                        John Doe <small>Founder / CEO</small>
                    </h2>
                    
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Who's viewed your profile <span class="label pull-right label-primary">14</span></li>
                    <li class="list-group-item">Network HUB <span class="label pull-right label-primary">1.299</span></li>
                    <li class="list-group-item"><a href="{{ asset('remotehub/home')}}">View all recommendations</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>