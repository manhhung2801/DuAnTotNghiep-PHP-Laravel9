<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserDashboardController extends Controller
{
    public function index(){

        // category show menu
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();


        return view('frontend.dashboard.page.info', compact('categories'));
    }
}
