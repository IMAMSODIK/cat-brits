<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS11AcademicTest1 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 10 Academic Reading Test 3 - Reading
        $mh = ["ii", "i", "v", "vii"]; //matching headings
        $tfng = [
            "true", "not given", "not given", "true", "not given", "false",
            "false", "true", "not given"
        ]; //true, false or not given
        $sentence_completion = ["[source of income, industry]", "employer", "domestic tourism"]; //sentence completion
        $matching_information = ["C", "B", "H", "B", "E"]; //matching information
        $nc = ["[sun, sunlight]", "upper", "dry", "north"]; //note completion
        $oc = ["b", "c", "a", "d", "c"]; //one choice
        $summary_completion = ["B", "F", "I", "G", "D"]; // summary completion
        $ynng = ["no", "yes", "not given", "yes", "not given"]; // yes, no, not given

        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'mh',
                'kategori' => 'reading',
                'jawaban_benar' => $mh[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($sentence_completion); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'sentence_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $sentence_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 10 Academic Listening Test 1 - Listening
        $form_completion = ["4", "46 Wombat", "Thursday", "8.30", "red", "lunch", "glasses", "BALL", "aunt", "month"];
        $two_choices = ["c", "e"];
        $oc = ["b", "a", "c"];
        $matching_information = ["e", "d", "a", "g", "c"];
        $nc = [
            "[achievement, achievements]", "[personality, character]", "Situational", "friend", "[aspirations, ambitions]", "style", "development", "vision", "structures", "[	innovation, innovations]",
        ];
        

        for($i = 1; $i <= count($form_completion); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'form_completion',
                'kategori' => 'listening',
                'jawaban_benar' => $form_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-1',
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
    }
}
