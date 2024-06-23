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
        //
        $variants = Variant::all();

        foreach ($variants as $variant) {
            VariantItem::factory()->create([
                'product_variant_id' => $variant->id,
            ]);
        }

    }
}
