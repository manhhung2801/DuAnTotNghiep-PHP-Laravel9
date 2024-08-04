<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_categories')->insert([
            [
                'name' => 'Chính sách',
                'slug' => Str::slug('Chính sách', '-'),
                'rank' => 0,
                'status' => 1,
                'created_at' => now(),
            ],[
                'name' => 'Hướng dẫn',
                'slug' => Str::slug('Hướng dẫn', '-'),
                'rank' => 1,
                'status' => 1,
                'created_at' => now(),
            ],[
                'name' => 'Giới thiệu',
                'slug' => Str::slug('Giới thiệu', '-'),
                'rank' => 2,
                'status' => 1,
                'created_at' => now(),
            ]
        ]);
    }
}
