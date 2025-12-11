<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS20AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 3 - Reading
        $nc = ["Teacher", "Charcoal", "skyscrapers", "Flowers", "Bones", "Landscape", "Rivers"];
        $tfng = ["false", "true", "false", "true", "not given", "not given"];
        $matching_information = [
            "C", "A", "D", "F",
            "D", "G", "B", "C", "B"
        ];
        $sentence_completion = ["Pumps", "Dams", "Float", "Crops", "Trees"];
        $matching_features = [
            "B", "E", "A", "C",
            "D", "E", "B", "C", "A"
        ];
        $summary_completion = ["Jackals", "Diseases", "Food", "Foxes"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($sentence_completion); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'sentence_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $sentence_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        // Cambridge IELTS 20 Academic Listening Test 3 - Listening
        $nc = [
            "[Kings, King's]", "125", "walking", "boat", "Tuesday", "space", "vegetarian", "[2.30, 2:30]", "75", "port",
            "rats", "snakes", "tourism", "traffic", "rain", "poison", "building", "dog", "noise", "combination",
        ];
        $two_choices = ["b", "c", "a", "c", "c", "e", "a", "c"];
        $matching_information = ["D", "F", "B", "H", "C", "G"];
        $oc = ["c", "a", "a", "b", "b", "c"];
        
        
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => '4JIjUOPpLAJ2FYdl',
                'id_soal' => '4JIjUOPpLAJ2FYdl-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
    }
}
