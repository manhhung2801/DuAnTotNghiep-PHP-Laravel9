<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            $startDate = Carbon::now()->addDays(rand(1, 30));
            $endDate = $startDate->copy()->addDays(rand(1, 7));
            $name = strval(mt_rand());
            $code = strval(mt_rand());
            DB::table('Coupons')->insert([
                [
                    'name' => $name,
                    'code' =>  $code,
                    'quantity' => 12,
                    'max_use' => 12,
                    'start_date' => $startDate,
                    'end_date' =>   $endDate,
                    "discount_type" => "percent",
                    "discount" => 12,
                    "total_used" => 12,
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
