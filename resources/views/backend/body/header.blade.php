<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('backend/images/icon/logo.png')}}" alt="shubhvivah " />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                   
                                <li>
                                    <a href="{{route('admin.dashboard')}}">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('registered.all.user')}}">
                                        <i class="fas fa-table"></i>All users</a>
                                </li>
                                <li>
                                    <a href="{{route('inquiry.all.user')}}">
                                        <i class="fas fa-table"></i>Inquiry  </a>
                                </li>
                              
                            </ul>
                        
             
                  
                    
                    </ul>
                </div>
            </nav>
        </header>