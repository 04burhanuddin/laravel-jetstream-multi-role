<?php

namespace Database\Factories;

use App\Models\Category;
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
        $categoryIds = Category::pluck('id')->toArray();
        return [
            'name' => $this->faker->words(2, true),
            'slug' => $this->faker->words(1, true),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->randomDigit(),
            'description' => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'category_id' => $this->faker->randomElement($categoryIds),
        ];
    }
}
