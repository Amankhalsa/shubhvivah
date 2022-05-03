<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;

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

});
// ======================= front end Route =======================
/* ------------- Admin Route -------------- */

Route::prefix('admin')->group(function (){
    Route::controller(AdminController::class)->group(function () {
Route::get('/login', 'Index')->name('login_from');

Route::post('/login/owner', 'Login')->name('admin.login');

Route::get('/dashboard', 'Dashboard')->name('admin.dashboard')->middleware('admin');

Route::get('/logout', 'AdminLogout')->name('admin.logout')->middleware('admin');

Route::get('/register', 'AdminRegister')->name('admin.register');

Route::post('/register/create', 'AdminRegisterCreate')->name('admin.register.create');
});

});




/* ------------- End Admin Route -------------- */




/* ------------- Seller Route -------------- */

Route::prefix('seller')->group(function (){

Route::get('/login',[SellerController::class, 'SellerIndex'])->name('seller_login_from');

Route::get('/dashboard',[SellerController::class, 'SellerDashboard'])->name('seller.dashboard')->middleware('seller');

Route::post('/login/owner',[SellerController::class, 'SellerLogin'])->name('seller.login');



Route::get('/logout',[SellerController::class, 'SellerLogout'])->name('seller.logout')->middleware('seller');

Route::get('/register',[SellerController::class, 'SellerRegister'])->name('seller.register');

Route::post('/register/create',[SellerController::class, 'SellerRegisterCreate'])->name('seller.register.create');


}); 
/* ------------- End Seller Route -------------- */



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// profile route 
    // view profile 
Route::prefix('admin')->group(function(){

Route::get('/profile/view',[ProfileController::class, 'admin_view_profile'])->name('view.profile');
// admin.edit.profile
   //Edit profile 
Route::get('/profile/edit',[ProfileController::class, 'admin_edit_profile'])->name('admin.edit.profile');
// admin.update.profile
Route::post('/profile/update',[ProfileController::class, 'admin_update_profile'])->name('admin.update.profile');


});

// frontend pages 

