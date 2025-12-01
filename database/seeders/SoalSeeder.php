<?php

namespace Database\Seeders;

use Database\Seeders\Sets\CambridgeIELTS10AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS10AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS10AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS16AcademicTest1;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CambridgeIELTS10AcademicTest1::class,
            CambridgeIELTS10AcademicTest2::class,
            CambridgeIELTS10AcademicTest3::class,
            CambridgeIELTS15AcademicTest1::class,
            CambridgeIELTS15AcademicTest2::class,
            CambridgeIELTS15AcademicTest3::class,
            CambridgeIELTS15AcademicTest4::class,
            CambridgeIELTS16AcademicTest1::class,
        ]);
    }
}
