<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'user_id' => fake()->randomElement(User::get('id')),
            'article' => fake()->paragraph(8),
            'likes' => fake()->numberBetween(50, 5000),
        ];
    }
}
