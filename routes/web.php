<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontDashboardController;
use App\Http\Controllers\backend\ManageuserController;
use App\Http\Controllers\backend\InquiryController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\TwoFAController;
use App\Http\Controllers\FilterContoller;



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
Route::controller(TwoFAController::class)->group(function () {
    
    // Route::get('/home','index')->name('home')->middleware('2fa');
    Route::get('2fa', 'index')->name('2fa.index');
    Route::post('2fa', 'store')->name('2fa.post');
    Route::get('2fa/reset',  'resend')->name('2fa.resend');

});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// ======================= front end Route =======================
Route::controller(FrontendController::class)->group(function () {
Route::get('/', 'front_Index')->name('front.home.page');
// about-us
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

// manage user profile 
Route::prefix('user')->group(function (){

Route::controller(UserProfileController::class)->group(function () {
// user.logout
Route::get('/logout', 'logout_auth_profile')->name('user.logout');

// edit profile 
Route::get('/edit-profile', 'edit_auth_profile')->name('edit.auth.profile');
//update user profile
Route::post('/update-profile/{id}', 'update_auth_profile')->name('update.auth.profile');
// change password 

Route::get('/change-password', 'change_user_password')->name('change.user.password');

Route::post('/update-password', 'update_user_password')->name('update.user.password');

Route::post('api/fetch-states','fetchState');

});
});

// ================================filter routes 
Route::prefix('search')->group(function (){

Route::controller(FilterContoller::class)->group(function () {
// user.logout
Route::get('/new-matches', 'new_matches')->name('user.new.matches');

Route::get('/profile', 'new_profile_matches')->name('user.new-profile-matches');

Route::get('/my-matches', 'new_mymatches')->name('user.new.mymatches');



});
});
// 
// ======================= front end Route =======================
/* ------------- Admin Route -------------- */

Route::prefix('admin')->group(function (){
    Route::controller(AdminController::class)->group(function () {
// login
Route::get('/login', 'Index')->name('login_from');
// login
Route::post('/login/owner', 'Login')->name('admin.login');
// dashboard
Route::get('/dashboard', 'Dashboard')->name('admin.dashboard')->middleware('admin');
// logout
Route::get('/logout', 'AdminLogout')->name('admin.logout')->middleware('admin');
// register
Route::get('/register', 'AdminRegister')->name('admin.register')->middleware('admin');
// register create
Route::post('/register/create', 'AdminRegisterCreate')->name('admin.register.create');

});
});






/* ------------- End Admin Route -------------- */
/* ------------- Seller Route -------------- */
Route::prefix('seller')->group(function (){
Route::controller(SellerController::class)->group(function () {
// login
Route::get('/login', 'SellerIndex')->name('seller_login_from');
// dashboard
Route::get('/dashboard','SellerDashboard')->name('seller.dashboard')->middleware('seller');
// login owner
Route::post('/login/owner', 'SellerLogin')->name('seller.login');
// logout
Route::get('/logout', 'SellerLogout')->name('seller.logout')->middleware('seller');
// register
Route::get('/register', 'SellerRegister')->name('seller.register');
// register create
Route::post('/register/create','SellerRegisterCreate')->name('seller.register.create');

}); 
}); 

//====================== FrontDashboard routes ======================
Route::prefix('user')->group(function (){
Route::controller(FrontDashboardController::class)->group(function () {
    Route::get('/dashboard','user_dashboard')->name('user.front.dashboard')->middleware('2fa');
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
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';


############################### Admin Middleware ###########################################
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

// ===================== Admin Routes manage user by  ========================
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

Route::post('/image-update/', 'multi_image_update')->name('update.product.image');

// delete multiple image 
Route::get('/multiimage-delete/{id}', 'multi_image_delete')->name('del.product.image');
// product view route 
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



