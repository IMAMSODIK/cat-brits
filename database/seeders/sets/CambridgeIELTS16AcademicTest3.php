<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS16AcademicTest3 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "NmeBcwURSR2ZPfdX",
            "kategori" => "reading",
            "questions" => [
                "tfng" => ["FALSE", "NOT GIVEN", "FALSE", "TRUE", "TRUE", "NOT GIVEN", "TRUE", "TRUE", "NOT GIVEN", "FALSE", "FALSE"],
                "summary_completion" => ["lightweight", "bronze", "levels", "hull", "triangular", "music", "grain", "towboats", "['microorganisms', 'micro-organisms']", "reindeer", "insects"],
                "matching_information" => ["D", "C", "F", "H", "G", "B", "H", "D", "G", "C", "A"],
                "two_choices" => ["['b','c']", "['a','c']"],
                "sc" => ["['warm', 'warm winter']", "summer", "['mustard plant', 'mustard plants', 'mustard']"]
            ]
        ];

        $setId = $answer_reading['id'];
        $kategori = $answer_reading['kategori'];

        foreach ($answer_reading['questions'] as $tipe_soal => $answers) {
            foreach ($answers as $index => $jawaban) {

                Soal::create([
                    'set_id' => $setId,
                    'id_soal' => $setId . '-' . ($index + 1), // ID unik
                    'tipe_soal' => $tipe_soal,
                    'kategori' => $kategori,
                    'jawaban_benar' => $jawaban
                ]);
            }
        }

        $answer_listening = [
            "id" => "NmeBcwURSR2ZPfdX",
            "kategori" => "listening",
            "questions" => [
                "nc" => ["park", "blue", "reference", "story", "rain", "snack", "medication", "helmet", "tent", "199", "grandmother", "decade", "equipment", "economic", "basic", "round", "bone", "rough", "style", "sheep"],
                "two_choices" => ["['a','c']", "['b','c']", "['c','d']", "['c','e']"],
                "oc" => ["C", "A", "B", "A", "A", "C"],
                "matching_information" => ["d", "f", "a", "h", "c", "g"]
            ]
        ];

        $setId = $answer_listening['id'];
        $kategori = $answer_listening['kategori'];

        foreach ($answer_listening['questions'] as $tipe_soal => $answers) {
            foreach ($answers as $index => $jawaban) {

                Soal::create([
                    'set_id' => $setId,
                    'id_soal' => $setId . '-' . ($index + 1), // ID unik
                    'tipe_soal' => $tipe_soal,
                    'kategori' => $kategori,
                    'jawaban_benar' => $jawaban
                ]);
            }
        }
    }
}
