<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'banner' => 'slider_1.webp',
                'type' => 'Slider-1',
                'title'=>'Iphone 14 Pro Max',
                'starting_price' => 28190000,
                'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                'serial' =>rand(1, 100),
                'status' => rand(0, 1),
                'created_at'=> now(),
            ],[
                'banner' => 'slider_2.webp',
                'type' => 'Slider-2',
                'title'=>'Mua kèm giảm giá',
                'starting_price' => 28190000,
                'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                'serial' =>rand(1, 100),
                'status' => rand(0, 1),
                'created_at'=> now(),
            ],[
                'banner' => 'slider_3.webp',
                'type' => 'Slider-3',
                'title'=>'IPHONE 15 PROMAX',
                'starting_price' => 28190000,
                'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                'serial' =>rand(1, 100),
                'status' => rand(0, 1),
                'created_at'=> now(),
            ],[
                'banner' => 'slider_4.webp',
                'type' => 'Slider-4',
                'title'=>'GALAXY S24 ULTRA<br>Giá tốt chốt ngay',
                'starting_price' => 28190000,
                'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                'serial' =>rand(1, 100),
                'status' => rand(0, 1),
                'created_at'=> now(),
            ],[
                'banner' => 'slider_5.webp',
                'type' => 'Slider-5',
                'title'=>'Ơ RÔ Ơ RẺ!<br>Giảm đến 60%',
                'starting_price' => 28190000,
                'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                'serial' =>rand(1, 100),
                'status' => rand(0, 1),
                'created_at'=> now(),
            ]
        ]);
    }
}
