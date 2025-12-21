<?php

namespace Database\Seeders;

use Database\Seeders\Sets\CambridgeIELTS10AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS10AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS10AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS10AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS15AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS16AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS18AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS20AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS20AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS20AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS20AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS14AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS14AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS16AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS16AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS17AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS17AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS17AcademicTest4;
use Database\Seeders\Sets\CambridgeIELTS18AcademicTest2;
use Database\Seeders\Sets\CambridgeIELTS18AcademicTest3;
use Database\Seeders\Sets\CambridgeIELTS19AcademicTest1;
use Database\Seeders\Sets\CambridgeIELTS19AcademicTest4;
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
            CambridgeIELTS10AcademicTest4::class,
            CambridgeIELTS20AcademicTest1::class,
            CambridgeIELTS20AcademicTest2::class,
            CambridgeIELTS20AcademicTest3::class,
            CambridgeIELTS20AcademicTest4::class,
            CambridgeIELTS14AcademicTest2::class,
            CambridgeIELTS18AcademicTest4::class,
            CambridgeIELTS14AcademicTest3::class,
            CambridgeIELTS16AcademicTest1::class,
            CambridgeIELTS16AcademicTest2::class,
            CambridgeIELTS16AcademicTest4::class,
            CambridgeIELTS17AcademicTest1::class,
            CambridgeIELTS17AcademicTest3::class,
            CambridgeIELTS17AcademicTest4::class,
            CambridgeIELTS18AcademicTest2::class,
            CambridgeIELTS18AcademicTest3::class,
            CambridgeIELTS19AcademicTest4::class,
            CambridgeIELTS19AcademicTest1::class
        ]);
    }
}
