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
            // id 1
            [
                "name"=> "Điện thoại",
                "slug" => "dien-thoai",
                "image" => "cate_dienthoai.webp",
                "rank" => 1,
                "status" => 1
            ],
            // id 2
            [
                "name"=> "Laptop",
                "slug" => "laptop",
                "image" => "cate_laptop.webp",
                "rank" => 2,
                "status" => 1
            ],
            // id 3
            [
                "name"=> "Âm thanh",
                "slug" => "am-thanh",
                "image" => "cate_amthanh.webp",
                "rank" => 3,
                "status" => 1
            ],
            // id 4
            [
                "name"=> "Đồng Hồ",
                "slug" => "dong-ho",
                "image" => "cate_dongho.webp",
                "rank" => 4,
                "status" => 1
            ],
            // id 5
            [
                "name"=> "Gia Dụng",
                "slug" => "gia-dung",
                "image" => "cate_giadung.webp",
                "rank" => 5,
                "status" => 1
            ],
             // id 6 
            [
                "name"=> "Phụ Kiện",
                "slug" => "phu-kien",
                "image" => "cate_phukien.webp",
                "rank" => 6,
                "status" => 1
            ],
            // id 7 
            [
                "name"=> "Màn Hình",
                "slug" => "man-hinh",
                "image" => "cate_pc.webp",
                "rank" => 7,
                "status" => 1
            ],
            // id 8 
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
