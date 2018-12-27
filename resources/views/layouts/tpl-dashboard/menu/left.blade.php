<!-- Menu -->
<div class="menu">
    <div class="panel-group" id="left-menu" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne_17">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseOne_17" aria-expanded="false" aria-controls="collapseOne_17" class="collapsed">
                        <i class="material-icons">queue_play_next</i> My RemoteHUB
                    </a>
                </h4>
            </div>
            <div id="collapseOne_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_17" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <div class="list-group">
                        <a href="{{ url('/remotehub/home')}}" class="list-group-item">Administration Hub</a>
                        <a href="{{ url('/remotehub/home')}}" class="list-group-item">Creative Hub</a>
                        <a href="{{ url('/remotehub/home')}}" class="list-group-item">Developer Hub</a>
                    </div>
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
                        <button type="button" class="list-group-item">Rabu Weekly Sharing</button>
                        <button type="button" class="list-group-item">Monthly Meetup</button>
                        <button type="button" class="list-group-item">Webinar</button>
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
                        <button type="button" class="list-group-item">Product / Services</button>
                        <button type="button" class="list-group-item">Projects Collaboration</button>
                        <button type="button" class="list-group-item">Content / Copyriting</button>
                        <button type="button" class="list-group-item">Training Solution</button>
                        <button type="button" class="list-group-item">Translation</button>
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
                        <button type="button" class="list-group-item">Looking for Talent</button>
                        <button type="button" class="list-group-item">Job / Career</button>
                        <button type="button" class="list-group-item">Skill Sharing</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive_17">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#left-menu" href="#collapseFive_17" aria-expanded="false" aria-controls="collapseFive_17">
                        <i class="material-icons">fingerprint</i> My Portfolio
                    </a>
                </h4>
            </div>
            <div id="collapseFive_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_17" aria-expanded="false">
                <div class="panel-body">
                    <div class="list-group">
                        <button type="button" class="list-group-item">Setting</button>
                        <button type="button" class="list-group-item">My HUB</button>
                        <button type="button" class="list-group-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</div>





</div>
<!-- #Menu -->