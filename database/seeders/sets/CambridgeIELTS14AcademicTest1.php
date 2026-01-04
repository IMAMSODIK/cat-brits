<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS14AcademicTest1 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 3 - Reading
        $nc = [
            "creativity", "rules", "cities", "traffic", "crime", "competition", "evidence", "life"
        ];
        $tfng = ["true", "true", "not given", "false", "true"];
        $matching_information = ["E", "C", "F", "C", "A"];
        $two_choices = ["[B, D]", "[B, D]", "[E, D]", "[E, D]"];
        $summary_completion = [
            "activists", "consumerism", "leaflets", "police",
            "restaurants", "performance", "turnover", "goals", "characteristics"
        ];
        $matching_features = ["E", "D", "B", "D", "C"];
        $ynng = ["yes", "no", "no", "not given"];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }   
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }   
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }

        // Cambridge IELTS 20 Academic Listening Test 3 - Listening
        $nc = [
            "Canadian", "furniture", "Park", "[250, 250 sterling]", "phone", "[10 September, 10th September]", "museum", "time", "[blond, blonde]", "[87954 82361, 8795482361]",
            "industry", "constant", "direction", "floor", "predictable", "bay", "gates", "fuel", "jobs", "migration"
        ];
        $two_choices = ["[A, C]", "[A, C]", "[B, E]", "[B, E]"];
        $matching_information = [
            "B", "B", "C", "A", "A", "C",
            "B", "A", "F", "G", "C"
        ];
        $oc = ["b", "a", "c", "b", "a"];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => '1kxpl5g3zFLGtmEY',
                'id_soal' => '1kxpl5g3zFLGtmEY-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
    }
}
