<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        // Predefined titles and descriptions in order
        $titles = [
            'post1', 'post2', 'post3', 'post4', 'post5', 'post6', 'post7', 'post8', 'post9',
            'post10', 'post11', 'post12', 'post13', 'post14', 'post15'
        ];

        $descriptions = [
            'This the post 1', 'This is the post 2', 'This is the post 3', 'This the post 4', 
            'This is the post 5', 'This the post 6', 'This is the post 7', 'This is the post 8', 
            'This the post 9', 'This is the post 10', 'This is the post 11', 'This the post 12', 
            'This is the post 13', 'This the post 14', 'This is the post 15'
        ];

        static $index = 0; // Static index for sequential posts

        $currentTitle = $titles[$index];
        $currentDescription = $descriptions[$index];

        $index++; // Increment index for the next post

        return [
            'title' => $currentTitle, // Sequential title
            'description' => $currentDescription, // Sequential description
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id, // Random category (or use a fixed category)
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // Random user (or use a fixed user)
        ];
    }
}
