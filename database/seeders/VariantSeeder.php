<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for ($index = 1; $index < 50; $index++) {
            Variant::create([
                'product_id' => $index,
                'name' => 'Variant A' . $index,
                'status' => 'active'
            ]);
        }

        // Check if the variant with product_id 2 and name 'Variant C' already exists
        $existingVariant = Variant::where('product_id', 2)
                            ->where('name', 'Variant C')
                            ->first();

        if (!$existingVariant) {
            Variant::create([
                'product_id' => 2,
                'name' => 'Variant C',
                'status' => 'inactive'
            ]);
        }
    }
}
