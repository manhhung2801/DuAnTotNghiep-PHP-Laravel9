<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Information;
use GuzzleHttp\Handler\Proxy;
use App\Models\StoreAddress;

class HomeController extends Controller
{
    public function index()
    {
        // category show menu
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $slides = Slider::where("status", "=", 1)->orderBy("serial", "asc")->take(3)->get();

        // Show danh mục nổi bật
        $categoryHot = $categories->take(6);
        //Giới hạn của category show // has product lấy category có ít nhất 1 product
        $getCategory = Category::where("status", "=", 1)->has('products')->take(4)->get();
        $getProducts = []; //mảng chưa product
        foreach($getCategory as $cate){
            $product = [
                $cate->name => Product::getProduct()->where('status', '=', 1)
                                        ->where('qty', '>', 0)
                                        ->where('category_id', $cate->id)
                                        ->orderBy('created_at', 'desc')
                                        ->take(4)->get()
            ];
            $getProducts[] = $product;
        }
        // show tin tức (post)
        $getPosts = Post::getPost()->orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.home.index', compact('slides', 'categoryHot', 'getProducts','getPosts'));
    }
}
