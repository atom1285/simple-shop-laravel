<?php

namespace Database\Factories\shop;

use App\Models\Shop\Brand;
use App\Models\Shop\Category;
use App\Models\Shop\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'barcode' => fake()->ean13(),
            'name' => fake()->words(2, true),
            'description' => fake()->realTextBetween(),
            'price' => fake()->randomFloat(2, 0.5, 100),
            'count' => fake()->numberBetween(0, 1000),
            'category_id' => function () {
                return Category::inRandomOrder()->first()->id;
            },
            'brand_id' => function () {
                return Brand::inRandomOrder()->first()->id;
            },
        ];
    }
}
