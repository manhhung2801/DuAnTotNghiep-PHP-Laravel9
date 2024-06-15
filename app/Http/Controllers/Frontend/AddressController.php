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
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $slides = Slider::where("status", "=", 1)->orderBy("serial", "asc")->get();
        $storeAddress = StoreAddress::where("status", "=",1)->orderBy("id","asc")->limit(1)->get();
        return view('frontend.address.index',compact('categories','slides','storeAddress'));
    }
}
