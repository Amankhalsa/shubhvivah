<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FilterContoller extends Controller
{
    //
    public function new_matches(){
 


               return view('frontend.user_dashboard.matches.new_matches');

    }
    public function new_profile_matches(){
               return view('frontend.user_dashboard.matches.today_matches');


    }
    public function new_mymatches(){
               return view('frontend.user_dashboard.matches.my_matches');


    }
}
