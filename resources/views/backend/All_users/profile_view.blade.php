@extends('backend.layouts.admin_master')

@section('title')
Profile View 
@endsection

@section('content')
@php

@endphp

<div class="row">
    <div class="container">
        <div class="main-body">
              <!-- Breadcrumb -->
              <!-- /Breadcrumb -->
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  {{-- new profile  --}}
                  
                  {{-- new profile  --}}
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <div class="mt-3">
                        
  
                  {{-- slider  --}}
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
                      <img src="{{(!empty($view_users->profile_photo_path)) ? asset($view_users->profile_photo_path):asset('upload/no_image.jpg')}}" class="img-fluid" alt="slide-1">
                     
                    </div>
                    @foreach($multi_images as $value)
                    @if($value->photo_name)
                      <div class="carousel-item">
                      <img src="{{asset($value->photo_name)}}" class="img-fluid" alt="slide-2">
                      </div>
                      @else
                          <div class="carousel-item">
                      <img src="{{asset('upload/no_image.jpg')}}" class="img-fluid" alt="slide-2">
                      </div>
                      @endif
                      @endforeach


                
                                        
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
                    @if($view_users->reg_code)
                   Reg.Code : {{Str::limit($view_users->reg_code,15,$end='....')}}
                   @else
                   Reg.Code :  <span class="badge badge-pill badge-warning">NA</span>
                   @endif 
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
                        <span class="text-secondary">{{$view_users->dob}}
                        
                        </span>
                       Age: {{ \Carbon\Carbon::parse($view_users->dob)->diff(\Carbon\Carbon::now())->format('%y years') }}
                      </li>
                       
                      
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          Country</h6>
                        <span class="text-secondary">{{$view_users->country}}</span>
                      </li>
                      
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          Bio</h6>
                        <span class="text-secondary">{{$view_users->address}}</span>
                      </li>
                      
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">
                          
                          
                          	Work detail</h6>
                        <span class="text-secondary">
                            
                            @if($view_users->work_detail)
                            {{$view_users->work_detail}}
                            @else
                            
                                                        <span class="badge badge-pill badge-warning">NA</span>
                                                        @endif
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
                          <a class="btn btn-info "  href="{{route('edit.register.user',$view_users->id)}}">Edit</a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{Str::limit($view_users->name,35,$end='....')}}

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$view_users->email}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Password</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          @if($view_users->pass_code)
                            {{$view_users->pass_code}}
                            @else 
                            <span class="badge badge-pill badge-warning">NA</span>
                            @endif
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                            {{$view_users->phone}}
                        </div>

                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                           {{$view_users->gender}}
                        </div>
                      </div>
                      <hr>
                    
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">About</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                             {{$view_users->about_yourself}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">	Height</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          @if($view_users->height)
                             {{$view_users->height}}
                             @else
                             <span class="badge badge-pill badge-warning">NA</span>
                          @endif
                        </div>
                        {{-- ============ --}}

                     
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">	Religion</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          @if($view_users->religion)
                             {{$view_users->religion}}
                             @else
                             <span class="badge badge-pill badge-warning">NA</span>

                             @endif
                        </div>
                        {{-- ============ --}}

                        
                      </div>
                      <hr>
                      {{-- ########### Row end ########## --}}
                      <div class="row">
                        {{-- ============ --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">	Community</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          @if($view_users->community)
                             {{$view_users->community}}
                             @else
                             <span class="badge badge-pill badge-warning">NA</span>

                          @endif
                        </div>
                        {{-- ============ --}}

                        <div class="col-sm-3">
                          <h6 class="mb-0">	Working as</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          @if($view_users->Working_as)
                             {{$view_users->Working_as}}
                             @else
                             <span class="badge badge-pill badge-warning">NA</span>

                             @endif
                        </div>
                        {{-- ============ --}}
                   
                      </div>
                      <hr>


              
                      {{-- ################# Row end #############  --}}

                      <div class="row">
                        {{-- ============= --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">		Status</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      

                             @if($view_users->status == 1)

                             <span class="badge badge-pill badge-success">Active</span>
                         @else
                             <span class="badge badge-pill badge-danger">Inactive</span>
     
                         @endif
                        </div>
                        {{-- =============== --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">		Mother Tongue</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      

                             @if($view_users->mother_tongue )

                            {{$view_users->mother_tongue }}
                         @else
                         <span class="badge badge-pill badge-warning">NA</span>

     
                         @endif
                        </div>
                        {{-- =============== --}}
                      </div>
                      <hr>
                 {{-- ========== --}}
                 <div class="row">
                  {{-- ============= --}}
                  <div class="col-sm-3">
                    <h6 class="mb-0">		Religion</h6>
                  </div>
                  <div class="col-sm-3 text-secondary">
                
                   
                       @if($view_users->religion)

                       {{$view_users->religion}}
                   @else
                       <span class="badge badge-pill badge-warning">Na</span>

                   @endif
                  </div>
                  {{-- =============== --}}
                  <div class="col-sm-3">
                    <h6 class="mb-0">		Diet </h6>
                  </div>
                  <div class="col-sm-3 text-secondary">
                

                    @if($view_users->diet)
                    {{$view_users->diet}}
                    @else
                    <span class="badge badge-pill badge-warning">NA</span>


                    @endif
                  </div>
                  {{-- =============== --}}
                </div>
                <hr>
                 {{-- ================= --}}

                      {{-- new row start  --}}
                      
                      <div class="row">
                        {{-- ============= --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">		City</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      
                         
                             @if($view_users->city)

                             {{$view_users->city}}
                         @else
                             <span class="badge badge-pill badge-warning">Na</span>
     
                         @endif
                        </div>
                        {{-- =============== --}}
                        <div class="col-sm-3">
                          <h6 class="mb-0">		State </h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                      

                             @if($view_users->State )

                            {{$view_users->mother_tongue }}
                         @else
                         <span class="badge badge-pill badge-warning">NA</span>

     
                         @endif
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
