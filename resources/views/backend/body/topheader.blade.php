<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">1</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('backend/images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('backend/images/icon/avatar-04.jpg')}}" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
 @php

$get_Inquiry =  App\Models\Inquiry::orderBy('name')->latest()->get();


@endphp
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">{{count($get_Inquiry)}}</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have {{count($get_Inquiry)}}  Inquiry</p>
                                </div>
                               @foreach($get_Inquiry as $val)
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('upload/no_image.jpg')}}" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>{{ $val->name}}</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                @endforeach
                              
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset(Auth::guard('admin')->user()->profile_photo_path) }}" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"> {{ Auth::guard('admin')->user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset(Auth::guard('admin')->user()->profile_photo_path) }}" alt="John Doe" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::guard('admin')->user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::guard('admin')->user()->email }} </span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{route('view.profile')}}">
                                            <i class="zmdi zmdi-account"></i>My Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{route('admin.password.change')}}">
                                            <i class="zmdi zmdi-settings"></i>Change Password</a>
                                    </div>
                                    {{-- <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div> --}}
                                </div>
                                <div class="account-dropdown__footer">
                              
                           
                                    <div class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.logout') }}"  role="button">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                            </a>
                                    </div>
                              
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>