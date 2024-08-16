<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Coupons;
use Carbon\Carbon;
use GuzzleHttp\Handler\Proxy;

class HomeController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        // category show menu
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $slides = Slider::where("status", "=", 1)->orderBy("created_at", "desc")->take(3)->get();
        //Lấy ra coupon
        $getCoupon = Coupons::where('status', 1)
            ->where('end_date', '>', $now)
            ->where('quantity', '>', 0)
            ->orderBy('created_at', 'desc')
            ->take(4)->get();
        // Show danh mục nổi bật
        $categoryHot = $categories->take(6);
        $bannerHero = Post::getBanner()->take(1)->get();
        // show tin tức (post)
        $getPosts = Post::getPost()->take(4)->get();
        //Giới hạn của category show // has product lấy category có ít nhất 1 product
        $getCategory = Category::where("status", "=", 1)->has('products')->take(4)->get();
        $getProducts = []; //mảng chưa product
        foreach ($getCategory as $cate) {
            $product = [
                $cate->name => Product::getProduct()->where('status', '=', 1)
                    ->where('category_id', $cate->id)
                    ->take(4)->get()
            ];
            $getProducts[] = $product;
        }
        return view('frontend.home.index', compact('slides', 'categoryHot', 'getProducts', 'getPosts', 'bannerHero', 'getCoupon'));
    }
}
