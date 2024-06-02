<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\TintucController;
use App\Http\Controllers\Frontend\KhieuNaiController;
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

Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('product', function () {
    return view('frontend.products.index');
});
Route::get('detail', function () {
    return view('frontend.products.detail');
});
Route::get('cart', function () {
    return view('frontend.cart.index');
});
Route::get('post', function () {
    return view('frontend.post.index');
});
Route::get('post-detail', function () {
    return view('frontend.post.post');
});
Route::get('checkout', function () {
    return view('frontend.checkout.index');
});
Route::get('warranty', function () {
    return view('frontend.warranty.detail');
});
Route::get('introduce', function () {
    return view('frontend.introduce.index');
});
Route::get('payment-method', function () {
    return view('frontend.paymentMethod.index');
});
Route::get('contact', function () {
    return view('frontend.contact.index');
});
Route::get('shipping', function () {
    return view('frontend.shipping.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/** Login admin Dashboard */
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
/** Login admin Dashboard */




/** User Dashboard */
Route::middleware(['auth', 'verified', 'role:user'])->prefix('user')->name('user.')->group(function() {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});
/** User Dashboard */
Route::get('/tintuc',[TintucController::class,'index']);
Route::get('/khieunai',[KhieuNaiController::class,'index']);

