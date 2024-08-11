<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->shouldCrawl(function ($url) {
                // Loại bỏ tất cả các URL chứa '/admin', '/private', hoặc '/hidden'
                $excludedPatterns = ['/admin', '/checkout', '/cart', '/ghtk', '/api', '/applyCouponCode'];

                foreach ($excludedPatterns as $pattern) {
                    if (str_contains($url, $pattern)) {
                        return false; // Loại bỏ URL khỏi sitemap
                    }
                }
                
                // Loại bỏ URL có tham số truy vấn
                if (parse_url($url, PHP_URL_QUERY)) {
                    return false; // Loại bỏ URL khỏi sitemap nếu có tham số truy vấn
                }

                return true; // Bao gồm URL trong sitemap
            })
            ->writeToFile(public_path('sitemap.xml'));
    }
}
