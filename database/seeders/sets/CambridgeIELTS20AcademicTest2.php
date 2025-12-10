<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS20AcademicTest2 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 2 - Reading
        $nc = ["Tail", "Flippers", "Hairs", "Seagrasses", "Lips", "Buoyancy"];
        $tfng = ["true", "not given", "false", "not given", "true"];
        $matching_information = ["B", "F", "B"];
        $summary_completion = [
            "Laziness", "Anxious", "Threats", "Exams", "Perfectionists", "Guilt",
            "f", "d", "h", "b", "g"
        ];
        $two_choices = ["a", "c", "a", "e"];
        $ynng = ["no", "yes", "not given", "no", "not given", "yes"];
        $oc = ["b", "d", "c"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }   

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }


        // Cambridge IELTS 20 Academic Listening Test 2 - Listening
        $nc = [
            "Break", "Time", "Shower", "Money", "Memory", "Lifting", "Fall", "Taxi", "Insurance", "Stress",
            "[Photos, Photographs, Pictures]", "Vegan", "[Chefs, Cooks]", "[Journalists, Reporters]", "Health", "Coffee", "Environment", "Reputation", "[Price, Cost]", "Soil"
        ];
        $matching_information = [
            "D", "I", "H", "E", "A", "B",
            "D", "G", "B", "A", "E"
        ];
        $oc = [
            "b", "a", "b", "a",
            "c", "a", "a", "b", "c"
        ];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'EKX6hyJgeV3x0pxB',
                'id_soal' => 'EKX6hyJgeV3x0pxB-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
    }
}
