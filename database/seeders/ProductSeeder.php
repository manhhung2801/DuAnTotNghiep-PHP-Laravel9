<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $nameIP = 'iPhone '. rand(11, 15). ' '. collect([' ', 'Pro ', 'ProMax '])->random(). collect(['64GB ', '128GB ', '256GB ', '512GB ', '1TB '])->random();
            $nameLap = 'Apple Macbook Air '. collect([' ', 'M1 ', 'M2 ', 'M3 '])->random(). collect([' ', 'Pro '])->random(). collect(['2019 ', '2020 ', '2021 ', '2022 ', '2023 '])->random(). collect([' 64GB ', ' 128GB ', '256GB ', ' 512GB ', ' 1TB '])->random();
            $nameSound = collect('Tai nghe Bluetooth ', 'Loa Bluetooth ')->random().collect(['True Wireless JBL ', 'JBL Quantum '])->random();
            $namePhukien = collect('Phụ Kiện ', 'Ốp lưng ', 'Cáp sạt ')->random().collect(['IPhone ', 'Samsung '])->random(). collect([' ', 'Pro ', 'ProMax '])->random();
            
            DB::table('products')->insert([
                [
                    'name' => $nameIP,
                    'slug' => Str::slug($nameIP .rand(1,990), '-'),
                    'image' => 'iphone_0'.rand(1, 9).'.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000)/100000) *100000,
                    'offer_price' => round(rand(10900000, 25900000)/100000) *100000,
                    'offer_start_date' => now(),
                    'sku' => 'SPIP'. rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => 'mô tả',
                    'specifications' => 'Thông số kĩ thuật',
                    'product_type' => 'new',
                    'seo_title' => '',
                    'seo_description' => '',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => rand(1, 5),
                    'created_at'=> now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $nameLap,
                    'slug' => Str::slug($nameLap .rand(1,990), '-'),
                    'image' => 'mac_0'.rand(1, 9).'.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000)/10000) *10000,
                    'offer_price' => round(rand(15900000, 2900000)/10000) *10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPLP'. rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => 'mô tả',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 2,
                    'weight' => 0.8,
                    'sub_category_id' => 16,
                    'child_category_id' => rand(21, 25),
                    'created_at'=> now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $nameSound,
                    'slug' => Str::slug($nameSound .rand(1,990), '-'),
                    'image' => 'sound_0'.rand(1, 9).'.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000)/10000) *10000,
                    'offer_price' => round(rand(15900000, 2900000)/10000) *10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPSD'. rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => 'mô tả',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 3,
                    'weight' => 0.8,
                    'sub_category_id' => 28,
                    'child_category_id' => rand(43, 47),
                    'created_at'=> now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $namePhukien,
                    'slug' => Str::slug($namePhukien .rand(1,990), '-'),
                    'image' => 'phukien_0'.rand(1, 9).'.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000)/10000) *10000,
                    'offer_price' => round(rand(15900000, 2900000)/10000) *10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPPK'. rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => 'mô tả',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 6,
                    'weight' => 0.8,
                    'sub_category_id' => 52,
                    'child_category_id' => 48,
                    'created_at'=> now(),
                ]
            ]);
        }
    }
}
