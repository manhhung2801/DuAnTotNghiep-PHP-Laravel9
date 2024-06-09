<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_categories = [
            // Điện thoại, Tablet id = 1
            [
                "category_id" => 1,
                "name" => "iPhone",
                "slug" => "iphone",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Samsung",
                "slug" => "samsung",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "OPPO",
                "slug" => "oppo",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "realme",
                "slug" => "realme",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "vivo",
                "slug" => "vivo",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "ASUS",
                "slug" => "asus",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Infinix",
                "slug" => "infinix",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Nokia",
                "slug" => "nokia",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "TECNO",
                "slug" => "tecno",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Nubia, ZTE",
                "slug" => "nubia-zte",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "OnePlus",
                "slug" => "oneplus",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Benco",
                "slug" => "benco",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Masstel",
                "slug" => "masstel",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Itel",
                "slug" => "itel",
                "status" => 1
            ],
             // Điện thoại, Tablet id = 1

            // Laptop id = 2
            [
                "category_id" => 2,
                "name" => "Mac",
                "slug" => "mac",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "ASUS",
                "slug" => "asus-laptop",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Lenovo",
                "slug" => "lenovo",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Dell",
                "slug" => "dell",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "HP",
                "slug" => "hp",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Acer",
                "slug" => "acer",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "LG",
                "slug" => "lg",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Huawei",
                "slug" => "huawei",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "MSI",
                "slug" => "msi",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Gigabyte",
                "slug" => "gigabyte",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Vaio",
                "slug" => "vaio",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Microsoft Surface",
                "slug" => "microsoft-surface",
                "status" => 1
            ],
            // Laptop id = 2

            // Âm thanh id = 3
            [
                "category_id" => 3,
                "name" => "Bluetooth",
                "slug" => "bluetooth",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Chụp tai",
                "slug" => "chup-tai",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Nhét tai",
                "slug" => "nhet-tai",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Có dây",
                "slug" => "co-day",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Thể thao",
                "slug" => "the-thao",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Gaming",
                "slug" => "gaming",
                "status" => 1
            ],
            // Âm thanh id = 3

            // Đồng Hồ, Camera id = 4
            [
                "category_id" => 4,
                "name" => "Đồng hồ thông minh",
                "slug" => "dong-ho-thong-minh",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Vòng đeo tay thông minh",
                "slug" => "vong-deo-tay-thong-minh",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Đồng hồ định vị trẻ em",
                "slug" => "dong-ho-dinh-vi-tre-em",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Dây đeo",
                "slug" => "day-deo",
                "status" => 1
            ],
            // Đồng Hồ, Camera id = 4

            // Gia Dụng, Smarthome id = 5
            [
                "category_id" => 5,
                "name" => "Nồi chiên không dầu",
                "slug" => "noi-chien-khong-dau",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy rửa bát",
                "slug" => "may-rua-bat",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Lò vi sóng",
                "slug" => "lo-vi-song",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi cơm điện",
                "slug" => "noi-com-dien",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy xay sinh tố",
                "slug" => "may-xay-sinh-to",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy ép trái cây",
                "slug" => "may-ep-trai-cay",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy làm sữa hạt",
                "slug" => "may-lam-sua-hat",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Bếp điện",
                "slug" => "bep-dien",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Ấm siêu tốc",
                "slug" => "am-sieu-toc",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi áp suất",
                "slug" => "noi-ap-suat",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi nấu chậm",
                "slug" => "noi-nau-cham",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy ép chậm",
                "slug" => "may-ep-cham",
                "status" => 1
            ],
            // Gia Dụng, Smarthome id = 5

            // Phụ Kiện id = 6
            [
                "category_id" => 6,
                "name" => "Phụ kiện Apple",
                "slug" => "phu-kien-apple",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Dán màn hình",
                "slug" => "dan-man-hinh",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Ốp lưng - Bao da",
                "slug" => "op-lung-bao-da",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Thẻ nhớ",
                "slug" => "the-nho",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Apple Care+",
                "slug" => "apple-care-plus",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Samsung Care+",
                "slug" => "samsung-care-plus",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Sim 4G",
                "slug" => "sim-4g",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Cáp, sạc",
                "slug" => "cap-sac",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Pin dự phòng",
                "slug" => "pin-du-phong",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Phụ kiện điện thoại",
                "slug" => "phu-kien-dien-thoai",
                "status" => 1
            ],
            // Phụ Kiện id = 6

            // PC, Màn Hình id = 7
            [
                "category_id" => 7,
                "name" => "ASUS",
                "slug" => "asus",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Samsung",
                "slug" => "samsung",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "DELL",
                "slug" => "dell",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "LG",
                "slug" => "lg",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "MSI",
                "slug" => "msi",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Acer",
                "slug" => "acer",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "ViewSonic",
                "slug" => "viewsonic",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Philips",
                "slug" => "philips",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "AOC",
                "slug" => "aoc",
                "status" => 1
            ],
            // PC, Màn Hình id = 7

            // Tivi id = 8
            [
                "category_id" => 8,
                "name" => "Samsung",
                "slug" => "samsung",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "LG",
                "slug" => "lg",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Coocaa",
                "slug" => "coocaa",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Sony",
                "slug" => "sony",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Toshiba",
                "slug" => "toshiba",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "TCL",
                "slug" => "tcl",
                "status" => 1
            ],
            // Tivi id = 9
        ];

        foreach($sub_categories as $subCategory) {
            DB::table('sub_categories')->insert([
                "category_id" => $subCategory['category_id'],
                "name" => $subCategory['name'],
                "slug" => $subCategory['slug'],
                "status" => $subCategory['status']
            ]);
        }
    }
}
