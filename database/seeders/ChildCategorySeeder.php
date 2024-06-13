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
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 14 SERIES",
                "slug" => "iphone-14-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 13 SERIES",
                "slug" => "iphone-13-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 12 SERIES",
                "slug" => "iphone-12-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 1,
                "name" => "IPHONE 11 SERIES",
                "slug" => "iphone-11-series",
                "status" => 1
            ],
            //categories id = 1, sub_categories iPhone id = 1

            //categories id = 1, sub_categories Samsung id = 2

            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY S",
                "slug" => "galaxy-s",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY A",
                "slug" => "galaxy-a",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY M",
                "slug" => "galaxy-m",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 2,
                "name" => "GALAXY Z",
                "slug" => "galaxy-z",
                "status" => 1
            ],
            //categories id = 1, sub_categories Samsung id = 2

            //categories id = 1, sub_categories Xiaomi id = 3
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "XIAOMI 13 SERIES",
                "slug" => "xiaomi-13-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "XIAOMI 12 SERIES",
                "slug" => "xiaomi-12-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 13 SERIES",
                "slug" => "note-13-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 12 SERIES",
                "slug" => "note-12-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "NOTE 11 SERIES",
                "slug" => "note-11-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "REDMI SERIES",
                "slug" => "redmi-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 3,
                "name" => "POCO SERIES",
                "slug" => "poco-series",
                "status" => 1
            ],
            //categories id = 1, sub_categories Xiaomi id = 3

            //categories id = 1, sub_categories OPPO id = 4
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "A SERIES",
                "slug" => "a-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "FIND X SERIES",
                "slug" => "find-x-series",
                "status" => 1
            ],
            [
                "category_id" => 1,
                "sub_category_id" => 4,
                "name" => "RENO SERIES",
                "slug" => "reno-series",
                "status" => 1
            ],
            //categories id = 1, sub_categories OPPO id = 4

            //categories id = 2, sub_categories Mac id = 16
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "RENO SERIES",
                "slug" => "reno-series",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MACBOOK AIR",
                "slug" => "macbook-air",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MACBOOK PRO",
                "slug" => "macbook-pro",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MAC MINI",
                "slug" => "mac-mini",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "MAC STUDIO",
                "slug" => "mac-studio",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 16,
                "name" => "IMAC",
                "slug" => "imac",
                "status" => 1
            ],
            //categories id = 2, sub_categories Mac id = 16

            //categories id = 2, sub_categories ASUS id = 17

            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "VIVOBOOK",
                "slug" => "vivobook",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "GAMING",
                "slug" => "gaming",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "ZENBOOK",
                "slug" => "zenbook",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 17,
                "name" => "EXPERTBOOK",
                "slug" => "expertbook",
                "status" => 1
            ],
            //categories id = 2, sub_categories ASUS id = 17

            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "IDEAPAD",
                "slug" => "ideapad",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "THINKPAD",
                "slug" => "thinkpad",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "GAMING",
                "slug" => "gaming",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "YOGA",
                "slug" => "yoga",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "THINKBOOK",
                "slug" => "thinkbook",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 18,
                "name" => "V SERIES",
                "slug" => "v-series",
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
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "VOSTRO",
                "slug" => "vostro",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "XPS",
                "slug" => "xps",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "GAMING",
                "slug" => "gaming",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "LATITUDE",
                "slug" => "latitude",
                "status" => 1
            ],
            [
                "category_id" => 2,
                "sub_category_id" => 19,
                "name" => "ALIENWARE",
                "slug" => "alienware",
                "status" => 1
            ],

            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Sony",
                "slug" => "sony",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "JBL",
                "slug" => "jbl",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Soundpeats",
                "slug" => "soundpeats",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Havit",
                "slug" => "havit",
                "status" => 1
            ],
            [
                "category_id" => 3,
                "sub_category_id" => 28,
                "name" => "Samsung",
                "slug" => "samsung",
                "status" => 1
            ],[
                "category_id" => 6,
                "sub_category_id" => 52,
                "name" => "Ôp lưng",
                "slug" => "op-lung",
                "status" => 1
            ],
        ];

        foreach($child_cagtegories as $childCategory) {
            DB::table('child_categories')->insert([
                "category_id" => $childCategory['category_id'],
                "sub_category_id" => $childCategory['sub_category_id'],
                "name" => $childCategory['name'],
                "slug" => $childCategory['slug'],
                "status" => $childCategory['status']
            ]);
        }
    }
}
