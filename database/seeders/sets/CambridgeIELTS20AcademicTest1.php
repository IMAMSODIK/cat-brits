<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS20AcademicTest1 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 1 - Reading
        $tfng = ["false", "false", "false", "not given", "true", "true"];
        $nc = ["bulbs", "soil", "feathers", "deer", "1980", "funding", "stakeholders"];
        $summary_completion = ["oak", "flooring", "keel"];
        $matching_features = ["B", "A", "B", "C", "A"];
        $matching_information = ["C", "G", "B", "E", "C"];
        $oc = ["c", "a", "d", "c"];
        $mse = ["b", "g", "f", "e", "d"];
        $ynng = ["yes", "not given", "no", "yes", "yes"];

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'mse',
                'kategori' => 'reading',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 20 Academic Listening Test 1 - Listening
        $nc = [
            "Fish", "Roof", "Spanish", "Vegetarian", "Audley", "Hotel", "Reviews", "Local", "30", "Average",
            "Factories", "Dead", "Whale", "Apartments", "Park", "Art", "Beaches", "Ferry", "Bikes", "Drone"
        ];
        $oc = [
            "a", "b", "c", "a", "b", "c",
            "a", "b", "a", "c"
        ];
        $two_choices = ["[A, E]", "[A, E]", "[C, E]", "[C, E]", "[C, E]", "[C, E]", "[A, C]", "[A, C]", "[A, B]", "[A, B]"];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
    }
}
