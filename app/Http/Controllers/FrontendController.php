<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
}
