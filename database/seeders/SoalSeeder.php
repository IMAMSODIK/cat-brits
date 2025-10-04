<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cambridge IELTS 10 Academic Reading Test 1 - Reading
        $tfng = [
            "false", "true", "not given ", "not given", "true",
            "true", "false", "not given ", "not given", "false"
        ];
        $sa = ["pavilions", "drought", "tourists"];
        $tc = ["Earthquake", "Four sides, 4 sides", "Tank", "verandas, verandahs", "underwater"];
        $mh = ["viii", "iii", "xi", "i", "v", "x", "ii", "iv"];
        $oc = ["c", "a", "d", "b"];
        $mse = ["g", "e", "a", "f", "b"];
        $ynng = ["no", "yes", "not given", "not given", "no"];

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'tfng',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($sa); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'sa',
                'jawaban_benar' => $sa[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'tc',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'mh',
                'jawaban_benar' => $mh[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'oc',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'mse',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'ynng',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }
    }
}
