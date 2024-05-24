<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StoreAdresss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_addresses')->insert([
            [
            'store_name' => 'Công ty 1 thành viên',
            'province' => 'TP. Hồ Chí Minh',
            'district' => 'quận Tân Bình',
            'ward' => 'phường 14',
            'address' => '492/1 đường Trường Chinh',
            'phone' => '0905263042',
            'status' => 'active',
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 2 thành viên',
            'province' => 'TP Hà Nội',
            'district' => 'quận Cầu Giấy',
            'ward' => 'Phạm Hùng',
            'address' => 'Tầng 11 của Tòa nhà Keangnam Landmark Tower - E6 ',
            'phone' => '0905263042',
            'status' => 'active',
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 3 thành viên',
            'province' => 'tỉnh Ninh Thuận',
            'district' => 'Thuận Bắc',
            'ward' => 'Xã Bắc Sơn',
            'address' => 'Thôn Láng Me',
            'phone' => '0905263042',
            'status' => 'active',
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 4 thành viên',
            'province' => 'Thành Phố Bắc Ninh',
            'district' => 'Lý Thái Tổ',
            'ward' => ' P. Võ Cường',
            'address' => 'Tầng 5, Số 76',
            'phone' => '0905263042',
            'status' => 'active',
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 5 thành viên',
            'province' => 'TP.HCM',
            'district' => 'Quận Gò Vấp',
            'ward' => 'Phường 10',
            'address' => '340/46 Quang Trung',
            'phone' => '0905263042',
            'status' => 'active',
            'created_at' => now(),
        ]
    ]);
    }
}
