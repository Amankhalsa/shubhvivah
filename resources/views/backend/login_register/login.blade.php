<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Title Page-->
        <title>Login</title>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
  <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <style type="text/css">
        .toast-success {
          background-color: #51A351 !important;
        }
        .toast-error {
          background-color: #BD362F !important;
        }
        .toast-info {
          background-color: #2F96B4 !important;
        }
        .toast-warning {
          background-color: #F89406 !important;
        }
        </style>
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
                            
        {{-- @if (session('error'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session::get('error') }}
        </div>
    @endif --}}

    @if(Session::has('error')) 
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> {{ session::get('error') }} </strong>  
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group">
                    <label>Admin Email Address</label>
                    <input class="au-input au-input--full" id="email" type="email" name="email"  placeholder="Admin Email">
                    @error('email')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Admin Password</label>
                    <input class="au-input au-input--full"  id="password"  type="password" name="password" placeholder="Admin Password">
                    @error('password')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                <div class="login-checkbox">
                    <label>
                        <input type="checkbox" id="remember_me" name="remember" >Remember Me
                    </label>
                    {{-- <label>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgotten Password?</a>
                        @endif
                    </label> --}}
                </div>
                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Admin Sign in</button>
            
            </form>
                        
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
 <!-- Toaster Javascript cdn -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
       case 'info':
       toastr.info(" {{ Session::get('message') }} ");
       break;
   
       case 'success':
       toastr.success(" {{ Session::get('message') }} ");
       break;
   
       case 'warning':
       toastr.warning(" {{ Session::get('message') }} ");
       break;
   
       case 'error':
       toastr.error(" {{ Session::get('message') }} ");
       break; 
    }
    @endif 
   </script>
</body>

</html>
<!-- end document-->