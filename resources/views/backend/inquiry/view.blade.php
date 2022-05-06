@extends('backend.layouts.admin_master')

@section('title')
View inquiry
@endsection
<!--data table -->

@section('content')
<a href="{{route('inquiry.all.user')}}">
<button type="button" class="btn btn-success btn-sm">Back</button></a>
<div class="row">
<div class="col-md-12">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    {{-- <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/icon/avatar-01.jpg">
                    </a> --}}
                    <div class="media-body">
                        <h2 class="text-light display-6">Name :{{ucwords($view_inquiry->name)}}</h2>
                      
                    </div>
                </div>
            </div>


            <ul class="list-group list-group-flush  font-weight-bold">
                <table width="50%"> 
                    
         
                    <tr>
                            <td>
                                <li class="list-group-item">
                                    Phone Number:  <a href="#">
                                  
                                      
                                    </a>
                                </li>
                            </td>
                            <td> {{$view_inquiry->phone}}</td>
                        </tr>
                <tr>
                    <td>
                        <li class="list-group-item  font-weight-bold">
                            Email:  <a href="#">
                        
                             
                            </a>
                        </li>
                    </td>
                    <td>
                        {{$view_inquiry->email}}
                    </td>
                </tr>
              <tr>
                  <td>    <li class="list-group-item  font-weight-bold">
                    Seeking	for :
                    <a href="#">
                       
                  
                    </a>
                </li></td>
                  <td>   {{$view_inquiry->Seeking}}</td>
              </tr>
             
            </table>
                <li class="list-group-item">
                    Message :
                  <span class="text-success font-weight-bold">
                        <i class="fa fa-comments-o"></i> 
                         {!!html_entity_decode($view_inquiry->message)!!}	
                    </span>
                    
                </li>
            </ul>

        </section>
    </aside>
</div>

</div>
@endsection
