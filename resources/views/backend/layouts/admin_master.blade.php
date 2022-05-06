<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title') - Dashboard </title>
   <!-- Toaster CSS -->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
{{-- end toaster  --}}
     <!--data table  start  -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
   <!--data table end -->
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
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       @include('backend.body.header')
        <!-- END HEADER MOBILE-->
        {{-- @if(Route::is('admin.dashboard') ) --}}
        <!-- MENU SIDEBAR-->
        @include('backend.body.sidebar')
        <!-- END MENU SIDEBAR-->
        {{-- @endif --}}

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
        @include('backend.body.topheader')
         
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        @yield('content') 
                        @include('backend.body.footer')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
    <script src="{{asset('backend/vendor/animsition/animsition.min.j')}}s"></script>
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
    <!--datatable -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" ></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    {{-- sweet alert  --}}
    <!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function(){
  $(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr("href");

Swal.fire({
  title: 'Are you sure?',
  text: "Delete This Data!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})


  });
});
</script>
    {{-- sweet alert  --}}
{{-- toaster  --}}
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
   {{-- end toaster  --}}
</html>
<!-- end document-->
