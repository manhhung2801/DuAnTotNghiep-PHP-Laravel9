<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\StoreAddress;


class AddressController extends Controller
{

    public function index()
    {
        $storeAddress = StoreAddress::where("status", 1)->where("pick_store", 1)->orderBy("created_at", "desc")->get();
        return view('frontend.address.index', compact('storeAddress'));
    }
}
