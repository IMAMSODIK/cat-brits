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
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Margaret Destin',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'margaret@gmail.com',
            'token' => Str::random(5),
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Gilbert Burns',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'gilbert@gmail.com',
            'token' => Str::random(5),
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Dustin Poirer',
            'password' => bcrypt('12345'),
            'role' => 'teacher',
            'email' => 'dustin@gmail.com',
            'token' => Str::random(5),
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Michael Johnson',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'mikael@gmail.com',
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Fermin Lopez',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'fermin@gmail.com',
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Lamine Yamala',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 1,
            'email' => 'lamine@gmail.com',
            'verification_status' => 1
        ]);

        User::create([
            'name' => 'Jaka Permana',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 0,
            'email' => 'jaka@gmail.com',
        ]);

        User::create([
            'name' => 'Ilham Sayuti',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 0,
            'email' => 'ilham@gmail.com',
        ]);

        User::create([
            'name' => 'Ridho Ilahi',
            'password' => bcrypt('12345'),
            'role' => 'student',
            'verification_status' => 0,
            'email' => 'ridhjo@gmail.com',
        ]);

        $this->call([
            SetSoalSeeder::class,
            SoalSeeder::class,
        ]);
    }
}
