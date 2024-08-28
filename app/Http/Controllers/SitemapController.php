<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        // SitemapGenerator::create(config('app.url'))
        //     ->shouldCrawl(function ($url) {
        //         // Loại bỏ tất cả các URL chứa '/admin', '/private', hoặc '/hidden'
        //         $excludedPatterns = ['/admin', '/checkout', '/cart', '/ghtk', '/api', '/applyCouponCode'];

        //         foreach ($excludedPatterns as $pattern) {
        //             if (str_contains($url, $pattern)) {
        //                 return false; // Loại bỏ URL khỏi sitemap
        //             }
        //         }

        //         return true; // Bao gồm URL trong sitemap
        //     })
        //     ->writeToFile(public_path('sitemap.xml'));
        SitemapGenerator::create('https://cybermart.io.vn')->writeToFile(public_path('sitemap.xml'));
    }
}
