<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StoreAdressSeeder extends Seeder
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
            'store_name' => 'Cửa hàng CYBERMART',
            'province' => 'TP. Hồ Chí Minh',
            'district' => 'quận Tân Bình',
            'ward' => 'phường 14',
            'address' => '492/1 đường Trường Chinh',
            'email'=>'cyber.mart@gmail.com',
            'phone' => '0905263042',
            'description'=>'Hệ thống cửa hàng CyberMart chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.',
            'status' => 1,
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 2 thành viên',
            'province' => 'TP Hà Nội',
            'district' => 'quận Cầu Giấy',
            'ward' => 'Phạm Hùng',
            'address' => 'Tầng 11 của Tòa nhà Keangnam Landmark Tower - E6 ',
            'email'=> 'congty2@gmail.com',
            'phone' => '0905263042',
            'description'=> 'cdfvd',
            'status' => 0,
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 3 thành viên',
            'province' => 'tỉnh Ninh Thuận',
            'district' => 'Thuận Bắc',
            'ward' => 'Xã Bắc Sơn',
            'address' => 'Thôn Láng Me',
            'email'=> 'congty3@gmail.com',
            'phone' => '0905263042',
            'description'=> 'fvg dfd',
            'status' => 0,
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 4 thành viên',
            'province' => 'Thành Phố Bắc Ninh',
            'district' => 'Lý Thái Tổ',
            'ward' => ' P. Võ Cường',
            'address' => 'Tầng 5, Số 76',
            'email'=> 'congty4@gmail.com',
            'phone' => '0905263042',
            'description'=> 'fvds',
            'status' => 0,
            'created_at' => now(),
        ],[
            'store_name' => 'Công ty 5 thành viên',
            'province' => 'TP.HCM',
            'district' => 'Quận Gò Vấp',
            'ward' => 'Phường 10',
            'address' => '340/46 Quang Trung',
            'email'=> 'congty5@gmail.com',
            'phone' => '0905263042',
            'description'=> 'dvfbdcs',
            'status' => 0,
            'created_at' => now(),
        ]
    ]);
    }
}
