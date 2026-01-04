<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS17AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 17 Academic Reading Test 4 - Reading
        $tfng = [
            "false", "false", "not given", "true", "not given", "true",
            "false", "not given", "not given", "true"
        ];
        $tc = [
            "droppings", "coffee", "[mosquitoes, mosquitos]", "protein", "unclean", "culture", "houses"
        ];
        $matching_information = [
            "E", "A", "D", "F", "C",
            "D", "E", "F", "B", "H", "E"
        ];
        $summary_completion = [
            "descendants", "sermon", "fine", "innovation",
            "memory", "numbers", "communication", "visual"
        ];
        $two_choices = [
            "[b, e]", "[b, e]",
             "[b, d]", "[b, d]"];
        
    
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'reading',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        // Cambridge IELTS 17 Academic Listening Test 4 - Listening
        $nc = [
            "[floor, floors]", "fridge", "shirts", "windows", "balcony", "electrician", "dust", "police", "training", "review",
            "golden", "healthy", "climate", "[rock, rocks]", "diameter", "tube", "fire", "steam", "cloudy", "[litre, liter]"
        ];
        $oc = [
            "a", "a", "a", "c"
        ];
        $matching_information = [
            "a", "c", "b", "c", "b", "a",
            "b", "f", "a", "d", "c", "g"
        ];
        $two_choices = ["[c, e]", "[c, e]", "[a, d]", "[a, d]"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '15gOXcE7omDCL1uE',
                'id_soal' => '15gOXcE7omDCL1uE-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
    }
}
