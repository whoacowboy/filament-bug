<?php

namespace Database\Factories\MyNamespace\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use MyNamespace\Models\Post;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'hi', //fake()->name(),
            'content' => 'hi' // fake()->paragraph(3),
        ];
    }
}
