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
                "image" => "dienthoai.svg",
                "rank" => 1,
                "status" => 1
            ],
            [
                "name"=> "Laptop",
                "slug" => "laptop",
                "image" => "laptop.svg",
                "rank" => 2,
                "status" => 1
            ],
            [
                "name"=> "Âm thanh",
                "slug" => "am-thanh",
                "image" => "amthanh.svg",
                "rank" => 3,
                "status" => 1
            ],
            [
                "name"=> "Đồng Hồ, Camera",
                "slug" => "dong-ho-camera",
                "image" => "dongho.svg",
                "rank" => 4,
                "status" => 1
            ],
            [
                "name"=> "Gia Dụng, Smarthome",
                "slug" => "gia-dung-smarthome",
                "image" => "giadung.svg",
                "rank" => 5,
                "status" => 1
            ],
            [
                "name"=> "Phụ Kiện",
                "slug" => "phu-kien",
                "image" => "phukien.svg",
                "rank" => 6,
                "status" => 1
            ],
            [
                "name"=> "PC, Màn Hình",
                "slug" => "pc-man-hinh",
                "image" => "pc.png",
                "rank" => 7,
                "status" => 1
            ],
            [
                "name"=> "Tivi",
                "slug" => "tivi",
                "image" => "tivi.png",
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
