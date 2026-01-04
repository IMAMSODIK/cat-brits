<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS17AcademicTest1 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 17 Academic Reading Test 1 - Reading
        $nc = ["population", "suburbs", "businessmen", "funding", "press", "soil"];
        $tfng = [
            "false", "not given", "true", "true", "false", "false", "not given"
        ];
        $matching_information = ["A", "F", "E", "D"];
        $summary_completion = [
            "fortress", "bullfights", "opera", "salt", "shops",
            "H", "J", "F", "B", "D"
        ];
        $two_choices = ["[C, D]", "[C, D]", "[B, E]", "[B, E]"];
        $ynng = [
            "not given", "no", "no", "yes"
        ];
        $oc = ['b', 'c', 'a', 'b', 'd'];
    
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }


        // Cambridge IELTS 17 Academic Listening Test 1 - Listening
        $nc = [
            "litter", "dogs", "insects", "butterflies", "wall", "island", "boots", "beginners", "spoons", "[35, thirty five]",
            "puzzle", "logic", "confusion", "meditation", "stone", "coins", "tree", "breathing", "paper", "anxiety"
        ];
        $oc = [
            "a", "c", "b", "b",
            "a", "b", "b", "a", "c", "c"
        ];
        $two_choices = ["a", "d", "b", "c", "d", "e"];
        $matching_information = ["a", "e", "f", "c"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'QUApDKzp0Wn1GCiA',
                'id_soal' => 'QUApDKzp0Wn1GCiA-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
    }
}
