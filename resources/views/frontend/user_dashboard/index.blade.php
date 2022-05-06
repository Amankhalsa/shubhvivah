@extends('frontend.user_dashboard.body.dash_master')

@section('title')
User
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="{{asset(Auth::user()->profile_photo_path)}}" alt="{{Auth::user()->name}}"  width="150">
                    <h5 class="text-sm-center mt-2 mb-1"> {{Auth::user()->name}}</h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i>  {{Auth::user()->email}}</div>
                </div>
            <div class="row pt-5">
                <div class="col">
                    Name :   {{Auth::user()->name}}
                </div>
                <div class="col">
                    Age : 
                    {{ \Carbon\Carbon::parse(Auth::user()->dob)->diff(\Carbon\Carbon::now())->format('%y years') }}
                </div>
                <div class="col">
                    Marital status :  {{Auth::user()->marital_status}}
                </div>
            </div>
            <div class="row pt-5">
                <div class="col">
                    Height :  @if(Auth::user()->height) {{Auth::user()->height}}
                     @else      
                     <span class="badge badge-pill badge-warning">NA</span>
                      @endif
                </div>
                <div class="col">
                    Religion : 
                    @if( Auth::user()->religion)
                    {{ Auth::user()->religion }}
                    @else
                    <span class="badge badge-pill badge-warning">NA</span>

                    @endif
                </div>
                <div class="col">
                    Community 
                    @if(Auth::user()->community)
                    :  {{Auth::user()->community}}
                    @else
                    <span class="badge badge-pill badge-warning">NA</span>

                    @endif
                </div>
            </div>
                <hr>
                <div class="card-text text-sm-center">
                    <a href="#">
                        <i class="fa fa-facebook pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin pr-1"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-pinterest pr-1"></i>
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <strong class="card-title mb-3">Profile </strong>
            </div>
        </div>
    </div>
{{-- ==================== --}}

            </div>
        
        
  



@endsection
