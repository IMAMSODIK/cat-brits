<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS10AcademicTest2 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 10 Academic Reading Test 2 - Reading
        $mh = ["iv", "viii", "vii", "i", "vi", "ix", "ii"];
        $tfng = ["not given", "true", "false", "false", "not given", "true"];
        $matching_information = ["A", "D", "F", "D"];
        $matching_features = ["B", "D", "E", "A", "C"];
        $sentence_completion = ["activities", "[internal regulation, self-regulation]", "emotional awareness", "spoon-feeding"];
        $summary_completion = ["B", "H", "L", "G", "D"];
        $oc = ["c", "d", "a", "d"];
        $ynng = ["not given", "no", "yes", "not given", "no"];

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

        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
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

        for($i = 1; $i <= count($summary_completion); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
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
        $nc = [
            "Hardie", "19", "[GT8 2LC, GT82LC]", "hairdresser", "[dentist, dentist’s]", "lighting", "trains", "safe", "shower", "training",
            "competition", "global", "demand", "customers", "regulation", "project", "flexible", "leadership", "women", "self-employed",
        ];
        $oc = ["a", "c", "c", "a", "a", "c", "c", "a", "a", "c"];
        $matching_information = ["e", "f", "d", "h", "a", "b"];
        $two_choices = ["b", "c", "b", "e"];

        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'QmN0FYAE2DCXRPdC',
                'id_soal' => 'QmN0FYAE2DCXRPdC-1',
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
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
    }
}
