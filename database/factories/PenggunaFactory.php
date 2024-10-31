<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Database\Factories\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pengguna' => fake()->name(),
            'alamat' => fake()->name(),
            'telp' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),

            'password' => 'password',
        ];
    }
}
