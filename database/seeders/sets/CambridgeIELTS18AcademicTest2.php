<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS18AcademicTest2 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 2 - Reading\
        $nc = [
            "[antlers, deer antlers]", "[posts, timber posts]", "tree trunks", "oxen", "glaciers", "druids", "burial", "calendar"
        ];
        $tfng = [
            "true", "false", "false", "true", "not given",
            "not given", "not given", "true", "false", "true", "not given", "false"
        ];
        $oc = [
            "c", "a", "b", "d", "c", "d"
        ];
        $ynng = [
            "yes", "not given", "no", "yes"
        ];
        $summary_completion = [
            "c", "a", "e",
            "transport", "staircases", "engineering", "rule", "Roman", "Paris", "outwards"
        ];
        
    
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'two_cho$ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        // Cambridge IELTS 18 Academic Listening Test 2 - Listening
        $nc = [
            "training", "discount", "taxi", "service", "English",
            "convenient", "suits", "tailor", "profession", "visible", "[string, strings]", "[waist, waists]", "perfume", "image", "handbag"
        ];
        $tc = [
            "Wivenhoe", "equipment", "9.75", "deliveries", "Sunday"
        ];
        $two_choices = ["b", "e", "b", "c", "a", "b"];
        $map_labeling = ["g", "c", "d", "b", "h", "a"];
        $oc = [
            "c", "a", "b", "b"
        ];
        $matching_information = [
            "d", "a", "c", "f"
        ];
        

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'listening',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'two_$two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($map_labeling); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'map_labeling',
                'kategori' => 'listening',
                'jawaban_benar' => $map_labeling[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
    }
}
