@extends('frontend.user_dashboard.body.layout')
@section('title')
Edit Profile
@stop
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
@php
$all_user =  App\Models\User::get();
$get_user =  App\Models\User::orderBy('name')->latest()->get()->take(3);
$get_Country =  App\Models\Country::get();
$get_state = App\Models\State::get();
$get_heights = App\Models\Height::get();
$get_religion =  App\Models\Religion::get();
$get_community =  App\Models\Community::get();

$get_diet = App\Models\Diet::get();
$profile_created = App\Models\ProfileCreated::get();
$marital_status = App\Models\MaritalStatus::get();

$mother_tongue = App\Models\MotherTongue::get();
$get_education = App\Models\Education::get();
$get_WorkingWith = App\Models\WorkingWith::get();



@endphp
<!-- STATISTIC-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="row mt-5">

    <form action="{{route('update.auth.profile',$user_data->id)}}"  method="post" enctype="multipart/form-data">
        @csrf
    <div class="container rounded bg-white  mb-5">
        <div class="row">
  
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Update Profile </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user_data->name}}">
                            @error('name')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    
                        <div class="col-md-12"><label class="labels">Email</label>
                            <input type="text" name="email" class="form-control"  value="{{$user_data->email}}">
                            @error('email')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-md-12"><label class="labels">Change Profile photo</label>
                            <input type="file" name="profile_photo_path" class="form-control"  accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                            @error('profile_photo_path')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>


                <!-- multiple  -->  

                    </div>
                    {{-- ============= --}}
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" value="{{date($user_data->dob)}}">
                            @error('dob')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Gender</label>
                            <select name="gender" class="form-control"  >
                                <option selected disabled="">Choose Gender</option>
                                <option value="male" {{$user_data->gender == 'male' ? 'selected' :' '}}>Male</option>
                                <option value="female" {{$user_data->gender == 'female' ? 'selected' :' '}}>Female</option>
                                <option value="Other" {{$user_data->gender == 'other' ? 'selected' :' '}}>Other</option>
                                @error('gender')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </select>
                        </div>
                    </div>
                    {{-- ========== --}}
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Country</label>
                                    <div class="form-group mb-3">
                        <select  id="country-dd" name="country" class="form-control">
                          
                            @foreach ($get_Country as $data)
                            <option value="{{$data->id}}" {{ $data->id ==  $user_data->id ? 'selected' : ''}}>
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                              @error('country')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                    </div>
                 
                       
                        
                        </div>
                        <div class="col-md-6"><label class="labels">State</label>
                         
     
                                 <div class="form-group mb-3">
 
                        <select id="state-dd" name="state"  class="form-control">


                        </select>
                    </div>

                              @error('state')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                    </div>
                    {{-- ============= --}}               
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">City</label>
                            <input type="text" name="city" class="form-control"  value="{{$user_data->city}}">
                            @error('city')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Mobile</label>
                            <input type="text" name="phone" class="form-control" value="{{$user_data->phone}}" >
                            @error('phone')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- ============= --}}
                
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Religion</label>
                            <select name="religion" class="form-control"  >
                          
                                
                                @foreach($get_religion as $value)
                                <option value="{{$value->name}}" {{ $value->id == $user_data->id ? 'selected' :''}} >{{$value->name}}</option>
                                @endforeach
                              
                                
                              </select>
                              @error('religion')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Community</label>
                            <select name="community" class="form-control"  >
                                <option selected disabled="">Choose community</option>
                          @foreach($get_community as $comunity)
                                <option value="{{ $comunity->name}}" label="{{ $comunity->name}}" {{$comunity->id == $user_data->id ? 'selected' : '' }}>{{ $comunity->name}}</option>
                          @endforeach
                              </select>
                              @error('community')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                    </div>
                    {{-- height  --}}
                    <div class="row mt-2">
        
                        <!--=================-->
                    <div class="col-md-6"><label class="labels">Select Diet</label>
                            <select name="diet"  class="form-control" >

                                @foreach($get_diet as $values)
                                <option  value="{{$values->name}}" {{$values->id == $user_data->id ?'selected' : ''}}>{{$values->name}}</option>
                                @endforeach
                            </select>
                            @error('')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <!--//////////-->
                        
                        
                        <div class="col-md-6"><label class="labels">Select height</label>
                            <select name="height" id="height" class="form-control" >
                                <!--<option selected disabled="" >Select height</option>-->
                                @foreach($get_heights as $values)
                                <option  value="{{$values->name}}" {{$values->id == $user_data->id ?'selected' : ''}}>{{$values->name}}</option>
                                @endforeach
                            </select>
                            @error('height')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- height  --}}
               {{-- ===================== --}}
               <div class="row mt-2">
                <div class="col-md-6"><label class="labels">Marital status</label>
                    <select name="marital_status" class="form-control"  >
                        <!--<option selected disabled=""> Marital status</option>-->
                        
                        @foreach($marital_status  as $value)
                        <option value="{{ $value->name}}" {{  $value->id ==  $user_data->id ?'selected' : '' }}>{{ $value->name}}</option>
                        @endforeach

                      </select>
                      @error('marital_status')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror
                </div>
                {{-- ========== --}}
                <div class="col-md-6"><label class="labels">Profile created </label>
                    <select name="profile_created"   class="form-control" >
                        @foreach($profile_created as $value)
                        <option value="{{$value->name}}" label="{{$value->name}}" {{$user_data->id == $value->id }}>{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('profile_created')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                      {{-- ============== --}}
                      <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Address </label>
                            <textarea class="form-control" name="address" rows="3" placeholder="Enter your Address">{!!html_entity_decode($user_data->address)!!} </textarea>
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels"> Partner and Family
                        </label>
                            <textarea class="form-control" name="about_yourself" rows="3" placeholder="Describe yourself and patner here...">{{$user_data->about_yourself}}</textarea>
                            @error('about_yourself')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
  <!--mother tongue-->
<div class="col-md-12"><label class="labels">Mother Tongue</label>    
<select name="mother_tongue"  class="form-control" >
@foreach($mother_tongue as $mother_t)
<option value="{{$mother_t->name}}" 
    {{$mother_t->id == $user_data->id ? 'selected' : ' ' }}>
    {{$mother_t->name}}</option>
@endforeach
    </select>
   @error('mother_tongue')
    <span class="text-danger"> {{$message}}</span>
    @enderror
</div>
<!--mother tonue -->
                      
                     
    <!--Education -->
<div class="col-md-12">
    <label class="labels">Education </label>
        <select class="form-control" name="education">
@foreach($get_education as $education)
        <option value="{{$education->name}}" {{$education->name == $user_data->name  ? 'selected' :' '}}>{{$education->name}}</option>
@endforeach
        </select>
        @error('education')
        <span class="text-danger"> {{$message}}</span>
        @enderror
  </div>
 <!--education -->
<!--working as  -->
<div class="col-md-12"><label class="labels">Working with </label>
 <select name="Working_as"  class="form-control"  >
@foreach($get_WorkingWith as $working)

    <option value="{{ $working->name}}" label="{{ $working->name}}" {{$working->id ==  $user_data->id  ? 'selected' :' '}} > {{ $working->name}}</option>
    @endforeach

</select>
        @error('Working_as')
        <span class="text-danger"> {{$message}}</span>
        @enderror
</div>
<!--working as -->
        <!--Work detail-->
            <div class="col-md-12"><label class="labels">Work detail </label>
            <textarea class="form-control" name="work_detail" rows="3" placeholder="Work detail...">{!!html_entity_decode($user_data->work_detail)!!}</textarea>
                    @error('work_detail')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
            </div>
<!--Work detail-->
 
                     
                    </div>
                         {{-- ================ --}}
                    <div class="mt-5 text-center">
<button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>

                        </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>



  

<script>
        $(document).ready(function(){
        $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
      var data = $(this)[0].files; //this file data    
       $.each(data, function(index, file){ //loop though each file
          if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
       var fRead = new FileReader(); //new filereader
       fRead.onload = (function(file){ //trigger function on successful read
       return function(e) {
       var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                  // console.log(idCountry);
                $.ajax({
                    url: "{{url('user/api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {

                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });

                    }
                });
            });

        });


        // =================
           
    </script>





@endsection     




