<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                [
                    'name' => 'iphone '. rand(11, 15). collect([' ', ' Pro', ' ProMax'])->random(). collect([' 64', ' 128', ' 256', ' 512', ' 1TB'])->random(),
                    'slug' => 'iphone-lo',
                    'image' => 'iphone_'.rand(1, 10).'.png',
                    'qty' => 100,
                    'price' => round(rand(29000000, 33900000)/10) *10,
                    'offer_price' => round(rand(10900000, 25900000)/10) *10,
                    'offer_start_date' => now(),
                    'sku' => 'iphone',
                    'video_link' => 'linkseg.mp4',
                    'long_description' => 'mô tả',
                    'short_description' => 'mô tả',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 1,
                    'weight' => 1.2,
                    'sub_category_id' => 1,
                    'child_category_id' => 1,
                    'created_at'=> now(),
                ]
            ]);
        }
    }
}
