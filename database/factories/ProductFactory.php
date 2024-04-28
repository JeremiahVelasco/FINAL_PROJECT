<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'image' => fake()->randomElement(['https://i.ebayimg.com/images/g/U1UAAOSwOAxfV4HT/s-l1200.webp', 'https://m.media-amazon.com/images/I/61+NMwY0CcL._AC_SL1000_.jpg', 'https://i.ebayimg.com/images/g/Y7IAAOSw2uFhuQei/s-l1200.webp']),
            'name' => fake()->randomElement(['Grand Theft Auto 6', 'Halo Infinite', 'Shadow of the Tomb Raider']),
            'category_id' => fake()->randomElement([0]),
            'description' => fake()->paragraph(3),
            'os' => fake()->randomElement(['Mac', 'Windows', 'Linux', 'PS5', 'Xbox']),
            'price' => '₱' . fake()->numberBetween(1000, 4000),
        ];
    }
}
