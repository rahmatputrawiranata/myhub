

<div class="profile-header">&nbsp;</div>
<div class="profile-body">
    <div class="image-area">
        <img src="{{ asset('img/ths.jpg')}}" alt="RemoteHUB - Profile Image" />
    </div>
    <div class="content-area">
        <h3> {{ Auth::user()->name }}</h3>
        <p>Web Software Developer</p>
        <p>Administrator</p>
    </div>
</div>
<div class="profile-footer">
    <ul>
        <li>
            <span>Followers</span>
            <span>1.234</span>
        </li>
        <li>
            <span>Following</span>
            <span>1.201</span>
        </li>
        <li>
            <span>Friends</span>
            <span>14.252</span>
        </li>
    </ul>
    <button class="btn btn-primary btn-lg waves-effect btn-block">FOLLOW</button>
</div>