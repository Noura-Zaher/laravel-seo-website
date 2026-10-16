<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->words(3, true);
    return [
        'name' => ucwords($name),
        'slug' => \Illuminate\Support\Str::slug($name),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->randomFloat(2, 10, 500),
        'image' => 'default.jpg',
        'category_id' => \App\Models\Category::factory(),      // بيعمل قسم جديد
        'meta_title' => ucwords($name) . ' - Buy Online',
        'meta_description' => $this->faker->sentence(),
        'is_active' => true,
    ];
    }
}
