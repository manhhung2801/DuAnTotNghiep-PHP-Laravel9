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
                "image" => "sub_iphone.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Samsung",
                "slug" => "samsung",
                "image" => "sub_samsung.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "image" => "sub_xiaomi.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "OPPO",
                "slug" => "oppo",
                "image" => "sub_oppo.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "name" => "realme",
                "slug" => "realme",
                "image" => "sub_realme.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "vivo",
                "slug" => "vivo",
                "image" => "sub_vivo.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "ASUS",
                "slug" => "asus",
                "image" => "sub_asus.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Infinix",
                "slug" => "infinix",
                "image" => "sub_infinix.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Nokia",
                "slug" => "nokia",
                "image" => "sub_nokia.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "TECNO",
                "slug" => "tecno",
                "image" => "sub_tecno.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Nubia, ZTE",
                "slug" => "nubia-zte",
                "image" => "sub_nubia.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "OnePlus",
                "slug" => "oneplus",
                "image" => "sub_oneplus.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Benco",
                "slug" => "benco",
                "image" => "sub_benco.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Masstel",
                "slug" => "masstel",
                "image" => "sub_masstel.webp",
                "status" => 0
            ],
            [
                "category_id" => 1,
                "name" => "Itel",
                "slug" => "itel",
                "image" => "sub_itel.webp",
                "status" => 0
            ],
            // Điện thoại, Tablet id = 1

            // Laptop id = 2
            [
                "category_id" => 2,
                "name" => "Mac",
                "slug" => "mac",
                "image" => "sub_mac.webp",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "ASUS",
                "slug" => "asus-laptop",
                "image" => "sub_asus.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Lenovo",
                "slug" => "lenovo",
                "image" => "sub_lenova.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Dell",
                "slug" => "dell",
                "image" => "sub_dell.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "HP",
                "slug" => "hp",
                "image" => "sub_hp.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Acer",
                "slug" => "acer",
                "image" => "sub_acer.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "LG",
                "slug" => "lg",
                "image" => "sub_lg.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Huawei",
                "slug" => "huawei",
                "image" => "sub_huawei.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "MSI",
                "slug" => "msi",
                "image" => "sub_msi.webp",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "name" => "Gigabyte",
                "slug" => "gigabyte",
                "image" => "sub_gigabyte.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Vaio",
                "slug" => "vaio",
                "image" => "sub_vaio.webp",
                "status" => 0
            ],
            [
                "category_id" => 2,
                "name" => "Microsoft Surface",
                "slug" => "microsoft-surface",
                "image" => "sub_microsoft.webp",
                "status" => 0
            ],
            // Laptop id = 2

            // Âm thanh id = 3
            [
                "category_id" => 3,
                "name" => "Bluetooth",
                "slug" => "bluetooth",
                "image" => "sub_bluetooth.webp",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Chụp tai",
                "slug" => "chup-tai",
                "image" => "sub_chuptai.webp",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Nhét tai",
                "slug" => "nhet-tai",
                "image" => "sub_nhettai.webp",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Có dây",
                "slug" => "co-day",
                "image" => "sub_coday.webp",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Thể thao",
                "slug" => "the-thao",
                "image" => "sub_thethao.webp",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "name" => "Gaming",
                "slug" => "gaming",
                "image" => "sub_gaming.webp",
                "status" => 1
            ],
            // Âm thanh id = 3

            // Đồng Hồ, Camera id = 4
            [
                "category_id" => 4,
                "name" => "Đồng hồ thông minh",
                "slug" => "dong-ho-thong-minh",
                "image" => "sub_dhtm.webp",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Vòng đeo tay thông minh",
                "slug" => "vong-deo-tay-thong-minh",
                "image" => "sub_vdttm.webp",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Đồng hồ định vị trẻ em",
                "slug" => "dong-ho-dinh-vi-tre-em",
                "image" => "sub_dhdv.webp",
                "status" => 1
            ],
            [
                "category_id" => 4,
                "name" => "Dây đeo",
                "slug" => "day-deo",
                "image" => "sub_daydeo.webp",
                "status" => 1
            ],
            // Đồng Hồ, Camera id = 4

            // Gia Dụng, Smarthome id = 5
            [
                "category_id" => 5,
                "name" => "Nồi chiên không dầu",
                "slug" => "noi-chien-khong-dau",
                "image" => "sub_noichien.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy rửa bát",
                "slug" => "may-rua-bat",
                "image" => "sub_mayruabat.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Lò vi sóng",
                "slug" => "lo-vi-song",
                "image" => "sub_lovisong.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi cơm điện",
                "slug" => "noi-com-dien",
                "image" => "sub_noicom.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy xay sinh tố",
                "slug" => "may-xay-sinh-to",
                "image" => "sub_mayxay.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy ép trái cây",
                "slug" => "may-ep-trai-cay",
                "image" => "sub_mayeptraicay.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy làm sữa hạt",
                "slug" => "may-lam-sua-hat",
                "image" => "sub_maylamsua.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Bếp điện",
                "slug" => "bep-dien",
                "image" => "sub_bepdien.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Ấm siêu tốc",
                "slug" => "am-sieu-toc",
                "image" => "sub_amsieutoc.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi áp suất",
                "slug" => "noi-ap-suat",
                "image" => "sub_noiapsuat.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Nồi nấu ",
                "slug" => "noi-nau",
                "image" => "sub_noinau.webp",
                "status" => 1
            ],
            [
                "category_id" => 5,
                "name" => "Máy ép ",
                "slug" => "may-ep",
                "image" => "sub_mayep.webp",
                "status" => 1
            ],
            // Gia Dụng, Smarthome id = 5

            // Phụ Kiện id = 6
            [
                "category_id" => 6,
                "name" => "Phụ kiện Apple",
                "slug" => "phu-kien-apple",
                "image" => "sub_phukienapple.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Dán màn hình",
                "slug" => "dan-man-hinh",
                "image" => "sub_danmanhinh.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Ốp lưng - Bao da",
                "slug" => "op-lung-bao-da",
                "image" => "sub_oplung.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Thẻ nhớ",
                "slug" => "the-nho",
                "image" => "sub_thenho.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Apple Care+",
                "slug" => "apple-care-plus",
                "image" => "sub_applecare.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Samsung Care+",
                "slug" => "samsung-care-plus",
                "image" => "sub_samsungcare.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Sim 4G",
                "slug" => "sim-4g",
                "image" => "sub_sim4g.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Cáp, sạc",
                "slug" => "cap-sac",
                "image" => "sub_capsac.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Pin dự phòng",
                "slug" => "pin-du-phong",
                "image" => "sub_duphong.webp",
                "status" => 1
            ],
            [
                "category_id" => 6,
                "name" => "Phụ kiện điện thoại",
                "slug" => "phu-kien-dien-thoai",
                "image" => "sub_phukien.webp",
                "status" => 1
            ],
            // Phụ Kiện id = 6

            // PC, Màn Hình id = 7
            [
                "category_id" => 7,
                "name" => "ASUS",
                "slug" => "asus",
                "image" => "sub_asus.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Samsung",
                "slug" => "samsung",
                "image" => "sub_samsung.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "DELL",
                "slug" => "dell",
                "image" => "sub_dell.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "LG",
                "slug" => "lg",
                "image" => "sub_lg.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "MSI",
                "slug" => "msi",
                "image" => "sub_msi.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Acer",
                "slug" => "acer",
                "image" => "sub_acer.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "image" => "sub_xiaomi.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "ViewSonic",
                "slug" => "viewsonic",
                "image" => "sub_viewsonic.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "Philips",
                "slug" => "philips",
                "image" => "sub_philips.webp",
                "status" => 1
            ],
            [
                "category_id" => 7,
                "name" => "AOC",
                "slug" => "aoc",
                "image" => "sub_aoc.webp",
                "status" => 1
            ],
            // PC, Màn Hình id = 7

            // Tivi id = 8
            [
                "category_id" => 8,
                "name" => "Samsung",
                "slug" => "samsung",
                "image" => "sub_samsung.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "LG",
                "slug" => "lg",
                "image" => "sub_lg.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "image" => "sub_xiaomi.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Coocaa",
                "slug" => "coocaa",
                "image" => "sub_coocaa.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Sony",
                "slug" => "sony",
                "image" => "sub_sony.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "Toshiba",
                "slug" => "toshiba",
                "image" => "sub_toshiba.webp",
                "status" => 1
            ],
            [
                "category_id" => 8,
                "name" => "TCL",
                "slug" => "tcl",
                "image" => "sub_tcl.webp",
                "status" => 1
            ],
            // Tivi id = 9
        ];

        foreach ($sub_categories as $subCategory) {
            DB::table('sub_categories')->insert([
                "category_id" => $subCategory['category_id'],
                "name" => $subCategory['name'],
                "slug" => $subCategory['slug'],
                "image" => $subCategory['image'],
                "status" => $subCategory['status']
            ]);
        }
    }
}
