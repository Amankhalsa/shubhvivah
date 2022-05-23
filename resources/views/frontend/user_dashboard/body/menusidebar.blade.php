   <aside class="menu-sidebar2">
            <div class="logo">
                <a href="{{route('dashboard')}}">

            <img src="{{asset('backend/images/icon/logo.png')}}" alt="shubhvivah " />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{(!empty(Auth::user()->profile_photo_path)) ? asset(Auth::user()->profile_photo_path):url('upload/no_image.jpg')}}" alt="{{Auth::user()->name}}"  id="output"/>
                    </div>
                    <h4 class="name">{{Auth::user()->name}}</h4>
                    <p>{{ucwords(Auth::user()->email)}}</p>
             
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                            <li>
                        <a href="{{route('dashboard')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('edit.auth.profile')}}">
                            <i class="fas fa-user"></i>Edit Profile</a>
                    </li>
                    <li>
                        <a href="{{route('change.user.password')}}">
                        <i class="fas fa-gear "></i>Change password  </a>
                    </li>
                    <li>

                            <a href="{{route('user.logout')}}">
                            <i class="  fas fa-power-off"></i>Logout</a>
                   
                        </li>

                       
                   

                    </ul>
                </nav>
            </div>
        </aside>