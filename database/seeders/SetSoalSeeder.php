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

        SetSoal::create([
            'name' => 'Cambridge 15 Test 1',
            'kode' => 'Avfd93r1YAojm5Pb',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 15 Test 2',
            'kode' => 'BHByU4OTwRblfc5c',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 15 Test 3',
            'kode' => '9uAizxgIsFCinyrq',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 15 Test 4',
            'kode' => 'GTZbRoMFOA5DZLNK',
        ]);

        SetSoal::create([
            'name' => 'Cambridge 16 Test 1',
            'kode' => 'blsodB9LLhUn0zcg',

        ]);
        SetSoal::create([
            'name' => 'Cambridge 11 Test 1',
            'kode' => 'BoXPeTu8aF68JZFw',
        ]);

        // 18 START
        
        SetSoal::create([
            'name' => 'Cambridge 18 Test 4',
            'kode' => 'yPLnQeqINAxbrnva',
        ]);

        // 18 END

        // 19 START
        SetSoal::create([
            'name' => 'Cambridge 19 Test 1',
            'kode' => 'kNyuF8ZeAt9Trm90',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 19 Test 2',
            'kode' => 'kVklZiFhgKeBhovY',
        ]);
        SetSoal::create([
            'name' => 'Cambridge 19 Test 3',
            'kode' => 'kqQSrG7Rs5yw1AuD',
        ]);
    }
}
