<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{asset('backend/images/icon/logo.png')}}" alt="shubhvivah " />

        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{asset(Auth::user()->profile_photo_path)}}" alt="{{Auth::user()->name}}" />
            </div>
            <h4 class="name">{{Auth::user()->name}}</h4>
           
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
              
                
                
                        <li>
                            <a href="">
                                <i class="fas fa-tachometer-alt"></i>Profile  </a>
                        </li>
                  
                        <li>
                            <a href="">
                                <i class="fas fa-gear "></i>Settings  </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-Sent "></i> send </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <a  href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <i class="fas fa-user"></i>Logout</a>
                            </form>
                        </li>
               
                    

                      
                      
             
           
                
            </ul>
        </nav>
    </div>
</aside>