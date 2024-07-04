<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Information;
use App\Models\Page;
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
            $ListInformation = Information::where('name', '!=', 'Giới thiệu')->get();
            $qtyCart = \Cart::getTotalQuantity();
            $ListPage = Page::where("status", "=", 1) ->get();
            $view->with('categories', $categories)
                ->with('storeAddress', $storeAddress)
                ->with('ListInformation', $ListInformation)
                ->with('ListPage', $ListPage)
                ->with('qtyCart', $qtyCart);
        });
    }
}
