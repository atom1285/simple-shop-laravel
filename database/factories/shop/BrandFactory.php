<?php

namespace Database\Factories\shop;

use App\Models\Shop\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->realTextBetween(),
        ];
    }
}
