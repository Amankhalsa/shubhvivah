@extends('frontend.user_dashboard.body.layout')
@section('title')
New Matches 
@stop
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
<!-- STATISTIC-->
<div class="row">

                <!-- col  -->
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" >
  <div class="row no-gutters">
    <div class="col-md-4">
       <div id="carousel-example-generic-captions" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic-captions" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic-captions" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic-captions" data-slide-to="2" class=""></li>
                      </ol>                      
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img src="http://127.0.0.1:8000/upload/profile/1732071434503458.png" class="img-fluid" alt="slide-1">
                     
                    </div>                   
                  </div>
                  <!-- Controls -->
                  <a class="carousel-control-prev" href="#carousel-example-generic-captions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-generic-captions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
               <h5 class="card-title">Name</h5>
               <hr>
        <p class="card-text">28 yrs 5;5  </p>
        <p class="card-text">Punjab, Ramgaria  </p>
          </div>
          <!-- ============= -->
               <div class="col-md-6">
               <h5 class="card-title">Never married </h5>
               <hr>
        <p class="card-text">Delhi  </p>
        <p class="card-text">Teacher </p>
          </div>
        </div>
     
    


        
        

        <p class="card-text"><small class="text-muted">About : <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></p>
      </div>
    </div>
  </div>
</div>
</div>

@endsection     

