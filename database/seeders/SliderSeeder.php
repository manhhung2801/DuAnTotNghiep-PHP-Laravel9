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
                'banner' => 'slider_1719035876.jpg',
                'type' => 'Slider-1',
                'title' => 'Iphone 14 Pro Max',
                'btn_url' => 'http://localhost:8000/san-pham/',
                'status' => 1,
                'created_at' => now(),
            ], [
                'banner' => 'slider_1719035889.jpg',
                'type' => 'Slider-2',
                'title' => 'Mua kèm giảm giá',
                'btn_url' => 'http://localhost:8000/san-pham/',
                'status' => 1,
                'created_at' => now(),
            ], [
                'banner' => 'slider_1719035899.webp',
                'type' => 'Slider-5',
                'title' => 'Ơ RÔ Ơ RẺ!<br>Giảm đến 60%',
                'btn_url' => 'http://localhost:8000/san-pham/',
                'status' => 1,
                'created_at' => now(),
            ]
        ]);
    }
}
