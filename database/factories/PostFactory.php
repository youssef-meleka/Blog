<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id'=> \App\Models\User::factory(),
            'category_id'=> \App\Models\Category::factory(),
            'title'=> $this->faker->sentence,
            'slug'=> $this->faker->slug,
            'excerpt'=> $this->faker->sentence,
            'body'=> $this->faker->paragraph


        ];
    }
}
