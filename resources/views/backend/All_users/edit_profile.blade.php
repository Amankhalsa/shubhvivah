@extends('backend.layouts.admin_master')

@section('title')
Edit-update Profile
@endsection

@section('content')
@php

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
{{-- Row start  --}}
<div class="row">
    <div class="container rounded bg-white  mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
              <form action="{{route('update.register.user_profile' ,$edit_users->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" id="output" src="{{(!empty($edit_users->profile_photo_path)) ? asset($edit_users->profile_photo_path):url('upload/no_image.jpg')}}">
                    <span class="font-weight-bold">{{$edit_users->name}}</span>
                    <span class="text-black-50">{{$edit_users->email}}</span><span> </span></div>
                    <div class="form-group">
                        <input name="profile_photo_path" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                      </div>
                      <div class="form-group">
                    <input class="btn btn-primary profile-button" type="submit"  value="Update Profile "> 
                      </div>
                </form>
            </div>
            <div class="col-md-5 border-right">
                <form action="{{route('update.register.user',$edit_users->id)}}"  method="post">
                    @csrf
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Update Profile </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$edit_users->name}}">
                            @error('name')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    
                        <div class="col-md-12"><label class="labels">Email</label>
                            <input type="text" name="email" class="form-control" value="{{$edit_users->email}}" >
                            @error('email')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" value="{{date($edit_users->dob)}}">
                            @error('dob')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Gender</label>
                            <select name="gender" class="form-control"  >
                                <option selected disabled="">Choose Gender</option>
                                <option value="male" {{($edit_users['gender']=='male')?'selected':''}}>Male</option>
                                <option value="female" {{($edit_users['gender']=='female')?'selected':''}}>Female</option>
                                <option value="Other" {{($edit_users['gender']=='Other')?'selected':''}}>Other</option>
                                @error('gender')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </select>
                        </div>
                    </div>
                    {{-- ========== --}}
                    @php
                    $get_Country =  App\Models\Country::get();
                    $get_state =  App\Models\State::get();

                    @endphp
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Country</label>
                            <select name="country" class="form-control"  >
                                <option selected disabled="">Choose Country</option>
                                @foreach( $get_Country as $values)
                                <option value="{{  $values->name}}" {{ ($values->id == $edit_users->id)? 'selected': ''}} >{{  $values->name}}</option>
                                @endforeach
                              </select>
                              @error('country')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">State</label>
                            <select name="state" class="form-control"  >
                                <option selected disabled="">Choose State</option>
                                @foreach( $get_state as $values)
                                <option value="{{  $values->name}}" {{ ($values->id == $edit_users->id)? 'selected': ''}} >{{  $values->name}}</option>
                                @endforeach
                              </select>
                              @error('state')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                    </div>
               
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">City</label>
                            <input type="text" name="city" class="form-control" value="{{$edit_users->city}}">
                            @error('city')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Mobile</label>
                            <input type="text" name="phone" class="form-control" value="{{$edit_users->phone}}" >
                            @error('phone')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- ============= --}}
                
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Religion</label>
                            <select name="religion" class="form-control"  >
                                
                                @foreach($get_religion as $rel)
                                <option value="{{$rel->name}}"   {{$edit_users->id ==  $rel->id ? 'selected': '' }} >{{$rel->name}}</option>
                                @endforeach
                                
                              </select>
                              @error('religion')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Community</label>
                            <select name="community" class="form-control"  >
                                <option selected disabled="">Choose community</option>
                                    @foreach($get_community  as $value)
                                <option value="{{$value->name}}"  {{$edit_users->id ==  $value->id ? 'selected': '' }}

                                    >{{$value->name}}</option>
                                    @endforeach
                              </select>
                              @error('community')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                    </div>
                    {{-- height  --}}
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Diet </label>
                            <select name="Diet" class="form-control"  >

                                @foreach($get_diet  as $diet)
                                <option value="{{$diet->name}}"   {{$edit_users->id == $diet->id ? 'selected': '' }}>{{$diet->name}}</option>
                                @endforeach
                              </select>
                              @error('Diet')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Select height</label>
                            <select name="height" id="height" class="form-control" >
                                <option selected disabled="" >Select height</option>
                                @foreach($get_heights as $height)
                                <option  value="{{$height->name}}"   {{$edit_users->id == $height->id ? 'selected': '' }}>{{$height->name}}</option>
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
                        <option selected disabled=""> Marital status</option>

                        @foreach($marital_status  as $stvalue)
                      
                          
                        <option value="{{$stvalue->name}}"  {{$edit_users->id ==  $stvalue->id ? 'selected': '' }}> {{$stvalue->name}}</option>
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
                        <option value="{{$value->name}}"   {{$edit_users->id ==  $value->id ? 'selected': '' }} >{{$value->name}}</option>
                        @endforeach
                    </select>
                    @error('profile_created')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                      {{-- ============== --}}
                      <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Bio </label>
                            <textarea class="form-control" name="address" rows="3"> {!!html_entity_decode($edit_users->address)!!}	</textarea>
                            @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels"> Partner and Family
                        </label>
                            <textarea class="form-control" name="about_yourself" rows="3"> {!!html_entity_decode($edit_users->about_yourself)!!}	</textarea>
                            @error('about_yourself')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    
                        <!--  <div class="col-md-12"><label class="labels">Mother Tongue</label>-->
                        <!--    <input type="text" class="form-control" name="mother_tongue" value="{{$edit_users->mother_tongue}}">-->
                        <!--    @error('mother_tongue')-->
                        <!--    <span class="text-danger"> {{$message}}</span>-->
                        <!--    @enderror-->
                        <!--</div>-->

<!--Mother Tongue-->
        <div class="col-md-12"><label class="labels">Mother Tongue</label>    
            <select name="mother_tongue"  class="form-control" >

            @foreach($mother_tongue as $value)
            <option value="{{$value->name}}"  {{$edit_users->id == $value->id ? 'selected': '' }}>{{$value->name}}</option>
            @endforeach
            </select>
                       @error('mother_tongue')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
        </div>

 <!--mother tounge-->
<!--Education-->
<!--<div class="col-md-12">-->
<!--    <label class="labels">Education </label>-->
<!--        <select class="form-control" name="education">-->

<!--        @foreach($get_education  as $eduvalue)-->
<!--        <option value="{{$eduvalue->name}}" {{$eduvalue->id == $edit_users->id ? 'selected' : '' }}>{{$eduvalue->name}}</option>-->
<!--        @endforeach-->
<!--        </select>-->
<!--        @error('education')-->
<!--        <span class="text-danger"> {{$message}}</span>-->
<!--        @enderror-->
<!--  </div>-->

div class="col-md-12">
    <label class="labels">Education </label><span class="text-danger">*</span>
<select class="form-control" name="education">
    <option selected="selected"  disabled="">Select</option>
    <optgroup id="educationlevel-optgroup--ENGINEERING-" label="-ENGINEERING-">
    </optgroup>
    <option value="B.E / B.Tech" label="B.E / B.Tech">B.E / B.Tech</option>
    <option value="M.E / M.Tech" label="M.E / M.Tech">M.E / M.Tech</option>
    <option value="M.S Engineering" label="M.S Engineering">M.S Engineering</option>
    <option value="B.Eng (Hons)" label="B.Eng (Hons)">B.Eng (Hons)</option>
    <option value="M.Eng (Hons)" label="M.Eng (Hons)">M.Eng (Hons)</option>
    <option value="Engineering Diploma" label="Engineering Diploma">Engineering Diploma</option>
    <option value="AE" label="AE">AE</option>
    <option value="AET" label="AET">AET</option>
    <optgroup id="educationlevel-optgroup--ARTS / DESIGN-" label="-ARTS / DESIGN-">
    </optgroup>
    <option value="B.A" label="B.A">B.A</option>
    <option value="B.Ed" label="B.Ed">B.Ed</option>
    <option value="BJMC" label="BJMC">BJMC</option>
    <option value="BFA" label="BFA">BFA</option>
    <option value="B.Arch" label="B.Arch">B.Arch</option>
    <option value="B.Des" label="B.Des">B.Des</option>
    <option value="BMM" label="BMM">BMM</option>
    <option value="MFA" label="MFA">MFA</option>
    <option value="M.Ed" label="M.Ed">M.Ed</option>
    <option value="M.A" label="M.A">M.A</option>
    <option value="MSW" label="MSW">MSW</option>
    <option value="MJMC" label="MJMC">MJMC</option>
    <option value="M.Arch" label="M.Arch">M.Arch</option>
    <option value="M.Des" label="M.Des">M.Des</option>
    <option value="BA (Hons)" label="BA (Hons)">BA (Hons)</option>
    <option value="B.Arch (Hons)" label="B.Arch (Hons)">B.Arch (Hons)</option>
    <option value="DFA" label="DFA">DFA</option>
    <option value="D.Ed" label="D.Ed">D.Ed</option>
    <option value="D.Arch" label="D.Arch">D.Arch</option>
    <option value="AA" label="AA">AA</option>
    <option value="AFA" label="AFA">AFA</option>
    <optgroup id="educationlevel-optgroup--FINANCE / COMMERCE-" label="-FINANCE / COMMERCE-">
    </optgroup>
    <option value="B.Com" label="B.Com">B.Com</option>
    <option value="CA / CPA" label="CA / CPA">CA / CPA</option>
    <option value="CFA" label="CFA">CFA</option>
    <option value="CS" label="CS">CS</option>
    <option value="BSc / BFin" label="BSc / BFin">BSc / BFin</option>
    <option value="M.Com" label="M.Com">M.Com</option>
    <option value="MSc / MFin / MS" label="MSc / MFin / MS">MSc / MFin / MS</option>
    <option value="BCom (Hons)" label="BCom (Hons)">BCom (Hons)</option>
    <option value="PGD Finance" label="PGD Finance">PGD Finance</option>
    <optgroup id="educationlevel-optgroup--COMPUTERS / IT-" label="-COMPUTERS / IT-">
    </optgroup>
    <option value="BCA" label="BCA">BCA</option>
    <option value="B.IT" label="B.IT">B.IT</option>
    <option value="BCS" label="BCS">BCS</option>
    <option value="BA Computer Science" label="BA Computer Science">BA Computer Science</option>
    <option value="MCA" label="MCA">MCA</option>
    <option value="PGDCA" label="PGDCA">PGDCA</option>
    <option value="IT Diploma" label="IT Diploma">IT Diploma</option>
    <option value="ADIT" label="ADIT">ADIT</option>
    <optgroup id="educationlevel-optgroup--SCIENCE-" label="-SCIENCE-">
    </optgroup>
    <option value="B.Sc" label="B.Sc">B.Sc</option>
    <option value="M.Sc" label="M.Sc">M.Sc</option>
    <option value="BSc (Hons)" label="BSc (Hons)">BSc (Hons)</option>
    <option value="DipSc" label="DipSc">DipSc</option>
    <option value="AS" label="AS">AS</option>
    <option value="AAS" label="AAS">AAS</option>
    <optgroup id="educationlevel-optgroup--MEDICINE-" label="-MEDICINE-">
    </optgroup>
    <option value="MBBS" label="MBBS">MBBS</option>
    <option value="BDS" label="BDS">BDS</option>
    <option value="BPT" label="BPT">BPT</option>
    <option value="BAMS" label="BAMS">BAMS</option>
    <option value="BHMS" label="BHMS">BHMS</option>
    <option value="B.Pharma" label="B.Pharma">B.Pharma</option>
    <option value="BVSc" label="BVSc">BVSc</option>
    <option value="BSN / BScN" label="BSN / BScN">BSN / BScN</option>
    <option value="MDS" label="MDS">MDS</option>
    <option value="MCh" label="MCh">MCh</option>
    <option value="M.D" label="M.D">M.D</option>
    <option value="M.S Medicine" label="M.S Medicine">M.S Medicine</option>
    <option value="MPT" label="MPT">MPT</option>
    <option value="DM" label="DM">DM</option>
    <option value="M.Pharma" label="M.Pharma">M.Pharma</option>
    <option value="MVSc" label="MVSc">MVSc</option>
    <option value="MMed" label="MMed">MMed</option>
    <option value="PGD Medicine" label="PGD Medicine">PGD Medicine</option>
    <option value="ADN" label="ADN">ADN</option>
    <optgroup id="educationlevel-optgroup--MANAGEMENT-" label="-MANAGEMENT-">
    </optgroup>
    <option value="BBA" label="BBA">BBA</option>
    <option value="BHM" label="BHM">BHM</option>
    <option value="BBM" label="BBM">BBM</option>
    <option value="MBA" label="MBA">MBA</option>
    <option value="PGDM" label="PGDM">PGDM</option>
    <option value="ABA" label="ABA">ABA</option>
    <option value="ADBus" label="ADBus">ADBus</option>
    <optgroup id="educationlevel-optgroup--LAW-" label="-LAW-">
    </optgroup>
    <option value="BL / LLB" label="BL / LLB">BL / LLB</option>
    <option value="ML / LLM" label="ML / LLM">ML / LLM</option>
    <option value="LLB (Hons)" label="LLB (Hons)">LLB (Hons)</option>
    <option value="ALA" label="ALA">ALA</option>
    <optgroup id="educationlevel-optgroup--DOCTORATE-" label="-DOCTORATE-">
    </optgroup>
    <option value="Ph.D" label="Ph.D">Ph.D</option>
    <option value="M.Phil" label="M.Phil">M.Phil</option>
    <optgroup id="educationlevel-optgroup--OTHERS-" label="-OTHERS-">
    </optgroup>
    <option value="Bachelor" label="Bachelor" >Bachelor</option>
    <option value="Master" label="Master">Master</option>
    <option value="Diploma" label="Diploma">Diploma</option>
    <option value="Honours" label="Honours">Honours</option>
    <option value="Doctorate" label="Doctorate">Doctorate</option>
    <option value="Associate" label="Associate">Associate</option>
    <optgroup id="educationlevel-optgroup--NON-GRADUATE-" label="-NON-GRADUATE-">
    </optgroup>
    <option value="High school" label="High school">High school</option>
    <option value="Less than high school" label="Less than high school">Less than high school</option>
</select>
</div>
  <!--Education-->
                        
<!--working as  -->
<div class="col-md-12"><label class="labels">Working with </label>
 <select name="Working_as"  class="form-control"  >

    @foreach($get_WorkingWith as $working_val)
    <option value="{{$working_val->name}}" {{$working_val->id == $edit_users->id ? 'selected' : ''}} >{{$working_val->name}}</option>
    @endforeach
</select>
        @error('Working_as')
        <span class="text-danger"> {{$message}}</span>
        @enderror
</div>
<!--working as -->
        <!--Work detail-->
            <div class="col-md-12"><label class="labels">Work detail </label>
            <textarea class="form-control" name="work_detail" rows="3" placeholder="Work detail..."></textarea>
                    @error('work_detail')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
            </div>
<!--Work detail-->         
                 
        </div>
                         {{-- ================ --}}
            <div class="mt-5 text-center">
            <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
            </div>

                        </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>


{{-- Row end  --}}

<section class="content px-5"> 
    <div class="row"> 
        <div class="col-md-12">
                <div class="box bt-3 border-info">
                  <div class="box-header">
                    <h4 class="box-title"> Multiple </h4>
                  </div>
<form method="post" action="{{route('update.product.image')}}" enctype="multipart/form-data">
    @csrf

    <div class="row row-sm">
        @foreach($multi_images as $img)
        <div class="col-md-3">
            <div class="card" >
  <img src="{{asset($img->photo_name)}}" class="card-img-top" height="130" width="280">
  <div class="card-body">
    <h5 class="card-title">
        <a href="{{route('del.product.image',$img->id)}}" class="btn btn-sm btn btn-danger" id="delete" title="delete data"> <i class="fa fa-trash"></i></a>
    </h5>
    <p class="card-text">
        <!-- start form group  -->
        <div class="form-group">
            <label class="form-control-level">
                Change image <span class="text-danger">*</span>
            </label>
        <input type="file" name="multi_img[{{$img->id}}]" class="form-control" multiple="" id="multiImg"  >
                @error('multi_img') 
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <!-- end form group  -->
    </p>

  </div>
</div>
        </div> <!-- end col md 3 -->
        @endforeach
    </div>
            <div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
         </div>
<br><br>
</form>
                </div>
              </div>

    </div>  <!--  end row -->
</section>


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



@endsection
