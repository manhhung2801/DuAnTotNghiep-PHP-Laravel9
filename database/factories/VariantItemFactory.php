<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Variant;
use App\Models\VariantItem;

class VariantItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VariantItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productId = optional($this->faker->randomElement(Variant::pluck('id')))->id;

        $price = $this->faker->numberBetween(1, 1000) * 1000;
        $discount = $this->faker->numberBetween(1, 1000) * 1000;

        if ($discount != 0 && $discount >= $price) {
            $temp = $price;
            $price = $discount;
            $discount = $temp;
        }

        return [
            'product_variant_id' => $productId,
            'name' => $this->faker->word,
            'price' => $price,
            'is_default' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'deleted_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
