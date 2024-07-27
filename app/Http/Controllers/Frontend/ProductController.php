<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProductComments;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\VariantItem;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\StoreAddress;
use DB;
use Illuminate\Http\RedirectResponse;

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

    public function getWhereParam(Request $request, $cat = null, $sub = null, $child = null, $slug = null, $searchTerm = null)
    {
        // Filter parameters
        $filters = compact('cat', 'sub', 'child', 'slug');
        $sortBy = $request->query('sort');
        $slug = str_replace('.html', '', $slug);

        // Initialize products query
        $productsQuery = Product::query();

        // áp dụng search cho filter
        if ($searchTerm) {
            $productsQuery->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Apply filters based on provided parameters
        if ($cat) {
            $category = Category::where('slug', $cat)->first();
            if ($category) {
                $productsQuery->where('category_id', $category->id);
            } else return view("404");
        }

        if ($sub) {
            $subCategory = SubCategory::where('slug', $sub)->first();
            if ($subCategory) {
                $productsQuery->where('sub_category_id', $subCategory->id);
            } else return view("404");
        }

        if ($child) {
            $childCategory = ChildCategory::where('slug', $child)->first();
            if ($childCategory) {
                $productsQuery->where('child_category_id', $childCategory->id);
            } else return view("404");
        }

        if ($slug) {
            $product = Product::where('slug', $slug)->first();
            if ($product) {
                $productsQuery->where('id', $product->id);
            } else return view("404");
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
                return view('frontend.products.index', compact("category", "products"));
            case 2:
                return view('frontend.products.index', compact("subCategory", "products"));
            case 3:
                return view('frontend.products.index', compact("childCategory", "products"));
            case 4:
                //Lấy quantity để check
                $getQtyCart = \Cart::get($product->id);

                // Assuming only one product is filtered
                $product = Product::with('ProductImageGalleries')->findOrFail($product->id);
                $ProductImageGalleries = $product->ProductImageGalleries;
                $variants = $product->variant()->get();

                $comments = ProductComments::where('product_id', $product->id)
                    ->with('user')
                    ->get();

                $variants = $product->variant();
                // Lấy danh sách các id của các sản phẩm liên quan (cùng danh mục) trừ sản phẩm ban đầu
                $relatedProductIds = Product::where('category_id', $product->category_id)->where('sub_category_id', $product->sub_category_id)->where('child_category_id', $product->child_category_id)
                    ->where('id', '!=', $product->id) // Loại trừ sản phẩm ban đầu
                    ->pluck('id');
                // Lấy các sản phẩm liên quan dựa trên danh sách id đã lấy được
                $relatedProducts = Product::whereIn('id', $relatedProductIds)
                    ->orderBy('created_at', 'desc')
                    ->limit(4)
                    ->get();
                return view('frontend.products.detail', compact("product", "variants", "ProductImageGalleries", "products", "relatedProducts", "comments", "getQtyCart"));
            default:
                $categories = Category::get();
                // No filters applied
                return view('frontend.products.index', compact("categories", "products"));
        }
    }

    public function search(Request $request)
    {
        $searchTerm = $request->query('search');
        return $this->getWhereParam($request, null, null, null, null, $searchTerm);
    }
}
