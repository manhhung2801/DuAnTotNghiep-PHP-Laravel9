<?php

use App\Http\Controllers\VNPAYController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PostsController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CouponsController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\VariantController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\VariantItemController;
use App\Http\Controllers\Backend\ChildCategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PagesController;
use App\Http\Controllers\Backend\StoreAddressController;
use App\Http\Controllers\Backend\UserManagementController;
use App\Http\Controllers\Backend\PostCategoriesController;
use App\Http\Controllers\Backend\CommentsController;
use App\Http\Controllers\Backend\PageCategoryController;
use App\Http\Controllers\GHTKController;


/** Admin Routes */
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::post('/dashboards', [AdminController::class, 'dashboards'])->name('dashboard.pots');


// Route::post('/dashboard', [AdminController::class, 'piechart'])->name('piechart');
// Route::get('', [HomeController::class, 'index'])->name('index');

/** Profile Routes */
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
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

/** pageCategories */
Route::put('/page-category/change-status', [PageCategoryController::class, 'changeStatus'])->name('pageCategories.change-status');
Route::resource('/page-category', PageCategoryController::class);



/**Pages */
Route::put('/pages/change-status', [PagesController::class, 'changeStatus'])->name('pages.change-status');
Route::resource('/pages', PagesController::class);

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

/**  Store Adress */
Route::put('/storeAddress/change-status', [StoreAddressController::class, 'changeStatus'])->name('storeAddress.change-status');
Route::get('storeAddress/trash-list/', [StoreAddressController::class, 'showTrash'])->name('storeAddress.trash-list');
Route::DELETE('storeAddress/destroy-trash/{id?}', [StoreAddressController::class, 'destroyTrash'])->name('storeAddress.destroy-trash');
Route::PATCH('storeAddress/restore-trash/{id?}', [StoreAddressController::class, 'restoreTrash'])->name('storeAddress.restore-trash');
Route::resource('/storeAddress', StoreAddressController::class);

/** Coupons */
Route::get('coupons/trash-list', [CouponsController::class, 'showTrash'])->name('coupons.trash-list');
Route::DELETE('coupons/destroy-trash/{id?}', [CouponsController::class, 'destroyTrash'])->name('coupons.destroy-trash');
Route::PATCH('coupons/restore-trash/{id?}', [CouponsController::class, 'restoreTrash'])->name('coupons.restore-trash');
Route::put('/coupons/change-status', [CouponsController::class, 'changeStatus'])->name('coupons.change-status');
Route::resource('/coupons', CouponsController::class);


/** Variant */
Route::put('/variant/change-status', [VariantController::class, 'changeStatus'])->name('variant.change-status');
Route::get('/variant/trashed-variant', [VariantController::class, 'trashedVariant'])->name('variant.trashed-variant');
Route::PATCH('/variant/restore/{id}', [VariantController::class, 'restore'])->name('variant.restore-variant');
Route::DELETE('/variant/deleted/{id}', [VariantController::class, 'deleteVariant'])->name('variant.deleted-variant');
Route::put('/variant/change-status', [VariantController::class, 'changeStatus'])->name('variant.change-status');

/** add variant of product */
Route::get('product/{id}/variant', [VariantController::class, 'getVariantByProductId'])->name('product.variant');
Route::resource('/variant', VariantController::class);


/** VariantItem */
Route::get('/variantItem/onlyTrashed', [VariantItemController::class, 'onlyTrashed'])->name('variantItem.onlyTrashed');
Route::PATCH('/variantItem/restore/{id?}', [VariantItemController::class, 'restore'])->name('variantItem.restore');
Route::DELETE('/variantItem/delete/{id?}', [VariantItemController::class, 'destroyTrashed'])->name('variantItem.destroyTrashed');
/** add variantItem of variant */
Route::get('product/variant/{id}/variant-item/', [VariantItemController::class, 'getVariantItemByVariantId'])->name('product.variant.variant-item');

Route::resource('/variantItem', VariantItemController::class);
Route::put('/variantItem/change-status/{id?}', [VariantItemController::class, 'changeStatus'])->name('variantItem.change-status');

/** user management */
Route::get("/user-management", [UserManagementController::class, 'index'])->name('user-management.index');
Route::DELETE("/user-management/{id}", [UserManagementController::class, 'destroy'])->name('user-management.destroy');
Route::put("/user-management/change-role", [UserManagementController::class, 'changeRole'])->name('user-management.change-role');
Route::put("/user-management/change-status", [UserManagementController::class, 'changeStatus'])->name('user-management.change-status');

/** post_category */
Route::put('/post-category/change-status', [PostCategoriesController::class, 'changeStatus'])->name('post-category.change-status');
Route::get('/post-category/trashed-postCategory', [PostCategoriesController::class, 'trashedPostcate'])->name('post-category.trashed-postCate');
Route::get('/post-category/restore/{id}', [PostCategoriesController::class, 'restore'])->name('post-category.restore-post_categories');
Route::get('/post-category/deleted/{id}', [PostCategoriesController::class, 'deleteVariant'])->name('post-category.deleted-post_categories');
Route::resource('/post-category', PostCategoriesController::class);



/** post */
Route::put('/post/change-status', [PostsController::class, 'changeStatus'])->name('post.change-status');
Route::get('/post/trashed-post', [PostsController::class, 'trashedPost'])->name('post.trashed-post');
Route::get('/post/restore/{id}', [PostsController::class, 'restore'])->name('post.restore-post');
Route::get('/post/deleted/{id}', [PostsController::class, 'delete'])->name('post.deleted-post');
Route::resource('/post', PostsController::class);

/** Comment */
Route::get('comment/trash-list', [CommentsController::class, 'showTrash'])->name('comment.trash-list');
Route::DELETE('comment/destroy-trash/{id?}', [CommentsController::class, 'destroyTrash'])->name('comment.destroy-trash');
Route::PATCH('comment/restore-trash/{id?}', [CommentsController::class, 'restoreTrash'])->name('comment.restore-trash');
Route::resource('comment', CommentsController::class);

// Route::fallback(function () {
//     return route("admin.login");
// });

Route::resource('/order', OrderController::class);



Route::post('/order-vnp-refund-status-update', [OrderController::class, 'VNPRefundStatusUpdate'])->name('order.vnp-refund-status.update');

//
Route::fallback(function () {
    return view("404");
});

// Liên Hệ
Route::get('contact/trash-list', [ContactController::class, 'showTrash'])->name('coupons.trash-list');
Route::DELETE('contact/destroy-trash/{id?}', [ContactController::class, 'destroyTrash'])->name('contact.destroy-trash');
Route::PATCH('contact/restore-trash/{id?}', [ContactController::class, 'restoreTrash'])->name('contact.restore-trash');

Route::get('contact', [ContactController::class, "index"])->name('AdminContact');
Route::get('contact/show/{id}', [ContactController::class, "show"])->name('contact.show');
Route::put('contact/feedback/answered/{id}', [ContactController::class, "answered"])->name('contact.answered');
Route::delete('contact/destroy/{id}', [ContactController::class, "destroy"])->name('contact.destroy');
Route::post('contact/feedback', [ContactController::class, "feedback"])->name('contact.feedback');

//GHTK
Route::post('/ghtk-post-order/{id?}', [GHTKController::class, 'postOrder'])->name('ghtk.post-order');

//webhook GHTK
Route::post('/updateShipment/{tracking_id?}', [GHTKController::class, 'updateShipment'])->name('updateShipment');
