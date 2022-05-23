<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use  App\Models\Inquiry;
use  App\Models\MultiplePic;
use Image;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 
class ManageuserController extends Controller
{ 
        //all_user_table
        public function all_user_table(){
            $data['get_users'] =User::latest()->get();
        return view('backend.all_users.index',$data);
    }

    // edit_register_user_profile
    public function view_register_user_profile($id){
        $viewdata['multi_images'] = MultiplePic::where('user_id',$id)->get();

        $viewdata['view_users'] =User::find($id);
        return view('backend.all_users.profile_view',$viewdata);

    }
    // edit_register_user_profile
    public function edit_register_user_profile($id){
        
        $editdata['edit_users'] =User::find($id);
        $editdata['multi_images'] = MultiplePic::where('user_id',$id)->get();

        return view('backend.all_users.edit_profile',$editdata);

    }

    // add_user_by_admin
    public function add_user_by_admin(){
        return view('backend.all_users.add_user');


    }
    // store_user_by_admin
    public function store_user_by_admin(Request $request){
        $request->validate([
            
             'name'   =>'required',
            // 'email' =>'required | unique:users',
            'dob' =>'required',
            'gender' =>'required',
            'country' =>'required',
            'state' =>'required',
            'city' =>'required',
            'phone' =>'required |  numeric | unique:users',
            // 'postcode' =>'required',
            'about_yourself' =>'required',
            'address' =>'required',
            'height' =>'required',
            'Diet' =>'required',
            'marital_status' =>'required',
            'profile_created' =>'required',
            'religion' =>'required',
            'community' =>'required',
            'profile_photo_path' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
            'multi_img' =>'max:5',
            'Working_as' =>'required',
            'mother_tongue' =>'required',
            'education' =>'required',
            ]
        ,[
            'multi_img.max' => 'Maximum 5 photos Acceptable',  
        ]);
     
            if ($request->file('profile_photo_path')) {
                $image = $request->file('profile_photo_path');
                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(200,200)->save(public_path('upload/profile/').$name_gen);
                // ->resize(694,470) FOR RESIZE IMAGE 
                $save_url = 'upload/profile/'.$name_gen;
                    }   
                $add_data = new  User();
                $add_data->name   = $request->name;
                $add_data->email  = $request->email;
                $add_data->reg_code ='SV'.rand(000000,999999);
                $passcode = 'Subh@'.rand(000000,999999);
                $add_data->pass_code  = $passcode;
                $add_data->password  =  Hash::make($passcode);
                $add_data->phone  = $request->phone;
                $add_data->dob  = date('Y-m-d', strtotime($request->dob));   
                $add_data->city  = $request->city;
                $add_data->state  = $request->state;
                $add_data->country  = $request->country;
                $add_data->postcode  = $request->postcode;
                $add_data->gender  = $request->gender;
                $add_data->about_yourself  = $request->about_yourself;
                $add_data->address  = $request->address;
                $add_data->height  = $request->height;
                $add_data->diet  = $request->Diet;
                $add_data->marital_status  = $request->marital_status;
                $add_data->profile_created   = $request->profile_created;
                $add_data->religion  = $request->religion;
                $add_data->profile_photo_path = $save_url;
                $add_data->community  = $request->community;
                $add_data->mother_tongue  = $request->mother_tongue;
                $add_data->Working_as  = $request->Working_as;
                $add_data->work_detail  = $request->work_detail;
            // dd( $add_data);
                $add_data->education  = $request->education;
                $add_data->save();
                $add_data =  $add_data->id;

//================ Multi image store ===================
                if ($request->file('multi_img')) {
                $images = $request->file('multi_img');
                foreach ($images as  $value) {
                    $make_name =hexdec(uniqid()).'.'.$value->getClientOriginalExtension();
                    Image::make($value)->resize(200,200)->save(public_path('upload/profile/multi/').$make_name);
                    // ->resize(917,1000)
                    $uploadpath = 'upload/profile/multi/'.$make_name;
                    $storemulti_img = new MultiplePic();
                    $storemulti_img->user_id = $add_data ;
                    $storemulti_img->photo_name = $uploadpath ;
                    $storemulti_img->created_at = Carbon::now() ;
                    // dd($storemulti_img);
                    $storemulti_img->save();
                }
            }

//================ Multi image store ===================
            $notification = array(
                'message' => 'User Inserted   Successfully ',
             'alert-type' => 'success'
                );
            return redirect()->route('registered.all.user')->with($notification );
    

    }

    // store_profile_by_admin
    public function store_profile_by_admin(Request $request){
   


    }


    // update profile 
    public function update_register_user_profile(Request $request , $id){
        // dd($request->all());
        // $request->validate([
        //     'name'   =>'required',
        //     'email' =>'required ',
        //     'dob' =>'required',
        //     'gender' =>'required',
        //     'country' =>'required',
        //     'state' =>'required',
        //     'city' =>'required',
        //     'phone' =>'required ',
        //     'postcode' =>'required',
        //     'about_yourself' =>'required',
        //     'address' =>'required',
        //     'height' =>'required',
        //     'Diet' =>'required',
        //     'marital_status' =>'required',
        //     'profile_created' =>'required',
        //     'religion' =>'required',
        //     'community' =>'required',
        //     // 'Working_as' =>'required',
        //     // 'mother_tongue' =>'required',
        //     // 'education' =>'required',
        //     ]);
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
        $updatedata->diet  = $request->Diet;
        $updatedata->marital_status  = $request->marital_status;
        $updatedata->profile_created   = $request->profile_created;
        $updatedata->religion  = $request->religion;
        $updatedata->community  = $request->community;
        $updatedata->education  = $request->education;
          $updatedata->mother_tongue  = $request->mother_tongue;
         $updatedata->Working_as  = $request->Working_as;
        $updatedata->work_detail  = $request->work_detail;
    
        $updatedata->save();
        $notification = array(
            'message' => 'Date updated   Successfully ',
         'alert-type' => 'success'
            );
        return redirect()->route('registered.all.user')->with($notification );

    }
    // user profile image updated by admin 
        public function update_register_profile_image(Request $request , $id){
            $request->validate([
                'profile_photo_path' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
                ]);
                $old_profile  =  User::find($id);
                $old_image = $old_profile->profile_photo_path ;
             

                if ($request->file('profile_photo_path')) {
                    $image = $request->file('profile_photo_path');
                    $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(200,200)->save(public_path('upload/profile/').$name_gen);
                    // ->resize(694,470) FOR RESIZE IMAGE 
                    $save_url = 'upload/profile/'.$name_gen;
                    // dd($save_url);
                    // unlink if 
                    if (file_exists($old_image)) 
                        { 
                    unlink($old_image); 
                            }
                        }


                $updateprofile =  User::find($id);
                $updateprofile->profile_photo_path  = $save_url;

                $updateprofile->save();
                $notification = array(
                    'message' => 'Profile updated   Successfully ',
                 'alert-type' => 'success'
                    );
                return redirect()->route('registered.all.user')->with($notification );
        
        }


        // del_user_by_admin
        public function del_user_by_admin($id){
            $get_profile =  User::find($id); 
            $old_image =  $get_profile->profile_photo_path;
            if (file_exists($old_image)) 
                { 
                // dd($old_image);
                unlink($old_image); 
                }
        $del_profile =  User::find($id);
        $del_profile->delete();
    // delete multiple images  

        $multi_imgs = MultiplePic::where('user_id',$id)->get();
        foreach ($multi_imgs as  $img) {
            if (file_exists($img->photo_name)) {
                    unlink($img->photo_name);
                }
                MultiplePic::where('user_id',$id)->delete();
                        // dd($img->photo_name);
             } 
    // delete multiple images 

            $notification = array(
             'message' => 'Profile Deleted  Successfully ',
             'alert-type' => 'error'
                );
            return redirect()->back()->with( $notification);
        }
        // update multiple images 
            public function multi_image_update(Request $request ){

            $multi_img = $request->multi_img;
            foreach ($multi_img as $id => $img) {
                    // =============== image unlink ============
                    $img_del = MultiplePic::find($id);
                        if (file_exists($img_del->photo_name)) 
                        { 
                        unlink($img_del->photo_name); 
                        }
                    // =============== image unlink ============
        $name_gen =hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(200,200)->save(public_path('upload/profile/multi/').$name_gen);
        $upload_path = 'upload/profile/multi/'.$name_gen;
                // object method 
                $image_update   = MultiplePic::find($id);
                $image_update->photo_name = $upload_path;
                $image_update->save();
                // object method 

                }   // end foreach 

                $notification = array(
                    'message' => 'Image updated  successfully',
                    'alert-type' => 'info'
                );
            return redirect()->back()->with($notification); 
  }
  // delete from multiple image 
      public function multi_image_delete($id){

            $old_multi_img = MultiplePic::find($id);
            if (file_exists($old_multi_img->photo_name)) {
                unlink($old_multi_img->photo_name);
            
            }
            // end if condition 
            $multi_img = MultiplePic::find($id)->delete();
                $notification = array(
        'message' => ' Image  deleted successfully',
        'alert-type' => 'error'
    );
        return redirect()->back()->with($notification); 
    

    }
}
