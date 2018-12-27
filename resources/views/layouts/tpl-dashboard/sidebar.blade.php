<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="card profile-card">
        <div class="body">
                <a href="{{ url('home')}}" class="btn btn-block btn-info waves-effect m-r-20">HOME</a>
            @include('pages.user.partials.profile-card')
            
            @include('layouts.tpl-dashboard.menu.left')
            
            <!-- #User Info -->
        </div>
        <div class="footer">
            
        </div>
    </div>
    
</aside>
