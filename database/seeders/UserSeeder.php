<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alvin Dimas',
            'email' => 'alvin.dimas.praditya@gmail.com',
            'role' => 'administrator',
            'password' => Hash::make('adp050107'),
        ]);
    }
}
