<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS19AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 19 Academic Reading Test 4 - Reading
        $tfng = ["false", "true", "false", "not given", "false", "true"];
        $nc = ["colonies", "spring", "endangered", "habitats", "Europe", "southern", "diet"];
        $matching_information = ["C", "F", "E", "D"];
        $matching_features = ["D", "B", "A", "E", "B", "C"];
        $summary_completion = [
            "waste", "machinery", "caution",
            "egalitarianism", "status", "hunting", "domineering", "autonomy"
        ];
        $oc = ["c", "c", "b", "a"];
        $ynng = ["not given", "no", "yes", "note given", "no"];

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
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
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
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
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
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 19 Academic Listening Test 4 - Listening
        $nc = [
            "KAEDEN", "[locker, lockers]", "passport", "uniform", "[third, 3rd]", "0412665903",
            "competition", "food", "disease", "agriculture", "maps", "cattle", "speed", "monkeys", "fishing", "flooding"
        ];
        $tc = [
            "yellow", "plastic", "ice", "gloves"
        ];
        $two_choices = ["[C, E]", "[C, E]", "[A, D]", "[A, D]"];
        $matching_information = [
            "A", "B", "C", "A",
            "D", "F", "A", "C", "G"
        ];
        $oc = [
            "c", "b",
            "a", "c", "a", "b", "c"
        ];
        
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'listening',
                'jawaban_benar' => $tc[$i - 1]
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
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'xQKeqKYrkqfdgotg',
                'id_soal' => 'xQKeqKYrkqfdgotg-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
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
    }
}
