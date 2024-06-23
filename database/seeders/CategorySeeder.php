<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cagtegories = [
            [
                "name"=> "Điện thoại, Tablet",
                "slug" => "dien-thoai-tablet",
                "image" => "cate_dienthoai.webp",
                "rank" => 1,
                "status" => 1
            ],
            [
                "name"=> "Laptop",
                "slug" => "laptop",
                "image" => "cate_laptop.webp",
                "rank" => 2,
                "status" => 1
            ],
            [
                "name"=> "Âm thanh",
                "slug" => "am-thanh",
                "image" => "cate_amthanh.webp",
                "rank" => 3,
                "status" => 1
            ],
            [
                "name"=> "Đồng Hồ",
                "slug" => "dong-ho",
                "image" => "cate_dongho.webp",
                "rank" => 4,
                "status" => 1
            ],
            [
                "name"=> "Gia Dụng, Smarthome",
                "slug" => "gia-dung-smarthome",
                "image" => "cate_giadung.webp",
                "rank" => 5,
                "status" => 1
            ],
            [
                "name"=> "Phụ Kiện",
                "slug" => "phu-kien",
                "image" => "cate_phukien.webp",
                "rank" => 6,
                "status" => 1
            ],
            // c
            [
                "name"=> "PC, Màn Hình",
                "slug" => "pc-man-hinh",
                "image" => "cate_pc.webp",
                "rank" => 7,
                "status" => 1
            ],
            // c
            [
                "name"=> "Tivi",
                "slug" => "tivi",
                "image" => "cate_tivi.webp",
                "rank" => 8,
                "status" => 1
            ]
        ];

        foreach($cagtegories as $cagtegory) {
            DB::table('categories')->insert([
                "name"=> $cagtegory['name'],
                "slug" => $cagtegory['slug'],
                "image" => $cagtegory['image'],
                "rank" => $cagtegory['rank'],
                "status" => $cagtegory['status']
            ]);
        }
    }
}
