<?php

namespace Database\Factories;

use App\Models\Merchant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchant>
 */
class MerchantFactory extends Factory
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
            'verified' => rand(0, 1),
            'merchant_id' => Merchant::all()->random()->id ??= null,
            'username' => fake()->userName(),
            'password' => Hash::make('merchant'), // password
        ];
    }
}
