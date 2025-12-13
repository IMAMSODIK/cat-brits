<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS17AcademicTest3 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 17 Academic Reading Test 3 - Reading
        $nc = ["carnivorous", "scent", "pouch", "fossil", "habitat"];
        $tfng = [
            "true", "false", "not given", "false", "not given", "false", "true", "not given"
        ];
        $matching_information = ["F", "G", "A", "H", "B", "E", "C"];
        $two_choices = ["b", "c"];
        $sentence_completion = ["solid", "[orangutan, Sumatran orangutan, orang-utan, Sumatran orang-utan]", "carbon stocks", "biodiversity"];
        $oc = ['d', 'b', 'c', 'd', 'c'];
        $ynng = [
            "no", "yes", "not given", "no"
        ];
        $summary_completion = [
            "H", "D", "I", "B", "F"
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
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'two_cho$two_choices',
                'kategori' => 'reading',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($sentence_completion); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'sentence_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $sentence_completion[$i - 1]
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
        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }


        // Cambridge IELTS 17 Academic Listening Test 3 - Listening
        $nc = [
            "family", "fit", "hotels", "Carrowniskey", "week", "bay", "September", "[19, nineteen]", "[30, thirty]", "boots",
            "mud", "feathers", "shape", "moon", "neck", "evidence", "destinations", "oceans", "recovery", "atlas"
        ];
        $oc = [
            "c", "c", "a",
            "b", "a", "a", "b"
        ];
        $two_choices = ["b", "e"];
        $matching_information = [
            "e", "d", "g", "f", "c",
            "c", "a", "d", "b", "f", "h"
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
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 's4gzzYRpwLnhLRFf',
                'id_soal' => 's4gzzYRpwLnhLRFf-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
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
