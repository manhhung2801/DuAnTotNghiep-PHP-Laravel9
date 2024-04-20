<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\backend\AdminProductController;

/** Admin Routes */

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/** Profile Routes */
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update/', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');


/** Category */
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::resource('/category', CategoryController::class);

/** Sub Category */
Route::put('/sub-category/change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::resource('/sub-category', SubCategoryController::class);

/** Child Category */
Route::put('/child-category/change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategory', [ChildCategoryController::class, 'getSubCategories'])->name('get-subcategories');
Route::resource('/child-category', ChildCategoryController::class);

/** Product */
Route::put('/product/change-status', [AdminProductController::class, 'changeStatus'])->name('product.change-status');
Route::get('get-childcategory', [AdminProductController::class, 'getChildCategories'])->name('get-childcategories');
Route::resource('product', AdminProductController::class);

