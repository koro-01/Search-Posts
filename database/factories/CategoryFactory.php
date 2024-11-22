<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition(): array
    {
        // Predefined category names
        $categories = ['Java', 'Python', 'C++', 'JavaScript',];

        return [
            'name' => $this->faker->randomElement($categories),
        ];
    }
}

