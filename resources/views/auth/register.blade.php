<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Title Page-->
      <title>Register</title>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
  <!-- Fontfaces CSS-->
  <link href="{{asset('backend/css/font-face.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{asset('backend/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
  <!-- Vendor CSS-->
  <link href="{{asset('backend/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('backend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
  <!-- Main CSS-->
  <link href="{{asset('backend/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="animsition">
                 @php
                  $get_Country =  App\Models\Country::get();
                  @endphp

    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('backend/images/icon/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="login-form">
                            
        <form method="POST" action="{{ route('register') }}">
            @csrf
                                <div class="form-group">
                                    {{-- <label>Username</label> --}}
                                    <input class="au-input au-input--full" id="name" type="text" name="name"  placeholder="User name">
                                    @error('name')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    {{-- <label>Email Address</label> --}}
                                    <input class="au-input au-input--full" id="email"  type="email" name="email" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>
                                {{-- phone  --}}
                                <div class="form-group">
                                    {{-- <label>Email Address</label> --}}
                                    <input class="au-input au-input--full" id="phone"  type="tel" name="phone" placeholder="Phone">
                                    @error('phone')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>
                                {{-- phone  --}}
                                {{-- start date of birth  --}}
                              {{--   <div class="form-group">
                                    {{-- <label>Date of Birth</label> 
                                    <input class="au-input au-input--full" id="dob"  type="date" name="dob" placeholder="MM/DD/YYYY"
                                    onfocus="(this.type='date')">
                                    @error('dob')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div> --}}
                                {{-- end date of birth --}}
                                
                                <div class="form-group">
                                  {{--  <label>Password</label>  --}}
                                    <input class="au-input au-input--full" id="password" type="password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>  
                                
                                <div class="form-group">
                                    {{-- <label>Confirm Password</label> --}}
                                    <input class="au-input au-input--full" type="password" name="password_confirmation"  placeholder="Confirm Password">
                                    @error('password_confirmation')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                </div>
                              {{--    Country commented 
                                <div class="form-group">
                                
                                    <select name="country" id="select" class="form-control">
                                        <option  disabled="" selected>Please select Country</option>
                                        @foreach($get_Country as $val)
                                        <option value="{{$val->name}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                    <span class="text-danger"> {{$message}}</span>
                                    @enderror
                                  
                                </div>  --}}
                                {{-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> --}}
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                           
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{ route('login') }}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('backend/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('backend/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('backend/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('backend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('backend/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('backend/js/main.js')}}"></script>
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->