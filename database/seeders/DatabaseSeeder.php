<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'password' => bcrypt('12345'),
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Margaret Destin',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'margaret@gmail.com',
            'token' => Str::random(5)
        ]);

        User::create([
            'name' => 'Gilbert Burns',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'gilbert@gmail.com',
            'token' => Str::random(5)
        ]);

        User::create([
            'name' => 'Dustin Poirer',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'dustin@gmail.com',
            'token' => Str::random(5)
        ]);

        User::create([
            'name' => 'Michael Johnson',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'email' => 'mikael@gmail.com',
        ]);

        User::create([
            'name' => 'Fermin Lopez',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'email' => 'fermin@gmail.com',
        ]);

        User::create([
            'name' => 'Lamine Yamala',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'email' => 'lamine@gmail.com',
        ]);
    }
}
