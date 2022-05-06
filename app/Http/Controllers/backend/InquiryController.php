<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Inquiry;
class InquiryController extends Controller
{
    //
      // view all  inquiry
      public function all_inquiry_table(){
        $get_inq['get_all_inquiry']  = Inquiry::get();

    return view('backend.inquiry.index',$get_inq);

}

// view inquiry
public function view_inquiry($id){
    $edit['view_inquiry']  = Inquiry::find($id);

return view('backend.inquiry.view',$edit);

}

// del_inquiry
public function del_inquiry($id){
$delinquiry  = Inquiry::find($id);
$delinquiry->delete();
$notification = array(
    'message' => 'User inquiry Deleted Successfully ',
 'alert-type' => 'error'
    );
return redirect()->route('inquiry.all.user')->with($notification );

}
}
