<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontDashboardController;
use App\Http\Controllers\backend\ManageuserController;
use App\Http\Controllers\backend\InquiryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ======================= front end Route =======================
Route::controller(FrontendController::class)->group(function () {
Route::get('/', 'front_Index')->name('front.home.page');

Route::get('/about-us', 'front_about_us')->name('front.about.page');
// testimonials
Route::get('/testimonials', 'front_testimonials')->name('front.testimonials.page');
// package
Route::get('/package', 'front_package')->name('front.package.page');
// contact
Route::get('/contact', 'front_contact')->name('front.contact.page');
// store_inquiry
Route::post('/post-inquiry','store_inquiry')->name('store.inquiry');

});
// ======================= front end Route =======================
/* ------------- Admin Route -------------- */

Route::prefix('admin')->group(function (){
    Route::controller(AdminController::class)->group(function () {
Route::get('/login', 'Index')->name('login_from');

Route::post('/login/owner', 'Login')->name('admin.login');

Route::get('/dashboard', 'Dashboard')->name('admin.dashboard')->middleware('admin');

Route::get('/logout', 'AdminLogout')->name('admin.logout')->middleware('admin');

Route::get('/register', 'AdminRegister')->name('admin.register')->middleware('admin');

Route::post('/register/create', 'AdminRegisterCreate')->name('admin.register.create');
});

});




/* ------------- End Admin Route -------------- */




/* ------------- Seller Route -------------- */

Route::prefix('seller')->group(function (){
Route::controller(SellerController::class)->group(function () {

Route::get('/login', 'SellerIndex')->name('seller_login_from');

Route::get('/dashboard','SellerDashboard')->name('seller.dashboard')->middleware('seller');

Route::post('/login/owner', 'SellerLogin')->name('seller.login');

Route::get('/logout', 'SellerLogout')->name('seller.logout')->middleware('seller');

Route::get('/register', 'SellerRegister')->name('seller.register');

Route::post('/register/create','SellerRegisterCreate')->name('seller.register.create');

}); 
}); 

//====================== FrontDashboard routes ======================
Route::prefix('user')->group(function (){
Route::controller(FrontDashboardController::class)->group(function () {
    Route::get('/dashboard','user_dashboard')->name('user.front.dashboard');
    // All users 
 

}); 
}); 
//====================== FrontDashboard routes  ======================

/* ------------- End Seller Route -------------- */



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('user.front.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


############################### admin middleware ###########################################
// profile route 
    // view profile 
    Route::group(['middleware'=>'admin'],function(){
Route::prefix('admin/profile')->group(function(){
Route::controller(ProfileController::class)->group(function () {
Route::get('/view', 'admin_view_profile')->name('view.profile');
// admin.edit.profile
//Edit profile 
Route::get('/edit', 'admin_edit_profile')->name('admin.edit.profile');
// admin.update.profile
Route::post('/update', 'admin_update_profile')->name('admin.update.profile');
// change password 
Route::get('/change-password', 'change_password')->name('admin.password.change');
// update admin password 
Route::post('/update-password', 'update_admin_password')->name('admin.password.update');


});
});

// ========================== Admin Routes manage user by  ======================================
Route::prefix('manage/profiles')->group(function(){
 Route::controller(ManageuserController::class)->group(function () {
// view table
Route::get('/view','all_user_table')->name('registered.all.user');
// View  profile
Route::get('/view-profile/{id}','view_register_user_profile')->name('view.register.user');
// edit
Route::get('/edit/{id}','edit_register_user_profile')->name('edit.register.user');
// store
Route::post('/update/{id}','update_register_user_profile')->name('update.register.user');

//update profile image  update.register.user_profile
Route::post('/update-profile/{id}','update_register_profile_image')->name('update.register.user_profile');

// add.offline.user
Route::get('/add-user/by-admin','add_user_by_admin')->name('add.offline.user');
// store.new.user.byadmin
Route::post('/store/by-admin','store_user_by_admin')->name('store.new.user.byadmin');
// store.profile.user.byadmin
Route::post('/store-profile/by-admin','store_profile_by_admin')->name('store.profile.user.byadmin');
// Delete user by admin 
Route::get('/delete/by-admin/{id}','del_user_by_admin')->name('del.offline.user');


    });
    });

// profile prefix end 
Route::prefix('manage/inquiry')->group(function(){
// ========================= enquery route =====================
Route::controller(InquiryController::class)->group(function () {
Route::get('/view','all_inquiry_table')->name('inquiry.all.user');
// view_inquiry 
Route::get('/view-inquiry/{id}','view_inquiry')->name('view.user.inquiry');
// del_inquiry
Route::get('/del/{id}','del_inquiry')->name('del.user.inquiry');


});
});


############################### admin middleware end ###########################################

});
############################### admin middleware end ###########################################



