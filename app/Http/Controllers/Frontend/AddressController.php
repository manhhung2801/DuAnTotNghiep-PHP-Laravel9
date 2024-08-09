<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use App\Models\StoreAddress;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index(){

        $storeAddress = StoreAddress::where("status", "=",1)->orderBy("id","asc")->get();
        
        return view('frontend.address.index',compact('storeAddress'));
    }
}
