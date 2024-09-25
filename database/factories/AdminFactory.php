<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'cover' => fake()->imageUrl(640, 480, 'animals', true),
            'id_image_front' => fake()->imageUrl(640, 480, 'animals', true),
            'id_image_back' => fake()->imageUrl(640, 480, 'animals', true),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
            'postal_code' => fake()->postcode(),
            'gender' => fake()->randomElement(['male', 'female']),
            'date_of_birth' => fake()->date(),
            'description' => fake()->text(50),
            'super_admin' => false,
            'username' => fake()->userName(),
            'password' => 'admin', // password
        ];
    }
}
