<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS10AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 10 Academic Reading Test 4 - Reading
        $nc = ["spread", "[10, 10 times, ten times]", "below", "fuel", "seasons", "[homes, housing]"];
        $tfng = ["true", "false", "true", "true", "not given", "false", "false"];
        $summary_completion = ["[transformation, change]", "young age", "optimism", "[skills, techniques]", "[negative emotions, feelings]"];
        $matching_features = ["E", "C", "G", "A"];
        $matching_information = ["E", "C", "G", "H"];
        $oc = ["c", "d", "c", "b", "a"];
        $mse = ["f", "g", "a", "b", "d"];
        $ynng = ["not given", "yes", "no", "yes"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'mse',
                'kategori' => 'reading',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 10 Academic Listening Test 4 - Listening
        $nc = ["Pargetter", "East", "library", "[morning, mornings]", "postbox", "prices"];
        $tc = [
            "glass", "cooker", "week", "fence",
            "trains", "dark", "games", "guided tour", "[ladder, ladders]",
            "[metal, metals]", "space", "memory", "solar", "oil", "waste", "tests"
        ];
        $oc = [
            "b", "b", "a", "a", "c",
            "c", "b", "c"
        ];
        $two_choices = ["a", "e", "b", "c"];
        $matching_information = ["d", "f", "g", "b", "e", "c"];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'listening',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '11qYaGWPJUTxUVdq',
                'id_soal' => '11qYaGWPJUTxUVdq-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
    }
}
