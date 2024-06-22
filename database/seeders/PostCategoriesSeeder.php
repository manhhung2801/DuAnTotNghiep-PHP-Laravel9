<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts_categories')->insert([
            [
                'name' => 'Tin tức',
                'slug' => 'tin-tuc',
                'status' => 1,
            ],
            [
                'name' => 'Khuyến mãi',
                'slug' => 'khuyen-mai',
                'status' => 1,
            ],
            [
                'name' => 'Thủ thuật',
                 'slug' => 'thu-thuat',
                'status' => 1,
            ],
            [   
                'name' => 'Khám phá',
                 'slug' => 'kham-pha',
                'status' => 1,
            ],
        ]);
    }
}
