<?php

namespace Database\Seeders;

use App\Models\SetSoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SetSoal::create([
            'name' => 'Cambridge IELTS 10 Academic Reading Test 1',
            'kode' => 'XJ3XOcvqPbgdZwyl',
        ]);

        SetSoal::create([
            'name' => 'Cambridge IELTS 10 Academic Reading Test 2',
            'kode' => 'QmN0FYAE2DCXRPdC',
        ]);
    }
}
