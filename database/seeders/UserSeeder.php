<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin', 
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'level' => 'admin',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
