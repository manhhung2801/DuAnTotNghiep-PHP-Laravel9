<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $child_cagtegories = [

            //categories id = 1, sub_categories iPhone id = 1
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 15 SERIES",
                "slug" => "iphone-15-series",
                "image" => "iphone_15.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 14 SERIES",
                "slug" => "iphone-14-series",
                "image" => "iphone_14.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 13 SERIES",
                "slug" => "iphone-13-series",
                "image" => "iphone_13.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 12 SERIES",
                "slug" => "iphone-12-series",
                "image" => "iphone_12.webp",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 11 SERIES",
                "slug" => "iphone-11-series",
                "image" => "iphone_11.webp",
                "status" => 1
            ],
            //categories id = 1, sub_categories iPhone id = 1

            //categories id = 1, sub_categories Samsung id = 2

            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY S",
                "slug" => "galaxy-s",
                "image" => 'samsung_s.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY A",
                "slug" => "galaxy-a",
                "image" => 'samsung_a.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY M",
                "slug" => "galaxy-m",
                "image" => 'samsung_m.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY Z",
                "slug" => "galaxy-z",
                "image" => 'samsung_z.webp',
                "status" => 1
            ],
            //categories id = 1, sub_categories Samsung id = 2

            //categories id = 1, sub_categories Xiaomi id = 3
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "XIAOMI 13 SERIES",
                "slug" => "xiaomi-13-series",
                "image" => 'xiaomi-13-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "XIAOMI 12 SERIES",
                "slug" => "xiaomi-12-series",
                "image" => 'xiaomi-12-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 13 SERIES",
                "slug" => "note-13-series",
                "image" => 'note-13-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 12 SERIES",
                "slug" => "note-12-series",
                "image" => 'note-12-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 11 SERIES",
                "slug" => "note-11-series",
                "image" => 'note-11-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "REDMI SERIES",
                "slug" => "redmi-series",
                "image" => 'redmi-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "POCO SERIES",
                "slug" => "poco-series",
                "image" => 'poco-series.webp',
                "status" => 1
            ],
            //categories id = 1, sub_categories Xiaomi id = 3

            //categories id = 1, sub_categories OPPO id = 4
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "A SERIES",
                "slug" => "a-series",
                "image" => 'oppo_a_series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "FIND X SERIES",
                "slug" => "find-x-series",
                "image" => 'oppo_find_x_series.webp',
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "RENO SERIES",
                "slug" => "reno-series",
               "image" => 'oppo_reno_series.webp',
                "status" => 1
            ],
            //categories id = 1, sub_categories OPPO id = 4

            //categories id = 2, sub_categories Mac id = 16
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "RENO SERIES",
                "slug" => "reno-series",
                "image" => 'reno-series.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MACBOOK AIR",
                "slug" => "macbook-air",
                "image" => 'macbook-air.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MACBOOK PRO",
                "slug" => "macbook-pro",
                "image" => 'macbook-pro.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MAC MINI",
                "slug" => "mac-mini",
                "image" => 'mac-mini.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MAC STUDIO",
                "slug" => "mac-studio",
                "image" => 'mac-studio.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "IMAC",
                "slug" => "imac",
                "image" => 'imac.webp',
                "status" => 1
            ],
            //categories id = 2, sub_categories Mac id = 16

            //categories id = 2, sub_categories ASUS id = 17

            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "VIVOBOOK",
                "slug" => "vivobook",
              "image" => 'vivobook.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "GAMING",
                "slug" => "gaming",
              "image" => 'gaming1.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "ZENBOOK",
                "slug" => "zenbook",
              "image" => 'zenbook.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "EXPERTBOOK",
                "slug" => "expertbook",
              "image" => 'expertbook.webp',
                "status" => 1
            ],
            //categories id = 2, sub_categories ASUS id = 17

            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "IDEAPAD",
                "slug" => "ideapad",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "THINKPAD",
                "slug" => "thinkpad",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "GAMING",
                "slug" => "gaming",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "YOGA",
                "slug" => "yoga",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "THINKBOOK",
                "slug" => "thinkbook",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "V SERIES",
                "slug" => "v-series",
                "image" => NULL,
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "LOQ",
                "slug" => "loq",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "INSPIRON",
                "slug" => "inspiron",
                "image" => 'inspiron.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "VOSTRO",
                "slug" => "vostro",
                "image" => 'vostro.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "XPS",
                "slug" => "xps",
                "image" => 'imac.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "GAMING",
                "slug" => "gaming",
                "image" => 'gaming2.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "LATITUDE",
                "slug" => "latitude",
                "image" => 'latitude.webp',
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "ALIENWARE",
                "slug" => "alienware",
                "image" => 'alienware.webp',
                "status" => 1
            ], [
                "category_id" => 2,
                "sub_category_id" => 24,
                "name" => "Gaming",
                "slug" => "Gaming",
                "image" => 'Gaming.webp',
                "status" => 1
            ], [
                "category_id" => 2,
                "sub_category_id" => 24,
                "name" => "Katana",
                "slug" => "Katana",
                "image" => 'Katana.webp',
                "status" => 1
            ], [
                "category_id" => 2,
                "sub_category_id" => 24,
                "name" => "Modern",
                "slug" => "Modern",
                "image" => 'Modern.webp',
                "status" => 1
            ],

            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Sony",
                "slug" => "sony",
                "image" => 'sony.webp',
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "JBL",
                "slug" => "jbl",
                "image" => 'jbl.webp',
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Soundpeats",
                "slug" => "soundpeats",
                "image" => 'soundpeats.webp',
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Havit",
                "slug" => "havit",
                "image" => 'havit.webp',
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Samsung",
                "slug" => "samsung",
                "image" => 'samsung.webp',
                "status" => 1
            ],
            //categories id = 4, sub_categories Đồng hồ thông minh id = 34
            [
                "category_id" => 4,
                "sub_category_id" => 34,
                "name" => "SamSung",
                "slug" => "sam-sung",
                "image" => 'sam-sung.webp',
                "status" => 1
            ], [
                "category_id" => 4,
                "sub_category_id" => 34,
                "name" => "Xiaomi",
                "slug" => "xiaomi",
                "image" => 'xiaomi1.webp',
                "status" => 1
            ], [
                "category_id" => 4,
                "sub_category_id" => 34,
                "name" => "Oppo",
                "slug" => "oppo",
                "image" => 'oppo1.webp',
                "status" => 1
            ],
            //categories id = 5, sub_categories Nồi chiên không dầu id = 38
            [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "Philips",
                "slug" => "philips",
                  "image" => 'philips.webp',
                "status" => 1
            ], [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "Sharp",
                "slug" => "sharp",
                  "image" => 'sharp.webp',
                "status" => 1
            ], [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "Boar",
                "slug" => "boar",
                  "image" => 'boar.webp',
                "status" => 1
            ], [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "Kangaroo",
                "slug" => "kangaroo",
                  "image" => 'kangaroo.webp',
                "status" => 1
            ], [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "Kilite",
                "slug" => "kalite",
                  "image" => 'kalite.webp',
                "status" => 1
            ], [
                "category_id" => 5,
                "sub_category_id" => 38,
                "name" => "BlueStone",
                "slug" => "bluestone",
                  "image" => 'bluestone.webp',
                "status" => 1
            ],
            //categories id = 6, sub_categories Phụ kiện Apple id = 50
            [
                "category_id" => 6,
                "sub_category_id" => 50,
                "name" => "Cáp, sạc",
                "slug" => "cap-sac",
                  "image" => 'cap-sac.webp',
                "status" => 1
            ], [
                "category_id" => 6,
                "sub_category_id" => 50,
                "name" => "Ốp lưng, bao da",
                "slug" => "op-lung",
                  "image" => 'op-lung.webp',
                "status" => 1
            ], [
                "category_id" => 6,
                "sub_category_id" => 50,
                "name" => "Tai nghe",
                "slug" => "tai-nghe",
                  "image" => 'tai-nghe.webp',
                "status" => 1
            ], [
                "category_id" => 6,
                "sub_category_id" => 50,
                "name" => "Bàn phím",
                "slug" => "ban-phim",
                  "image" => 'ban-phim.webp',
                "status" => 1
            ], [
                "category_id" => 6,
                "sub_category_id" => 50,
                "name" => "Dây đeo Apple Watch",
                "slug" => "day-deo-apple-watch",
                  "image" => 'day-deo-apple-watch.webp',
                "status" => 1
            ],
            //categories id = 7, sub_categories Phụ kiện Apple id = 60
            [
                "category_id" => 7,
                "sub_category_id" => 64,
                "name" => "Gaming",
                "slug" => "gaming",
                "image" => 'gaming3.webp',
                "status" => 1
            ],
            //categories id = 8, sub_categories samsung id = 70
            [
                "category_id" => 8,
                "sub_category_id" => 70,
                "name" => "32 INCH",
                "slug" => "32-inch",
                  "image" => '32-inch.webp',
                "status" => 1
            ],
            [
                "category_id" => 8,
                "sub_category_id" => 70,
                "name" => "43 INCH",
                "slug" => "43-inch",
                  "image" => '43-inch.webp',
                "status" => 1
            ], [
                "category_id" => 8,
                "sub_category_id" => 70,
                "name" => "50 INCH",
                "slug" => "50-inch",
                  "image" => '50-inch.webp',
                "status" => 1
            ],
            [
                "category_id" => 8,
                "sub_category_id" => 70,
                "name" => "55 INCH",
                "slug" => "55-inch",
                  "image" => '55-inch.webp',
                "status" => 1
            ],
        ];

        foreach ($child_cagtegories as $childCategory) {
            DB::table('child_categories')->insert([
                "category_id" => $childCategory['category_id'],
                "sub_category_id" => $childCategory['sub_category_id'],
                "name" => $childCategory['name'],

                "slug" => $childCategory['slug'],
                "image" => $childCategory['image'] ?? '',
                "status" => $childCategory['status']
            ]);
        }
    }
}
