<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
       // view profile
       public function admin_view_profile(){
        return view('backend.profile.index');
    }

    // / edit admin profile info 
    public function admin_edit_profile(){
        if(Auth::guard('admin')){
            
            $user['edit_profile'] =Admin::find(Auth::guard('admin')->id());
            if($user){
                return view('backend.profile.edit' ,$user);
            }
        }
       
  
    }





    // admin_update_profile
    public function admin_update_profile(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'profile_photo_path' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            
            ]);
            $user =Admin::find(Auth::guard('admin')->id());
            $old_profile = $user->profile_photo_path;

            if($request->file('profile_photo_path')){
                $profile_img =  $request->file('profile_photo_path');
                $name_gen = hexdec(uniqid()).'.'.$profile_img->getClientOriginalExtension();
                Image::make($profile_img)->fit(100,100)->save(public_path('backend/images/profile/'.$name_gen));
                $save_url = 'backend/images/profile/'.$name_gen;
                 if(file_exists( $old_profile)){
                unlink( $old_profile);  
                }
                $user =Admin::find(Auth::guard('admin')->id());
                if($user){
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->profile_photo_path = $save_url;
                    $user->save();
                    $notification = array(
                        'message' => ' Profile image updated  ',
                        'alert-type' => 'info'
                        );
                    return redirect()->route('view.profile')->with($notification );
                }
              }else {
                $user =Admin::find(Auth::id());
                if($user){
                    $user->name = $request->name;
                    $user->email = $request->email;
               
                    $user->save();
                    $notification = array(
                        'message' => ' Profile data updated ',
                        'alert-type' => 'success'
                        );
                    return redirect()->route('view.profile')->with($notification );
                }
              }
            
        }

            // change password  change_password
    public function change_password(){
        return view('backend.profile.change_password');

    }

    // update_admin_password
    public function update_admin_password(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
            // 'new_confirm_password' => 'same:new_password',
        ]);
        if(Auth::guard('admin')){
            
            $user =Admin::find(Auth::guard('admin')->id());
            $hashedpassword = $user->password;
            // dd($user,$request->all());
            if (Hash::check($request->oldpassword,$user->password)) {
               
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                    $notification = array(
                'message' => 'Password Updated successfully',
                'alert-type' => 'info'
            );
                return redirect()->route('login_from')->with($notification);
    
    
            }else{
            
                return redirect()->back();
            }
        }
    }
}
