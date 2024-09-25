<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            [
                'email' => 'ebrahim3zazy@gmail.com',
            ],
            [
            'name' => 'Ibrahim Elsayed Mohamed Azazy',
            'email' => 'ebrahim3zazy@gmail.com',
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
            'description' => fake()->text(50),
            'super_admin' => true,
            'username' => 'ebrahim3zazy',
            'password' => Hash::make('admin'), // password
        ]);

        Admin::factory(10)->create();
    }
}
