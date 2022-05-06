@extends('backend.layouts.admin_master')
  
@section('title')
Change Password
@endsection
  
@section('content')   
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong>Change Admin </strong>password
            </div>
            <div class="card-body card-block">
                <form action="{{route('admin.password.update')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class=" form-control-label">Old Password </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password"  name="oldpassword" placeholder="Enter old password" class="form-control">

                            @error('oldpassword')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password" class="form-control-label">New Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password"  name="password" placeholder="Enter New Password..." class="form-control">
                            @error('password')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="hf-password" class=" form-control-label">Confirm Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password " class="form-control">
                            @error('password')
                            <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        
                    </div>
                </form>
            </div>
          
        </div>
     
    </div>
</div>
        
@endsection
