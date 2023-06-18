<?php

namespace Database\Factories\shop;

use App\Models\Shop\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Category $category) {
            // Generate random number of child categories
            $childCount = rand(2, 5);

            // Create child categories
            for ($i = 0; $i < $childCount; $i++) {
                $category->children()->create(
                    $this->definition()
                );
            }
        });
    }
}
