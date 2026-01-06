<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS16AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 16 Academic Reading Test 4 - Reading
        $diagram_labeling = ["posts", "canal", "ventilation", "lid", "weight", "climbing"];
        $tfng = [
            "false", "not given", "false", "true"
        ];
        $sa = [
            "gold", "[architect, architect‘s, architect‘s name, architect name, the architect, the architect‘s, the architect‘s name, the architect name]", "[harbour, harbor, the harbour, the harbor]"
        ];
        $oc = [
            'a', 'b', 'd', 'b',
            'c', 'b', 'a'
        ];
        $summary_completion = [
            "D", "H", "F", "B", "C"
        ];
        $ynng = [
            "yes", "no", "not given", "yes",
            "no", "not given", "yes", "no", "yes"
        ];
        $mh = ["iii", "vi", "ii", "i", "vii", "v"];
    
        for($i = 1; $i <= count($diagram_labeling); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'diagram_labeling',
                'kategori' => 'reading',
                'jawaban_benar' => $diagram_labeling[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($sa); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'sa',
                'kategori' => 'reading',
                'jawaban_benar' => $sa[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'mh',
                'kategori' => 'reading',
                'jawaban_benar' => $mh[$i - 1]
            ]);
        }


        // Cambridge IELTS 16 Academic Listening Test 4 - Listening
        $nc = [
            "28th", "550", "Chervil", "garage", "garden", "parking", "wood", "bridge", "monument", "March",
            "[spice, spices]", "[colony, settlement]", "fat", "head", "movement", "[balance, balancing]", "brain", "smell", "rats", "forest"
        ];
        $oc = [
            "c", "a", "b", "b"
        ];
        $map_labeling = ["C", "F", "A", "I", "E", "H"];
        $two_choices = ["[B, C]", "[B, C]", "[B, C]", "[B, C]"];
        $matching_information = ["c", "f", "d", "e", "b", "a"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($map_labeling); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'map_labeling',
                'kategori' => 'listening',
                'jawaban_benar' => $map_labeling[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'TqMfMy8BLvZp0JDm',
                'id_soal' => 'TqMfMy8BLvZp0JDm-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
    }
}
