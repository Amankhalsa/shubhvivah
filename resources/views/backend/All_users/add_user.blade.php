@extends('backend.layouts.admin_master')

@section('title')
Add new user 
@endsection

@section('content')
@php
$get_Country =  App\Models\Country::get();
$get_state =  App\Models\State::get();
@endphp
{{-- Row start  --}}
<div class="row">
    <form action="{{route('store.new.user.byadmin')}}"  method="post" enctype="multipart/form-data">
        @csrf
    <div class="container rounded bg-white  mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
              {{-- <form action="{{route('store.profile.user.byadmin')}}" method="post" > --}}
                {{-- @csrf --}}
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" id="output" src="{{ asset('upload/no_image.jpg')}}">
                  
                </div>
                
                      @error('email')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror

                      
                {{-- </form> --}}
            </div>
            <div class="col-md-5 border-right">
              
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Add new  Profile </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input type="text" name="name" class="form-control" >
                            @error('name')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    
                        <div class="col-md-12"><label class="labels">Email</label>
                            <input type="text" name="email" class="form-control"  >
                            @error('email')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" >
                            @error('dob')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Gender</label>
                            <select name="gender" class="form-control"  >
                                <option selected disabled="">Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="Other">Other</option>
                                @error('gender')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </select>
                        </div>
                    </div>
                    {{-- ========== --}}
                   
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Country</label>
                            <select name="country" class="form-control"  >
                                <option selected disabled="">Choose Country</option>
                                @foreach( $get_Country as $values)
                                <option value="{{  $values->name}}">{{  $values->name}}</option>
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
                                <option value="{{  $values->name}}" >{{  $values->name}}</option>
                                @endforeach
                              </select>
                              @error('state')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                    </div>
               
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">City</label>
                            <input type="text" name="city" class="form-control">
                            @error('city')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Mobile</label>
                            <input type="text" name="phone" class="form-control"  >
                            @error('phone')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- ============= --}}
                
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Religion</label>
                            <select name="religion" class="form-control"  >
                                <option selected disabled="">Choose Religion</option>
                                <option value="Sikh" label="Sikh">Sikh</option>
                                <option value="Hindu" label="Hindu">Hindu</option>
                                <option value="Other" label="Other">Other</option>
                              </select>
                              @error('religion')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Community</label>
                            <select name="community" class="form-control"  >
                                <option selected disabled="">Choose community</option>
                                <option value="Sikh" label="Sikh">Sikh</option>
                                <option value="Hindu" label="Hindu">Hindu</option>
                                <option value="Other" label="Other">Other</option>
                                <option value="jatt" >   Jatt </option>
                                <option value="Ad-Dharmi" >  Ad-Dharmi   </option>
                                <option value="Saini" >Saini</option>
                                <option value="Rajput" > Rajput  </option>
                                <option value="Ahluwalia" > Ahluwalia   </option>
                                <option value="Arora" >  Arora  </option>
                                <option value="Khatri" >  Khatri   </option>
                                <option value=" Ramgarhia" > Ramgarhia </option>
                                <option value="Other" label="Other">Other</option>
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
                                <option selected disabled="">Choose diet </option>
                                <option value="veg" label="veg" selected>veg</option>
                                <option value="Non-veg" label="Non-veg">Non-veg</option>
                    
                                <option value="Eggetarian" label="Eggetarian">Eggetarian</option>
                                <option value="Jain" label="Jain">Jain</option>
                                <option value="Vegan" label="Vegan">Vegan</option>
                                <option value="Other" label="Other">Other</option>
                              </select>
                              @error('Diet')
                              <span class="text-danger"> {{$message}}</span>
                              @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Select height</label>
                            <select name="height" id="height" class="form-control" >
                                <option selected disabled="" >Select height</option>
                                <option  value="4ft 5in - 134cm" label="4ft 5in - 134cm">4ft 5in - 134cm</option>
                                <option  value="4ft 6in - 137cm" label="4ft 6in - 137cm">4ft 6in - 137cm</option>
                                <option  value="4ft 7in - 139cm" label="4ft 7in - 139cm">4ft 7in - 139cm</option>
                                <option  value="4ft 8in - 142cm" label="4ft 8in - 142cm">4ft 8in - 142cm</option>
                                <option  value="4ft 9in - 144cm" label="4ft 9in - 144cm">4ft 9in - 144cm</option>
                                <option  value="4ft 10in - 147cm" label="4ft 10in - 147cm">4ft 10in - 147cm</option>
                                <option  value="4ft 11in - 149cm" label="4ft 11in - 149cm">4ft 11in - 149cm</option>
                                <option  value="5ft - 152cm 5ft" label="5ft - 152cm">5ft - 152cm</option>
                                <option  value="5ft 1in - 154cm" label="5ft 1in - 154cm">5ft 1in - 154cm</option>
                                <option  value="5ft 2in - 157cm" label="5ft 2in - 157cm">5ft 2in - 157cm</option>
                                <option  value="5ft 3in - 160cm" label="5ft 3in - 160cm">5ft 3in - 160cm</option>
                                <option  value="5ft 4in - 162cm" label="5ft 4in - 162cm">5ft 4in - 162cm</option>
                                <option  value="5ft 5in - 165cm" label="5ft 5in - 165cm">5ft 5in - 165cm</option>
                                <option  value="5ft 6in - 167cm" label="5ft 6in - 167cm">5ft 6in - 167cm</option>
                                <option  value="5ft 7in - 170cm" label="5ft 7in - 170cm">5ft 7in - 170cm</option>
                                <option  value="5ft 8in - 172cm" label="5ft 8in - 172cm" selected="selected">5ft 8in - 172cm</option>
                                <option  value="5ft 9in - 175cm" label="5ft 9in - 175cm">5ft 9in - 175cm</option>
                                <option  value="5ft 10in - 177cm" label="5ft 10in - 177cm">5ft 10in - 177cm</option>
                                <option  value="5ft 11in - 180cm" label="5ft 11in - 180cm">5ft 11in - 180cm</option>
                                <option  value="6ft - 182cm 6ft" label="6ft - 182cm">6ft - 182cm</option>
                                <option  value="6ft 1in - 185cm" label="6ft 1in - 185cm">6ft 1in - 185cm</option>
                                <option  value="6ft 2in - 187cm" label="6ft 2in - 187cm">6ft 2in - 187cm</option>
                                <option  value="6ft 3in - 190cm" label="6ft 3in - 190cm">6ft 3in - 190cm</option>
                                <option  value="6ft 4in - 193cm" label="6ft 4in - 193cm">6ft 4in - 193cm</option>
                                <option  value="6ft 5in - 195cm" label="6ft 5in - 195cm">6ft 5in - 195cm</option>
                                <option  value="6ft 6in - 198cm" label="6ft 6in - 198cm">6ft 6in - 198cm</option>
                                <option  value="6ft 7in - 200cm" label="6ft 7in - 200cm">6ft 7in - 200cm</option>
                                <option  value="6ft 8in - 203cm" label="6ft 8in - 203cm">6ft 8in - 203cm</option>
                                <option  value="6ft 9in - 205cm" label="6ft 9in - 205cm">6ft 9in - 205cm</option>
                                <option  value="6ft 10in - 208cm" label="6ft 10in - 208cm">6ft 10in - 208cm</option>
                                <option  value="6ft 11in - 210cm" label="6ft 11in - 210cm">6ft 11in - 210cm</option>
                                <option  value="7ft - 213cm 7ft" label="7ft - 213cm">7ft - 213cm</option>
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
                        <option value="Never Married" label="Never Married">Never Married</option>
                        <option value="Divorced" label="Divorced">Divorced</option>
                        <option value="Awaiting Divorce" label="Awaiting Divorce">Awaiting Divorce</option>
                        <option value="Other" label="Other">Other</option>

                      </select>
                      @error('marital_status')
                      <span class="text-danger"> {{$message}}</span>
                      @enderror
                </div>
                {{-- ========== --}}
                <div class="col-md-6"><label class="labels">Profile created </label>
                    <select name="profile_created"   class="form-control" >
                        <option value="Self" label="Self" selected="selected">Self</option>
                        <option value="Parent / Guardian" label="Parent / Guardian">Parent / Guardian</option>
                        <option value="Sibling" label="Sibling">Sibling</option>
                        <option value="Friend" label="Friend">Friend</option>
                        <option value="Other" label="Other">Other</option>
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
                        <div class="col-md-12"><label class="labels">Address </label>
                            <textarea class="form-control" name="address" rows="3">	</textarea>
                            @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels"> Partner and Family
                        </label>
                            <textarea class="form-control" name="about_yourself" rows="3"> 	</textarea>
                            @error('about_yourself')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">Postcode</label>
                            <input type="text" class="form-control" name="postcode">
                            @error('postcode')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">Education </label>
                            <textarea class="form-control" name="education" rows="3"> 	</textarea>
                            @error('education')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
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


{{-- Row end  --}}






@endsection
