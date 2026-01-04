<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS20AcademicTest3 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 3 - Reading
        $nc = ["potatoes", "butter", "meat", "crystals", "cellophane", "tin", "refrigerator"];
        $tfng = ["not given", "true", "false", "true", "false", "not given"];
        $mh = ["v", "ii", "iv", "vii", "iii", "vi"];
        $two_choices = ["[C, E]", "[C, E]", "[B, D]", "[B, D]"];
        $sentence_completion = ["tentacles", "protection", "[colour, color]"];
        $matching_features = ["A", "C", "B", "A", "B", "A", "C"];
        $mse = ["C", "B", "D"];
        $oc = ["b", "c", "b", "c"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }   

        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'mh',
                'kategori' => 'reading',
                'jawaban_benar' => $mh[$i - 1]
            ]);
        }   

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($sentence_completion); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'sentence_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $sentence_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'mse',
                'kategori' => 'reading',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }


        // Cambridge IELTS 20 Academic Listening Test 3 - Listening
        $nc = [
            "239", "modern", "lamp", "Aaron", "damage", "electronic", "insurance", "space", "app", "exchanges",
            "adaptation", "cognitive", "desks", "taps", "blue", "voice", "pregnant", "shoulders", "police", "temperature"
        ];
        $oc = [
            "b", "a", "a", "c", "b", "c",
            "b", "a", "c", "a", "c", "b"
        ];
        $map_labeling = ["b", "a", "g", "e"];
        $matching_information = [
            "F", "E", "B", "D"
        ];
        
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($map_labeling); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'map_labeling',
                'kategori' => 'listening',
                'jawaban_benar' => $map_labeling[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'bBhJMdwYSokWGAc9',
                'id_soal' => 'bBhJMdwYSokWGAc9-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
    }
}
