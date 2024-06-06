<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PostsController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CouponsController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\VariantController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\backend\VariantItemController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\UserManagementController;
use App\Http\Controllers\Backend\PostCategoriesController;

/** Admin Routes */

Route::get('dashboard', [AdminController::class,'dashboard'])->name('dashboard');

/** Profile Routes */
Route::get('/dashboard', [ProfileController::class, 'index'])->name('profile');
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
Route::put('/product/change-status', [ProductController::class, 'changeStatus'])->name('product.change-status');
Route::get('get-childcategory', [ProductController::class, 'getChildCategories'])->name('get-childcategories');
Route::resource('product', ProductController::class);

/** Slider */
Route::put('/slider/change-status', [SliderController::class, 'changeStatus'])->name('slider.change-status');
Route::resource('/slider', SliderController::class);


Route::put('/coupons/change-status', [CouponsController::class, 'changeStatus'])->name('coupons.change-status');
Route::resource('/coupons', CouponsController::class);

/** Variant */
Route::get('/variant/trashed-variant',[VariantController::class, 'trashedVariant'])->name('variant.trashed-variant');
Route::get('/variant/restore/{id}',[VariantController::class,'restore'])->name('variant.restore-variant');
Route::get('/variant/deleted/{id}',[VariantController::class,'deleteVariant'])->name('variant.deleted-variant');
Route::put('/variant/change-status',[ VariantController::class,'changeStatus'])->name('variant.change-status');
Route::resource('/variant',VariantController::class);


/** VariantItem */
Route::resource('/variantItem', VariantItemController::class);
Route::put('/variantItem/change-status/{id?}', [ VariantItemController::class, 'changeStatus'])->name('variantItem.change-status');

/** user management */
Route::get("/user-management", [UserManagementController::class, 'index'])->name('user-management.index');
Route::put("/user-management/change-role", [UserManagementController::class, 'changeRole'])->name('user-management.change-role');
Route::put("/user-management/change-status", [UserManagementController::class, 'changeStatus'])->name('user-management.change-status');

/** post_category */
Route::get('/post-cate/trashed-post_cate',[PostCategoriesController::class, 'trashedPostcate'])->name('post-cate.trashed-postCate');
Route::get('/post-cate/restore/{id}',[PostCategoriesController::class,'restore'])->name('post-cate.restore-post_categories');
Route::get('/post-cate/deleted/{id}',[PostCategoriesController::class,'deleteVariant'])->name('post-cate.deleted-post_categories');
Route::put('/post-cate/change-status',[PostCategoriesController::class,'changeStatus'])->name('post-cate.change-status');
Route::resource('/post-cate',PostCategoriesController::class);

/** post */
Route::get('/post/trashed-post',[PostsController::class, 'trashedPost'])->name('post.trashed-post');
Route::get('/post/restore/{id}',[PostsController::class,'restore'])->name('post.restore-post');
Route::get('/post/deleted/{id}',[PostsController::class,'deleteVariant'])->name('post.deleted-post');
Route::put('/post/change-status',[PostsController::class,'changeStatus'])->name('post.change-status');
Route::resource('/post',PostsController::class);