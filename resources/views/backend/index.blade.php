@extends('backend.layouts.admin_master')
   
@section('title')
Admin panel
@endsection
  
@section('content')
@php
$all_user =  App\Models\User::get();
$get_user =  App\Models\User::orderBy('name')->latest()->get()->take(3);


@endphp

        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Admin Dashboard</h2>
                    <a href="{{route('add.offline.user')}}">
                    <button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi-plus"></i>Add User</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>{{count($all_user)}}</h2>
                                <span>Total members </span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>{{count($all_user)}}</h2>
                                <span>New Users </span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2>{{count($all_user)}}</h2>
                                <span>This week</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="text">
                                <h2>$1,060,</h2>
                                <span>Total earnings</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        
        <div class="row">
          
            <div class="col-lg-12">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-comment-text"></i> New Client user</h3>
                        <button class="au-btn-plus">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="au-inbox-wrap js-inbox-wrap">
                        <div class="au-message js-list-load">
                            <div class="au-message__noti">
                                <p>New latest 
                                    <span>{{count($get_user)}}</span>user 
                                   
                                </p>
                            </div>
                            <div class="au-message-list">
                                @foreach($get_user as $values)
                                <div class="au-message__item unread">
                                    <div class="au-message__item-inner">
                                        <div class="au-message__item-text">
                                            <div class="avatar-wrap">
                                                <div class="avatar">
                                                    
                                                    <img src="{{asset($values->profile_photo_path)}}" alt="{{$values->name}}">
                                                
                                                </div>
                                            </div>
                                            <div class="text">
                                                <a href="{{route('view.register.user',$values->id)}}">
                                                <h5 class="name">{{$values->name}}</h5>
                                                </a>
                                                @if($values->marital_status)
                                                <p>{{$values->marital_status}}</p>
                                                @else
                             <span class="badge badge-pill badge-warning">NA</span>

                                                @endif
                                            </div>
                                        </div>
                                        <div class="au-message__item-time">
                                            <span> {{Carbon\Carbon::parse($values->created_at)->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    
   

@endsection