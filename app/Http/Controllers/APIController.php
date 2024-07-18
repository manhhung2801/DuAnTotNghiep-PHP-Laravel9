<?php

namespace App\Http\Controllers;

use App\Models\StoreAddress;
use Exception;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function getStoreAddress()
    {
        try {
            $getStoreAdress = StoreAddress::where('status', '=', 1)->get();

            $data = [];
            foreach ($getStoreAdress as $store) {
                $data[$store->id] = $store->store_name . ' - ' . $store->address . ', ' . $store->ward . ', ' . $store->district . ', ' . $store->province . ' - ' . $store->phone;
            };
            return response()->json(['status' => true, 'storeAdress' => $data]);
        } catch (Exception $e) {
            return response()->json(['status' => false, 'message' => 'Có lỗi khi lấy địa chỉ cữa hàng. Vui lòng liên hệ cho chúng tôi']);
        }
    }
}
