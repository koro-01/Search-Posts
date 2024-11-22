<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = ['Koro', 'Yumi', 'Jinx', 'Momo', ];

        return [
            'name' => $this->faker->randomElement($name),// Generate a random name
            'email' => $this->faker->unique()->safeEmail, // Generate a unique email
            'password' => Hash::make('password'), // Encrypt the password securely
        ];
    }
}
