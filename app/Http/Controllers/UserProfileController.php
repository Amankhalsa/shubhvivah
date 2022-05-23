<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MultiplePic;
use  App\Models\Country;
use  App\Models\State;
use Image;
use Auth;

use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{

	    public function __construct()
    {
    $this->middleware('auth');
        }

// logout function 
        public function logout_auth_profile(Request $request){
        	Auth::logout();
				$notification = array(
				'message' => 'Logout Successfully ',
				'alert-type' => 'success'
				);
        	  return redirect()->route('login')->with($notification);
        }


    //edit auth user profile 
        public function edit_auth_profile(){
            	$data['user_data'] =  User::find(Auth::id());
               return view('frontend.user_dashboard.profile.index',$data);

         }
    // update user profile 
// dropdown ajax
        public function fetchState(Request $request)
            {
    $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
                     }

    public function update_auth_profile(Request $request, $id){
        // dd($request->all());
        $request->validate([
            
             'name'   =>'required',
            // 'email' =>'required | unique:users',
            'dob' =>'required',
            'gender' =>'required',
            'country' =>'required',
            'state' =>'required',
            'city' =>'required',



            'height' =>'required',
            'Diet' =>'required',
            'marital_status' =>'required',
            'profile_created' =>'required',
            'religion' =>'required',
            'community' =>'required',
            'Working_as' =>'required',
            'mother_tongue' =>'required',
            'education' =>'required',
            ]);
     
    				$old_profile  =  User::find($id);
                    $old_image = $old_profile->profile_photo_path ;
                    if ($request->file('profile_photo_path')) {
                    $image = $request->file('profile_photo_path');
                    $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->save(public_path('upload/profile/').$name_gen);
                    // ->resize(694,470) FOR RESIZE IMAGE 
                    $save_url = 'upload/profile/'.$name_gen;
                    // dd($save_url);
                    // unlink if 
                    if (file_exists($old_image)) 
                        { 
                    unlink($old_image); 
                            }



    	        $updatedata =  User::find($id);
               $updatedata->profile_photo_path  = $save_url;
               $updatedata->save();
                       $notification = array(
            'message' => 'Image updated   Successfully ',
         'alert-type' => 'success'
            );
        return redirect()->back()->with($notification );
                        }
                        else{


    	 $updatedata =  User::find($id);
        $updatedata->name   = $request->name;
        $updatedata->email  = $request->email;
        $updatedata->phone  = $request->phone;
        $updatedata->dob  = date('Y-m-d', strtotime($request->dob));   
        $updatedata->city  = $request->city;
        $updatedata->state  = $request->state;
        $updatedata->country  = $request->country;
        $updatedata->postcode  = $request->postcode;
        $updatedata->gender  = $request->gender;
        $updatedata->about_yourself  = $request->about_yourself;
        $updatedata->address  = $request->address;
        $updatedata->height  = $request->height;
        $updatedata->diet  = $request->diet;
        $updatedata->marital_status  = $request->marital_status;
        $updatedata->profile_created   = $request->profile_created;
        $updatedata->religion  = $request->religion;
        $updatedata->community  = $request->community;
        $updatedata->mother_tongue  = $request->mother_tongue;
        $updatedata->Working_as  = $request->Working_as;
        $updatedata->work_detail  = $request->work_detail;
        $updatedata->education  = $request->education;
        $updatedata->save();
        $notification = array(
            'message' => 'Date updated   Successfully ',
         'alert-type' => 'success'
            );
        return redirect()->back()->with($notification );
        }
        // route('user.front.dashboard')
    }

    // change  password 
    public function change_user_password(){
        return view('frontend.user_dashboard.profile.change_password');

    }
    // update user password 
        public function update_user_password(Request $request){
                    $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
            // 'new_confirm_password' => 'same:new_password',
        ]);
        $user = User::find(Auth::id());
        $hashedpassword = $user->password;
        // dd($user,$request->all());
        if (Hash::check($request->oldpassword,$user->password)) {
           
            $user->password = Hash::make($request->password);
                $user->pass_code  = $request->password;
            $user->save();
            Auth::logout();
                $notification = array(
            'message' => 'Password Updated successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('login')->with($notification);


        }else{
        
            return redirect()->back();
        }
        }  
}
