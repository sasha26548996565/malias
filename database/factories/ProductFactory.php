<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->unique->word . now()->format('YmdHis'),
            'description' => $this->faker->sentence,
            'price' => random_int(100, 1000),
            'rate' => random_int(1, 5),
            'category_id' => Category::all()->random()->id,
            'preview' => '/no_product.jfif',
        ];
    }
}
