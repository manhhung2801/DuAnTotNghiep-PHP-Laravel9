<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\StoreAddress;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Compose the navbar view with categories and store address
        View::composer('frontend.layouts.master', function ($view) {
            $categories = Category::where('status', 1)->orderBy('rank', 'asc')->get();
            $storeAddress = StoreAddress::where("status", "=", 1)->limit(1)->get();
            $ListPageCategories = PageCategory::where('id', '!=', 3)->get();
            $countAddress = StoreAddress::where("status", "=", 1)->count();
            $qtyCart = \Cart::getTotalQuantity();
            $ListPage = Page::where("status", "=", 1)->get();
            $view->with('categories', $categories)
                ->with('storeAddress', $storeAddress)
                ->with('ListPageCategories', $ListPageCategories)
                ->with('ListPage', $ListPage)
                ->with('qtyCart', $qtyCart)
                ->with('countAddress', $countAddress);
        });
    }
}
