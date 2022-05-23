@extends('frontend.user_dashboard.body.layout')
@section('title')
Today Matches
@stop
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
<!-- STATISTIC-->

<div class="row">
<h4 class="pb-5 text-center">Here are Today's top Matches for you. Connect with them now!</h4>
  
    <div class="container">
        <div class="main-body">

              <!-- Breadcrumb -->
              <!-- /Breadcrumb -->
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  
                  
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <div class="mt-3">
                        
  
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
                      <img src="{{asset('upload/no_image.jpg')}}" class="img-fluid" alt="slide-1">
                     
                    </div>

                      <div class="carousel-item">
                      <img src="{{asset('upload/no_image.jpg')}}" class="img-fluid" alt="slide-2">
                      </div>
                
                          <div class="carousel-item">
                      <img src="{{asset('upload/no_image.jpg')}}" class="img-fluid" alt="slide-2">
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
                  {{-- slider end  --}}
                  <h4>

                
                   Reg.Code :  <span class="badge badge-pill badge-warning">NA</span>
                 
                </h4>
                        </div>
                     
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          Date of Birth</h6>
                        <span class="text-secondary">
                        
                        </span>
                
                      </li>
                       
                      
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          Country</h6>
                        <span class="text-secondary"></span>
                      </li>
                      
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          Bio</h6>
                        <span class="text-secondary"></span>
                      </li>
                      
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                            Work detail</h6>
                        <span class="text-secondary">
                            
                          
                            
                                                        <span class="badge badge-pill badge-warning">NA</span>
                                                        
                            </span>
                      </li>
                     
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row text-right">
                        <div class="col-sm-12">
                          <a class="btn btn-info "  href="">Edit</a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">


                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           
                        </div>
                      </div>
               
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      
                        </div>

                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                     
                        </div>
                      </div>
                      <hr>
                    
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">About</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0"> Height</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                     
                             <span class="badge badge-pill badge-warning">NA</span>
                
                        </div>
                        {{-- ============ --}}

                     
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0"> Religion</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                 
                             <span class="badge badge-pill badge-warning">NA</span>

                         
                        </div>
                        {{-- ============ --}}

                        
                      </div>
                      <hr>
                      {{-- ########### Row end ########## --}}
                      <div class="row">
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0"> Community</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                    
                             <span class="badge badge-pill badge-warning">NA</span>

                      
                        </div>
                        {{-- ============ --}}

                        <div class="col-sm-3">
                          <h6 class="mb-0"> Working as</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                  
                             <span class="badge badge-pill badge-warning">NA</span>

                          
                        </div>
                        {{-- ============ --}}
                   
                      </div>
                      <hr>


              
                      {{-- ################# Row end #############  --}}

                      <div class="row">
                        {{-- ============= --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">   Status</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      


                             <span class="badge badge-pill badge-success">Active</span>
                
                             <span class="badge badge-pill badge-danger">Inactive</span>
     
                  
                        </div>
                        {{-- =============== --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">   Mother Tongue</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      

                        
                         <span class="badge badge-pill badge-warning">NA</span>

     
                       
                        </div>
                        {{-- =============== --}}
                      </div>
                      <hr>
                 {{-- ========== --}}
                 <div class="row">
                  {{-- ============= --}}
                  <div class="col-sm-3">
                    <h6 class="mb-0">   Religion</h6>
                  </div>
                  <div class="col-sm-3 text-secondary">
                
                   
                   
                       <span class="badge badge-pill badge-warning">Na</span>

                  </div>
                  {{-- =============== --}}
                  <div class="col-sm-3">
                    <h6 class="mb-0">   Diet </h6>
                  </div>
                  <div class="col-sm-3 text-secondary">
                

                    <span class="badge badge-pill badge-warning">NA</span>

                  </div>
                  {{-- =============== --}}
                </div>
                <hr>
                 {{-- ================= --}}

                      {{-- new row start  --}}
                      
                      <div class="row">
                        {{-- ============= --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">   City</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      
                         
                       
                             <span class="badge badge-pill badge-warning">Na</span>
     
                   
                        </div>
                        {{-- =============== --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">   State </h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      

                      
                         <span class="badge badge-pill badge-warning">NA</span>

     
                        </div>
                        {{-- =============== --}}
                      </div>
                      <hr>
                      {{-- new row end  --}}

                    
                    </div>
                  </div>
    
                
    
    
    
                </div>
              </div>
    
            </div>
        </div>
</div>


@endsection     

