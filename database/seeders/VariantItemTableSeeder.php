<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variant;
use App\Models\VariantItem;


class VariantItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variants = Variant::whereIn('type', [0, 1])->get();
        $colors = ['yellow', 'red', 'black', 'orange', 'blue', 'gray'];
        $rams = ['64 GB', '100 GB', '1 TB', '256 GB', '375 GB', '2 TB'];
        foreach ($variants as $variant) {
            if ($variant->type == 1) {
                foreach ($colors as $color) {
                    VariantItem::create([
                        'product_variant_id' => $variant->id,
                        'name' => $color,
                        'status' => 1,
                    ]);
                }
            } 
            // if ($variant->type == 0) {
            //     foreach ($rams as $ram) {
            //         VariantItem::create([
            //             'product_variant_id' => $variant->id,
            //             'name' => $ram,
            //             'status' => 1,
            //         ]);
            //     }
            // }
        }
    }
}
