<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variant;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberProductsId = Product::count();
        for ($index = 1; $index <= $numberProductsId; $index++) {
            if (Product::where('id', $index)->exists()) {
                Variant::create([
                    'product_id' => $index,
                    'name' => 'color',
                    'status' => 'active',
                ]);

                Variant::create([
                    'product_id' => $index,
                    'name' => 'ram',
                    'status' => 'active',
                ]);
            } else {
                error_log("Không tìm thấy sản phẩm với id = $index");
            }
        }
    }
}
