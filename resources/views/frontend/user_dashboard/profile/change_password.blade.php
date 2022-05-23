@extends('frontend.user_dashboard.body.layout')
@section('title')
Change password
@stop
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

<div class="row mt-5">
 <div class="col-lg-10">
<div class="card">
    <div class="card-header">
        <strong>Change </strong>Password
    </div>
    <div class="card-body card-block">
        <form action="{{route('update.user.password')}}" method="post" class="form-horizontal">
           @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="hf-email" class=" form-control-label">Old password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="oldpassword" name="oldpassword" placeholder="Old Password" class="form-control">
                     @error('oldpassword')
                    <span class="text-danger"> 
                    {{$message}}
                    </span>
                    @enderror

                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password" class=" form-control-label">New Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password" name="password"  class="form-control" placeholder="New Password">
                    @error('password')
                    <span class="text-danger"> 
                    {{$message}}
                    </span>
                    @enderror

                </div>
            </div>
            <!-- confirm -->
                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="password_confirmation" class=" form-control-label">Confirm Password</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm Password..." class="form-control">
                      @error('password_confirmation')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror

                </div>
            </div>
                <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Change password
        </button>
    
    </div>
        </form>
    </div>

</div>
                               
                             
                                
                            </div>
 </div>

@endsection     























