<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\VariantItem;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\StoreAddress;
use DB;
class ProductController extends Controller
{
    public function calculatePercentageChange($products)
    {
        foreach ($products as $product) {
            $price = $product->price;
            $offerPrice = $product->offer_price;

            if ($price > 0) {
                $percentageChange = ($price - $offerPrice) / $price * 100;
                $product->percent = number_format($percentageChange, 0);
            } else {
                $product->percent = 0;
            }
        }

        return $products;
    }

    public function getWhereParam(Request $request, $cat = null, $sub = null, $child = null, $slug = null)
    {
        // Filter parameters
        $filters = compact('cat', 'sub', 'child', 'slug');
        $sortBy = $request->query('sort');
        $slug = str_replace('.html','', $slug);
        // Get categories ordered by rank
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();
        $storeAddress = StoreAddress::where("status", "=", 1)->orderBy("id", "asc")->limit(1)->get();
        // Initialize products query
        $productsQuery = Product::query();

        // Apply filters based on provided parameters
        if ($cat) {
            $category = Category::where('slug', $cat)->first();
            if ($category) {
                $productsQuery->where('category_id', $category->id);
            }
        }

        if ($sub) {
            $subCategory = SubCategory::where('slug', $sub)->first();
            if ($subCategory) {
                $productsQuery->where('sub_category_id', $subCategory->id);
            }
        }

        if ($child) {
            $childCategory = ChildCategory::where('slug', $child)->first();
            if ($childCategory) {
                $productsQuery->where('child_category_id', $childCategory->id);
            }
        }

        if ($slug) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $productsQuery->where('id', $product->id);
            }
        }

        // Sort products by name if specified
        if ($sortBy === 'az') {
            $productsQuery->orderBy('name', 'asc');
        } elseif ($sortBy === 'za') {
            $productsQuery->orderBy('name', 'desc');
        }

        // Sort products by price if specified
        if ($sortBy === 'price_low_high') {
            $productsQuery->orderBy('offer_price', 'asc');
        } elseif ($sortBy === 'price_high_low') {
            $productsQuery->orderBy('offer_price', 'desc');
        }

        // Paginate the products
        $products = $productsQuery->paginate(16);
        // Calculate percentage change for products
        $products = $this->calculatePercentageChange($products);

        // Determine which view to render based on filtered parameters
        switch (count(array_filter($filters))) {
            case 1:
                return view('frontend.products.index', compact("categories", "category", "products", "storeAddress"));
            case 2:
                return view('frontend.products.index', compact("categories", "subCategory", "products", "storeAddress"));
            case 3:
                return view('frontend.products.index', compact("categories", "childCategory", "products", "storeAddress"));
            case 4:
                // Assuming only one product is filtered
                $product = Product::with('product_image_galleries')->findOrFail($product->id);
                $product_image_galleries = $product->product_image_galleries;

                $variants = $product->variant()->get();
                return view('frontend.products.detail', compact("categories", "product", "variants", "product_image_galleries", "product_image_galleries", "products", "storeAddress"));
            default:
                // No filters applied
                return view('frontend.products.index', compact("categories", "products", "storeAddress"));
        }
    }
}
