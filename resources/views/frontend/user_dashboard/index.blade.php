@extends('frontend.user_dashboard.body.layout')
@section('title')
User dashboard
@stop
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
<!-- STATISTIC-->
<div class="row">
<!-- table data -->
    <div class="col-md-6">
        <!-- Address -->
        <div class="card border border-primary">
            <div class="card-header">
                <strong class="card-title">Bio</strong>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {!!html_entity_decode(Auth::user()->address)!!}  
                </p>
            </div>
        </div>
        <!-- Address -->
        <!-- About -->
                    <div class="card border border-primary">
                <div class="card-header">
                    <strong class="card-title">About</strong>
                </div>
                <div class="card-body">
                    <p class="card-text">
                @if(Auth::user()->about_yourself) 
                 {!!html_entity_decode(Auth::user()->about_yourself)!!}
                @else      
                <span class="badge badge-pill badge-warning">NA</span>
                @endif
                    </p>
                </div>
                </div>
                <!-- About -->
                        <!-- About -->
                    <div class="card border border-primary">
                <div class="card-header">
                    <strong class="card-title">Education </strong>
                </div>
                <div class="card-body">
                    <p class="card-text">
                @if(Auth::user()->education) 
                 {!!html_entity_decode(Auth::user()->education)!!}
                @else      
                <span class="badge badge-pill badge-warning">NA</span>
                @endif
                    </p>
                 
                </div>
                </div>
                <!-- About -->
</div>
<div class="col-md-6">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
            <tr>
                <th>Title</th>
                <th>description</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td> Diet</td>
                <td>

                 @if(Auth::user()->Diet) {{Auth::user()->Diet}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif
                </td>
        </tr>
               <tr>
                <td> Gender</td>
                <td>
                     @if(Auth::user()->gender) {{Auth::user()->gender}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif
                </td>
        </tr>
        <tr>
            <td>AGE</td>
            <td>{{ \Carbon\Carbon::parse(Auth::user()->dob)->diff(\Carbon\Carbon::now())->format('%y years') }}</td>
        </tr>
        <tr>
            <td>Marital status   </td>
            <td> {{Auth::user()->marital_status}}</td>

        </tr>
        <tr>
            <td>Height </td>
            <td>  @if(Auth::user()->height) {{Auth::user()->height}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif
  </td>

        </tr>
        <!-- RELIGION  -->
         <tr>
            <td> Religion</td>
            <td> @if(Auth::user()->religion) {{Auth::user()->religion}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif</td>
        </tr>
        <!-- COMUNITY  -->
      <tr>
            <td>  Community  </td>
            <td>  @if(Auth::user()->community) {{Auth::user()->community}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif</td>
        </tr>
        <!-- PHONE  -->
         <tr>
            <td>  Phone  </td>
            <td>  @if(Auth::user()->phone) {{Auth::user()->phone}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif</td>
        </tr>

        <!-- ------------------- -->
              <tr>
            <td>  Working as  </td>
            <td>  @if(Auth::user()->Working_as) {{Auth::user()->Working_as}}
     @else      
     <span class="badge badge-pill badge-warning">NA</span>
      @endif</td>
        </tr>
        <!-- ------------ -->
   
  <!-- profile_created -->
    <tr>
        <td>  Profile Created  </td>
        <td>  @if(Auth::user()->profile_created) {{Auth::user()->profile_created}}
        @else      
        <span class="badge badge-pill badge-warning">NA</span>
        @endif</td>
    </tr>
          

                            

                        </tbody>
                    </table>
                </div>
                                <!-- END DATA TABLE-->
                            </div>
            </div>

<!-- END STATISTIC-->   
@endsection     

