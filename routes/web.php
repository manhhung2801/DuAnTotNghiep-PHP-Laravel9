<?php

use App\Http\Controllers\Backend\AdminLoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\InformationController;
use App\Http\Controllers\Frontend\AddressController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\GioHangController;
use App\Http\Controllers\Frontend\KhieuNaiController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\frontend\ErrorController;
use App\Http\Controllers\frontend\GHTKController;
use App\Http\Controllers\Frontend\OrderController;
use App\Models\Information;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Home */

Route::get("/", [HomeController::class, 'index'])->name("home");
/** Home */
/** Addresss */
Route::get('/address', [AddressController::class, 'index'])->name('address');
/** End Addresss */

Route::get('/lien-he', [ContactController::class,'index'])->name('contact');
Route::post('/lien-he/gui', [ContactController::class,'contact'])->name('contactContact');



/** User Dashboard */
Route::middleware(['auth', 'verified', 'role:user'])->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

/** Login admin Dashboard */
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/admin',  [AdminController::class, 'login']);
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name("admin.login.store");
/** Login admin Dashboard */



/** User Dashboard */
// Route::get('/tintuc',[TintucController::class,'index']);
Route::get('/khieunai', [KhieuNaiController::class, 'index']);
Route::get('giohang', [GioHangController::class, 'index']);

// Route::get('product/',[ProductController::class, 'index']);
// Route::get('product/{slug?}',[ProductController::class, 'getSlug']);

Route::get('product/{cat?}/{sub?}/{child?}/{slug?}', [ProductController::class, 'getWhereParam']);
// http://127.0.0.1:8000/dien-thoai-tablet/iphone/iphone-15-series/iphone-lo


Route::get('/tin-tuc', [NewsController::class, 'index'])->name("news");
Route::get('/tin-tuc/{slugs}', [NewsController::class, 'newsSiteType'])->name("news.newsSiteType");
Route::get('/tin-tuc/{slugs_cate}/{slugs}', [NewsController::class, 'details'])->name("news.details");


// Route Cart
Route::resource('cart', CartController::class);

/**Apply Coupon Code */
Route::post('/applyCouponCode', [CheckoutController::class, 'applyCouponCode'])->name('applyCouponCode')->middleware('checkLogin');

//Checkout
Route::resource('checkout', CheckoutController::class)->middleware('checkLogin');

// Order customer
Route::resource('order', OrderController::class)->middleware('checkLogin');


/** các trang thông tin */
Route::get('information/{slug1?}/{slug2?}', [InformationController::class, 'showPages'])->name("showPages");

/** trang search  */

Route::get("/search", [ProductController::class, 'search'])->name("search");

Route::fallback(function () {
    return view("404");
});

Route::get("/search", [ProductController::class,'search'])->name("search");

/** Tính phí ship (calculateShipping) */
Route::get("/calculateShipping", [GHTKController::class, 'calculateShipping'])->name('calculateShipping');


