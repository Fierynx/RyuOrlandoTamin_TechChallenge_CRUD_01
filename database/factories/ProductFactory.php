<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 1000),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
