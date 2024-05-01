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
            'cover' => fake()->randomElement(['https://media-rockstargames-com.akamaized.net/mfe6/prod/__common/img/71d4d17edcd49703a5ea446cc0e588e6.jpg', 'https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5Rmy8w4e4mlCugxsmI7ow6/bec4447ef65f47db37ec9c9e035075ae/swo-keyart-thumbnail-960x540.jpg', 'https://blog.playstation.com/tachyon/2023/12/56935f822f365f2cae0282333bf9f2e60dcb4211.jpg'])
        ];
    }
}
