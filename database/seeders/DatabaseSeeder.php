<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            ChildCategorySeeder::class,
            SliderSeeder::class,
            StoreAdressSeeder::class,
            // CouponsSeeder::class,
            PostCategoriesSeeder::class,
            PostsSeeder::class,
            PageCategorySeeder::class,
            PageSeeder::class,
            ProductSeeder::class,
            VariantSeeder::class,
            VariantItemTableSeeder::class,
        ]);
    }
}
