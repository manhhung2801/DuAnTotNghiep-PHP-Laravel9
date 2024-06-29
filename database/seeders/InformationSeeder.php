<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            [
                'name' => 'Chính sách',
                'rank' => 0,
                'status' => 1,
                'created_at' => now(),
            ],[
                'name' => 'Hướng dẫn',
                'rank' => 1,
                'status' => 1,
                'created_at' => now(),
            ]
        ]);
    }
}
