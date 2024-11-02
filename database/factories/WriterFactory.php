<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::all();

        $randomCategory = $this->faker->randomElement($category);

        return [
            'name' => fake()->name(),
            'specialize' => $randomCategory->name,
            'category_id' => $randomCategory->id,
        ];
    }
}
