<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\TintucController;
use App\Http\Controllers\Frontend\GioHangController;
use App\Http\Controllers\Frontend\KhieuNaiController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\NewsController;

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
/** Login admin Dashboard */



/** User Dashboard */
// Route::get('/tintuc',[TintucController::class,'index']);
Route::get('/khieunai', [KhieuNaiController::class, 'index']);
Route::get('giohang', [GioHangController::class, 'index']);
Route::get('checkout', [CheckoutController::class, 'index']);

Route::get('product/', [ProductController::class, 'index']);
Route::get('product/{slug?}', [ProductController::class, 'getSlug']);


Route::get('/tin-tuc', [NewsController::class, 'index'])->name("news");
Route::get('/tin-tuc/{slugs}', [NewsController::class, 'newsSiteType'])->name("news.newsSiteType");
Route::get('/tin-tuc/{slugs_cate}/{slugs}', [NewsController::class, 'details'])->name("news.details");
