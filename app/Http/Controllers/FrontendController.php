<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Inquiry;

class FrontendController extends Controller
{
    //front end 
    public function front_Index(){
        return view('frontend.index');
    }
    // about 
    public function front_about_us(){
        return view('frontend.about');

    }
    // testimonials
    public function front_testimonials(){
        return view('frontend.testimonials');
        
    }
    // front_package
    public function front_package(){
        return view('frontend.package');
    }
    // front_contact
    public function front_contact(){
        return view('frontend.contact');
    }
      // all_inquiry_table
      public function store_inquiry(Request $request ){
        $request->validate([
            'name' =>'required',
            'phone' =>'required|numeric',
            'email' =>'required|email',
            'Seeking' =>'required',
            'message' =>'required',

          
      
        ]);
                    $post_inq = new Inquiry();
                    $post_inq->name =  $request->name;
                    $post_inq->phone =  $request->phone;
                    $post_inq->email =  $request->email;
                    $post_inq->Seeking =  $request->Seeking;
                    $post_inq->message =  $request->message;
                    $post_inq->save();
                    $notification = array(
                        'message' => 'Your Inquries submitted successfully',
                     'alert-type' => 'success'
                     
                    );
                    return redirect()->route('front.home.page')->with($notification); 
                    
                   }
}
