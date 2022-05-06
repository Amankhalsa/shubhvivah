<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('admin.dashboard')}}">
            <img src="{{asset('backend/images/icon/logo.png')}}" alt="shubhvivah " />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('front.home.page')}}">
                        <i class="fa fa-globe"></i>Website </a>
                        
                    </li>
                <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    
                </li>
                <li>
                    <a href="{{route('registered.all.user')}}">
                        <i class="fa fa-users"></i>All users</a>
                </li>
               
                <li>
                    <a href="{{route('inquiry.all.user')}}">
                        <i class="fa fa-envelope"></i>Inquiry  </a>
                </li>
               
              
              
             
                
            </ul>
        </nav>
    </div>
</aside>