<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            ProductCategory::create([
                'name' => $faker->name
            ]);
        }
    }
}
