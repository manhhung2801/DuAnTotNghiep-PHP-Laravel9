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
                'email' => 'cybermart53@gmail.com',
                'phone' => '0905263042',
                'description' => 'Hệ thống cửa hàng CyberMart chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.',
                'status' => 1,
                'pick_store' => 1,
                'created_at' => now(),
            ],
            [
                'store_name' => 'Công ty 2 thành viên',
                'province' => 'TP. Hồ Chí Minh',
                'district' => 'Q. Phú Nhuận',
                'ward' => ' P.3',
                'address' => '114 Phan Đăng Lư ',
                'email' => 'cybermart53@gmail.com',
                'phone' => '0905263042',
                'description' => 'Hệ thống cửa hàng CyberMart chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.',
                'status' => 1,
                'pick_store' => 0,
                'created_at' => now(),
            ],
            [
                'store_name' => 'Công ty 3 thành viên',
                'province' => 'TP.HCM',
                'district' => 'Quận Gò Vấp',
                'ward' => 'Phường 10',
                'address' => '340/46 Quang Trung',
                'email' => 'cybermart53@gmail.com',
                'phone' => '0905263042',
                'description' => 'Hệ thống cửa hàng CyberMart chuyên bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, phụ kiện chính hãng - Giá tốt, giao miễn phí.',
                'status' => 1,
                'pick_store' => 0,
                'created_at' => now(),
            ]
        ]);
    }
}
