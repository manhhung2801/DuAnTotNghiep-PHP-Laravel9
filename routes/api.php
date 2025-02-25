<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\GHTKController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** Lấy tất cả các cửa hàng show ra checkout (Get Store Address)*/
Route::get('getStoreAddress', [APIController::class, 'getStoreAddress'])->name('api.getStoreAddress');

/**Webhooks GHTK */
Route::post('/updateShipment', [GHTKController::class, 'ghtkWebhookData']);
// routes/api.php


