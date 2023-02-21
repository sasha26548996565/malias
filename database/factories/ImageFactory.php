<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImageFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => '/no_product.jfif',
            'product_id' => Product::get()->random()->id,
        ];
    }
}
