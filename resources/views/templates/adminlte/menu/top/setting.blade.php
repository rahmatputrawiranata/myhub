<li class="dropdown tasks-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-gear fa-lg"></i>
  </a>
  <ul class="dropdown-menu">
    <li class="header">USER</li>
    <li class="">
      <a href="{{ url('admin/settings/profilesetting')}}">
        <i class="fa fa-fw fa-user "></i>
        <span>Profile</span>
      </a>
    </li>
    <li class="">
      <a href="{{ url('admin/settings/password')}}">
        <i class="fa fa-fw fa-lock "></i>
        <span>Change Password</span>
      </a>
    </li>
    <li class="header">ADMINISTRATOR</li>
    <li class="">
      <a href="{{ url('admin/settings/administrator')}}">
        <i class="fa fa-fw fa-user "></i>
        <span>Administrator</span>
      </a>
    </li>
    <li class="">
      <a href="{{ url('admin/settings')}}">
        <i class="fa fa-fw fa-lock "></i>
        <span>Change Password</span>
      </a>
    </li>
    {{-- <!-- inner menu: contains the actual data -->
      <ul class="menu">
        <li><!-- Task item -->
          
        </li>
        <!-- end task item -->
        <li><!-- Task item -->
          
        </li>
        <!-- end task item -->
        <li><!-- Task item -->
          
        </li>
        <!-- end task item -->
        <li><!-- Task item -->
          
        </li>
      </ul> --}}
      <li class="footer">
        <a href="#">View all tasks</a>
      </li>
    </ul>
  </li>