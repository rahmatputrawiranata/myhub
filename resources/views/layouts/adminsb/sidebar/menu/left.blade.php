
<!-- Menu -->
<div class="menu">
    <div class="panel-group" id="left-menu" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne_17">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseOne_17" aria-expanded="false" aria-controls="collapseOne_17" class="collapsed">
                        <i class="material-icons">important_devices</i> My RemoteHUB
                    </a>
                </h4>
            </div>
            <div id="collapseOne_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/remotehub/home#person_add_only_icon_title')}}" class="list-group-item"><i class="material-icons">person_add</i> add network</a>
                        <a href="{{ url('/remotehub/home#queue_play_next_only_icon_title')}}" class="list-group-item"><i class="material-icons">queue_play_next</i> Add Channel</a>
                        <a href="{{ url('/remotehub/home#business_only_icon_title')}}" class="list-group-item"><i class="material-icons">business</i> Search Business</a>
                        <a href="{{ url('/remotehub/home#hearing_only_icon_title')}}" class="list-group-item"><i class="material-icons">hearing</i> Trending Topic</a>
                    </div>
                    <a href="{{ url('/remotehub/home')}}" class="list-group-item"><i class="material-icons">important_devices</i> view all</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree_17">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseThree_17" aria-expanded="false" aria-controls="collapseThree_17">
                        <i class="material-icons">date_range</i> Events & News
                    </a>
                </h4>
            </div>
            <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17" aria-expanded="false">
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/events/home')}}" class="list-group-item">Rabu Weekly Sharing</a>
                        <a href="{{ url('/events/home')}}" class="list-group-item">Monthly Meetup</a>
                        <a href="{{ url('/events/home')}}" class="list-group-item">Webinar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour_17">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseFour_17" aria-expanded="false" aria-controls="collapseFour_17">
                        <i class="material-icons">devices_other</i> Social Marketplace
                    </a>
                </h4>
            </div>
            <div id="collapseFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17" aria-expanded="false">
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/market/home')}}" class="list-group-item">Product / Services</a>
                        <a href="{{ url('/market/home')}}" class="list-group-item">Projects Collaboration</a>
                        <a href="{{ url('/market/home')}}" class="list-group-item">Content / Copyriting</a>
                        <a href="{{ url('/market/home')}}" class="list-group-item">Training Solution</a>
                        <a href="{{ url('/market/home')}}" class="list-group-item">Translation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo_17">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseTwo_17" aria-expanded="false" aria-controls="collapseTwo_17">
                        <i class="material-icons">important_devices</i> Career & Job Board
                    </a>
                </h4>
            </div>
            <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17" aria-expanded="false">
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/jobs/home')}}" class="list-group-item">Looking for Talent</a>
                        <a href="{{ url('/jobs/home')}}" class="list-group-item">Job / Career</a>
                        <a href="{{ url('/jobs/home')}}" class="list-group-item">Skill Sharing</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

</div>
<!-- #Menu -->