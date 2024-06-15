<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StoreAddress;

class HomeController extends Controller
{
    public function index()
    {

        // category show menu
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();

        $slides = Slider::where("status", "=", 1)->orderBy("serial", "asc")->get();
        
        $storeAddress = StoreAddress::where("status", "=", 1)->orderBy("id", "asc")->limit(1)->get();

        return view('frontend.home.index', compact("categories", 'slides', 'storeAddress'));
    }
}
