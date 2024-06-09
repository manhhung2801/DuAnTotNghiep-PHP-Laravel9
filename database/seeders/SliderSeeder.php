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
        for ($i = 0; $i < 10; $i++) {
            DB::table('sliders')->insert([
                [
                    'banner' => 'sliders_'.rand(1, 10).'.png',
                    'type' => 'iphone '. rand(11, 15). collect([' ', ' Pro', ' ProMax'])->random(). collect([' 64', ' 128', ' 256', ' 512', ' 1TB'])->random(),
                    'title'=>'đẹp_'.rand(1,100),
                    'starting_price' => round(rand(29000000, 33900000)/10) *10,
                    'btn_url' => 'http://localhost:8000/admin/slider/'.rand(1,100),
                    'serial' =>rand(1, 100),
                    'status' => rand(0, 1),
                    'created_at'=> now(),
                ]
            ]);
        }
    }
}
