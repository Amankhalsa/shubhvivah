<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FrontDashboardController extends Controller
{
    //user_dashboard
    public function __construct()
    {
    $this->middleware('auth');
        }
    public function user_dashboard(){

        return view('frontend.user_dashboard.index');

    }

    // all_user_table
      
  
}
