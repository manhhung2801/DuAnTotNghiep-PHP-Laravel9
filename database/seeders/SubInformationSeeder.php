<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class SubInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sub_information")->insert(
            [
                [
                    'information_id'=>1,
                    'name'=> 'Chính sách mua hàng',
                    'slug'=> Str::slug('Chính sách mua hàng','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>1,
                    'name'=> 'Chính sách đổi trả',
                    'slug'=> Str::slug('Chính sách đổi trả','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>1,
                    'name'=> 'Chính sách vận chuyển',
                    'slug'=> Str::slug('Chính sách vận chuyển','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>1,
                    'name'=> 'Chính sách bảo mật',
                    'slug'=> Str::slug('Chính sách bảo mật','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>1,
                    'name'=> 'Cam kết cửa hàng',
                    'slug'=> Str::slug('Cam kết cửa hàng','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>2,
                    'name'=> 'Hướng dẫn mua hàng',
                    'slug'=> Str::slug('Hướng dẫn mua hàng','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>2,
                    'name'=> 'Hướng dẫn đổi trả',
                    'slug'=> Str::slug('Hướng dẫn đổi trả','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],
                [
                    'information_id'=>2,
                    'name'=> 'Hướng dẫn trả góp',
                    'slug'=> Str::slug('Hướng dẫn trả góp','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>2,
                    'name'=> 'Hướng dẫn chuyển khoản',
                    'slug'=> Str::slug('Hướng dẫn chuyển khoản','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ],[
                    'information_id'=>2,
                    'name'=> 'Hướng dẫn hoàn hàng',
                    'slug'=> Str::slug('Hướng dẫn hoàn hàng','-'),
                    'status'=> 1,
                    'created_at'=> now(),
                ]
            ]
            );
    }
}
