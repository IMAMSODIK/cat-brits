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
            'name' => 'Cambridge 10 Test 1',
            'kode' => 'XJ3XOcvqPbgdZwyl',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 10 Test 2',
            'kode' => 'QmN0FYAE2DCXRPdC',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 10 Test 3',
            'kode' => 's4gzzYRpwLnhLRFf',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 10 Test 4',
            'kode' => '11qYaGWPJUTxUVdq',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 2',
            'kode' => 'XW16JROLKCFE4BMH',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 3',
            'kode' => 'NmeBcwURSR2ZPfdX',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 16 Test 4',
            'kode' => 'TqMfMy8BLvZp0JDm',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 17 Test 1',
            'kode' => 'QUApDKzp0Wn1GCiA',
        ]);
    }
}
