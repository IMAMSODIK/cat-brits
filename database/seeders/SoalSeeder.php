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
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($sa); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'sa',
                'kategori' => 'reading',
                'jawaban_benar' => $sa[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'reading',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'mh',
                'kategori' => 'reading',
                'jawaban_benar' => $mh[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'mse',
                'kategori' => 'reading',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 10 Academic Listening Test 1 - Listening
        $nc = [
            "Ardleigh", "newspaper", "theme", "tent", "castle", "beach, beaches",
            "health problems", "safety rules", "plan", "joining", "free entry", "peak", "guests", "photo card, photo cards, photocard, photocards",
            "presentation", "model", "material, materials", "grant", "technical",
            "gene", "power, powers", "strangers", "erosion", "islands", "roads", "fishing", "reproduction", "method, methods", "expansion"
        ];
        $tc = ["2020", "flight", "429", "dinner"];
        $two_choices = ["a", "c"];
        $oc = ["c", "a", "b", "a", "c"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'listening',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-1',
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'XJ3XOcvqPbgdZwyl',
                'id_soal' => 'XJ3XOcvqPbgdZwyl-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
    }
}
