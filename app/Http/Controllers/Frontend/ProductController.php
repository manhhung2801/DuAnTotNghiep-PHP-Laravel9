<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class ProductController extends Controller
{
    function calculatePercentageChange($arr)
    {
        $percentageChanges = [];

        foreach ($arr as $key => $product) {
            $price = $product->price;
            $offerPrice = $product->offer_price;

            if ($price > 0) {
                $percentageChange = ($price - $offerPrice) / $price * 100;
                $percentageChanges[$key] = number_format($percentageChange, 0);
                $product['percent'] = $percentageChanges[$key];
            } else {
                $percentageChanges[$key] = 0;
            }
        }

        return $arr;
    }


    public function index()
    {
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $products = Product::where("status", "=", 1)->orderBy("views", "asc")->get();
        $products = $this->calculatePercentageChange($products);
        return view('frontend.products.index', compact("categories", "products"));
    }

    public function getSlug($slug = null)
    {
        $slug = str_replace(".html", "", $slug);
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $product = Product::where("slug", "=", $slug)->first();
        $categoryId = $product->ProductHasOneCat->id;

        $products = Product::where("category_id", "=", $categoryId)->get();
        $products = $this->calculatePercentageChange($products);
        $product_image_galleries = $product->product_image_galleries()->get();
        $variants = $product->variant()->get();
        return view('frontend.products.detail', compact("categories", "product", "product_image_galleries", "variants", 'products'));
    }

}
