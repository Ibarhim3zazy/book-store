<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merchant::updateOrCreate(
            [
                'email' => 'Merchant@gmail.com',
            ],
            [
            'name' => 'Merchant Name',
            'email' => 'Merchant@gmail.com',
            'phone' => '01145452440',
            'image' => fake()->imageUrl(640, 480, 'persons', true),
            'cover' => fake()->imageUrl(640, 480, 'persons', true),
            'id_image_front' => fake()->imageUrl(640, 480, 'persons', true),
            'id_image_back' => fake()->imageUrl(640, 480, 'persons', true),
            'address' => 'Mit-Ghamr, Mansoura, Dakahlia, Egypt',
            'city' => 'Mansoura',
            'state' => 'Dakahlia',
            'country' => 'Egypt',
            'postal_code' => fake()->postcode(),
            'gender' => 'male',
            'date_of_birth' => fake()->date(),
            'verified' => false,
            'username' => 'Merchant Name',
            'password' => Hash::make('Merchant'), // password
        ]);

        Merchant::factory(10)->create();
    }
}
