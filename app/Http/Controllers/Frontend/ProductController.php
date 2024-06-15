<?php

// namespace App\Http\Controllers\Frontend;

// use App\Http\Controllers\Controller;
// use App\Models\SubCategory;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// use App\Models\Category;
// use App\Models\subCategories;
// use App\Models\ChildCategory;
// use App\Models\Product;
// use App\Models\Slider;

// class ProductController extends Controller
// {
//     function calculatePercentageChange($arr)
//     {
//         $percentageChanges = [];

//         foreach ($arr as $key => $product) {
//             // dd($key, $product, $arr);
//             $price = $product->price;
//             $offerPrice = $product->offer_price;

//             if ($price > 0) {
//                 $percentageChange = ($price - $offerPrice) / $price * 100;
//                 $percentageChanges[$key] = number_format($percentageChange, 0);
//                 $product['percent'] = $percentageChanges[$key];
//             } else {
//                 $percentageChanges[$key] = 0;
//             }
//         }

//         return $arr;
//     }


//     function getRowsWhereCol($data, $col, $value)
//     {
//         // dd($data);
//         if (!empty($data)) {
//             foreach ($data as $row) {
//                 if ($row->$col == $value)
//                     return $row;
//                 else
//                     null;
//             }
//         }
//     }

//     function filterParam($paramArr)
//     {
//         $data = [];
//         $temp = null;

//         foreach ($paramArr as $key => $value) {
//             if ($key == null) {
//                 $key = 'categories';
//                 $temp = $key;
//                 $data[$key] = $this->getRowsWhereCol(Category::where('slug', '=', $value)->get(), 'slug', $value);
//             } else {
//                 $data[$key] = $this->getRowsWhereCol(empty($data[$temp]) ? null : $data[$temp]->$key, 'slug', $value);
//                 $temp = $key;
//             }
//         }

//         foreach ($data as $key => $value) {
//             if ($data[$key] == null) unset($data[$key]);
//         }

//         return $data;
//     }

//     public function getWhereParam($cat = null, $sub = null, $child = null, $slug = null)
//     {
//         $params = [
//             null => $cat,
//             'subCategories' => $sub,
//             'childCategory' => $child,
//             'products' => $slug
//         ];
//         $d = $this->filterParam($params);
//         // dd($d);

//         $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();

//         if (count($d) == 1) {
//             $category = $d['categories'];
//             $products = $category->products()->paginate(15);
//             $products = $this->calculatePercentageChange($products);
//             return view('frontend.products.index', compact("categories", "category", "products"));
//         } else if (count($d) == 2) {
//             $subCategory = $d['subCategories'];
//             $products = $subCategory->products()->paginate(15);
//             $products = $this->calculatePercentageChange($products);
//             // dd($categories);
//             return view('frontend.products.index', compact("categories","subCategory", "products"));
//         } else if (count($d) == 3) {
//             $childCategory = $d['childCategory'];
//             $products = $childCategory->products()->paginate(15);
//             $products = $this->calculatePercentageChange($products);
//             // dd($categories);
//             return view('frontend.products.index', compact("categories", "childCategory", "products"));
//         } else if (count($d) == 4) {
//             $product = $d['products'];
//             $categoryId = $product->ProductHasOneCat->id;

//             $products = Product::where("category_id", "=", $categoryId)->get();
//             $products = $this->calculatePercentageChange($products);
//             $product_image_galleries = $product->product_image_galleries()->get();
//             $variants = $product->variant()->get();
//             return view('frontend.products.detail', compact("categories", "product", "product_image_galleries", "variants", 'products'));
//         } else if (count($d) == 0) {
//             $products = Product::paginate(15);
//             $products = $this->calculatePercentageChange($products);
//             return view('frontend.products.index', compact("categories", "products"));
//         }
//     }

// }




namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\ChildCategory;

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

        // Get categories ordered by rank
        $categories = Category::where("status", "=", 1)->orderBy("rank", "asc")->get();

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
        $products = $productsQuery->paginate(15);

        // Calculate percentage change for products
        $products = $this->calculatePercentageChange($products);

        // Determine which view to render based on filtered parameters
        switch (count(array_filter($filters))) {
            case 1:
                return view('frontend.products.index', compact("categories", "category", "products"));
            case 2:
                return view('frontend.products.index', compact("categories", "subCategory", "products"));
            case 3:
                return view('frontend.products.index', compact("categories", "childCategory", "products"));
            case 4:
                // Assuming only one product is filtered
                $product = $products->first();
                $product_image_galleries = $product->product_image_galleries()->get();
                $variants = $product->variant()->get();
                return view('frontend.products.detail', compact("categories", "product", "product_image_galleries", "variants", 'products'));
            default:
                // No filters applied
                return view('frontend.products.index', compact("categories", "products"));
        }
    }
}
