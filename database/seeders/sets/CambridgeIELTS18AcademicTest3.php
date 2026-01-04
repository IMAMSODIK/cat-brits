<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS18AcademicTest3 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 3 - Reading\
        $matching_information = ["G", "D", "C", "F"];
        $summary_completion = [
            "architects", "moisture", "layers", "speed", 
            "speed", "[fifty, 50]", "strict",
            "H", "D", "F", "E", "B"
        ];
        $matching_features = ["C", "A", "B", "D", "A"];
        $mh = ["iii", "viii", "vi", "v", "vii", "i", "iv"];
        $oc = [
            "a", "c", "b", 
            "b", "a", "c", "c"
        ];
        $ynng = [
            "no", "not given", "yes", "no", "not given"
        ];
    
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
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
        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($mh); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'mh',
                'kategori' => 'reading',
                'jawaban_benar' => $mh[$i - 1]
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
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }

        // Cambridge IELTS 18 Academic Listening Test 3 - Listening
        $form_completion = ["Marrowfield", "relative", "[socialise, socialize]", "full"];
        $tc = [
            "Domestic Life", "clouds", "timing", "Animal Magic", "[movement, animal movement]", "dark"
        ];
        $two_choices = ["[B, C]", "[B, C]", "[B, D]", "[B, D]", "[A, E]", "[A, E]", "[B, D]", "[B, D]"];
        $oc = [
            "c", "b", "b", "c", "a", "a"
        ];
        $matching_information = [
            "G", "E", "B", "C", "F", "A"
        ];
        $nc = [
            "technical", "cheap", "thousands", "identification", "tracking", "military", "location", "prediction", "database", "trust"
        ];
        
        for($i = 1; $i <= count($form_completion); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'form_completion',
                'kategori' => 'listening',
                'jawaban_benar' => $form_completion[$i - 1]
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
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
    }
}
