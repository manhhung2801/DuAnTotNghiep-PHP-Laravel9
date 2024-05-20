<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
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

/** Admin Routes */

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/** Profile Routes */
Route::get('/dashboard', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update/', [ProfileController::class, 'updateProfile'])->name('profile.update');
Route::put('/profile/update/password', [ProfileController::class, 'updatePassword'])->name('password.update');


/** Category */
Route::put('change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');
Route::get('category/trash-list', [CategoryController::class, 'showTrash'])->name('category.trash-list');
Route::DELETE('category/destroy-trash/{id?}', [CategoryController::class, 'destroyTrash'])->name('category.destroy-trash');
Route::PATCH('category/restore-trash/{id?}', [CategoryController::class, 'restoreTrash'])->name('category.restore-trash');
Route::resource('/category', CategoryController::class);

/** Sub Category */
Route::put('/sub-category/change-status', [SubCategoryController::class, 'changeStatus'])->name('sub-category.change-status');
Route::get('sub-category/trash-list', [SubCategoryController::class, 'showTrash'])->name('sub-category.trash-list');
Route::DELETE('sub-category/destroy-trash/{id?}', [SubCategoryController::class, 'destroyTrash'])->name('sub-category.destroy-trash');
Route::PATCH('sub-category/restore-trash/{id?}', [SubCategoryController::class, 'restoreTrash'])->name('sub-category.restore-trash');
Route::resource('/sub-category', SubCategoryController::class);

/** Child Category */
Route::put('/child-category/change-status', [ChildCategoryController::class, 'changeStatus'])->name('child-category.change-status');
Route::get('get-subcategory', [ChildCategoryController::class, 'getSubCategories'])->name('get-subcategories');
Route::get('child-category/trash-list', [ChildCategoryController::class, 'showTrash'])->name('child-category.trash-list');
Route::DELETE('child-category/destroy-trash/{id?}', [ChildCategoryController::class, 'destroyTrash'])->name('child-category.destroy-trash');
Route::PATCH('child-category/restore-trash/{id?}', [ChildCategoryController::class, 'restoreTrash'])->name('child-category.restore-trash');
Route::resource('/child-category', ChildCategoryController::class);

/** Product */
Route::put('/product/change-status', [ProductController::class, 'changeStatus'])->name('product.change-status');
Route::get('get-childcategory', [ProductController::class, 'getChildCategories'])->name('get-childcategories');
Route::get('product/trash-list', [ProductController::class, 'showTrash'])->name('product.trash-list');
Route::DELETE('product/destroy-trash/{id?}', [ProductController::class, 'destroyTrash'])->name('product.destroy-trash');
Route::PATCH('product/restore-trash/{id?}', [ProductController::class, 'restoreTrash'])->name('product.restore-trash');
Route::resource('product', ProductController::class);

/** Slider */
Route::put('/slider/change-status', [SliderController::class, 'changeStatus'])->name('slider.change-status');
Route::get('slider/trash-list/', [SliderController::class, 'showTrash'])->name('slider.trash-list');
Route::DELETE('slider/destroy-trash/{id?}', [SliderController::class, 'destroyTrash'])->name('slider.destroy-trash');
Route::PATCH('slider/restore-trash/{id?}', [SliderController::class, 'restoreTrash'])->name('slider.restore-trash');
Route::resource('slider', SliderController::class);

/** Coupons */
Route::get('coupons/trash-list', [CouponsController::class, 'showTrash'])->name('coupons.trash-list');
Route::DELETE('coupons/destroy-trash/{id?}', [CouponsController::class, 'destroyTrash'])->name('coupons.destroy-trash');
Route::PATCH('coupons/restore-trash/{id?}', [CouponsController::class, 'restoreTrash'])->name('coupons.restore-trash');
Route::put('/coupons/change-status', [CouponsController::class, 'changeStatus'])->name('coupons.change-status');
Route::resource('/coupons', CouponsController::class);

/** Variant */
Route::put('/variant/change-status', [VariantController::class, 'changeStatus'])->name('variant.change-status');
Route::get('/variant/trashed-variant',[VariantController::class, 'trashedVariant'])->name('variant.trashed-variant');
Route::PATCH('/variant/restore/{id}',[VariantController::class,'restore'])->name('variant.restore-variant');
Route::DELETE('/variant/deleted/{id}',[VariantController::class,'deleteVariant'])->name('variant.deleted-variant');
Route::put('/variant/change-status',[ VariantController::class,'changeStatus'])->name('variant.change-status');
Route::resource('/variant',VariantController::class);


/** VariantItem */
Route::get('/variantItem/onlyTrashed', [VariantItemController::class, 'onlyTrashed'])->name('variantItem.onlyTrashed');
Route::PATCH('/variantItem/restore/{id?}', [ VariantItemController::class, 'restore'])->name('variantItem.restore');
Route::DELETE('/variantItem/delete/{id?}', [ VariantItemController::class, 'destroyTrashed'])->name('variantItem.destroyTrashed');
Route::resource('/variantItem', VariantItemController::class);
Route::put('/variantItem/change-status/{id?}', [VariantItemController::class, 'changeStatus'])->name('variantItem.change-status');

/** user management */
Route::get("/user-management", [UserManagementController::class, 'index'])->name('user-management.index');
Route::DELETE("/user-management/{id}", [UserManagementController::class, 'destroy'])->name('user-management.destroy');
Route::put("/user-management/change-role", [UserManagementController::class, 'changeRole'])->name('user-management.change-role');
Route::put("/user-management/change-status", [UserManagementController::class, 'changeStatus'])->name('user-management.change-status');
