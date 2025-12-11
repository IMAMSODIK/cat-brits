<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS18AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "yPLnQeqINAxbrnva",
            "kategori" => "reading",
            "questions" => [
                "matching_features" => ["c", "b", "a", "e", "b", "d"],
                "two_choices" => ["c", "d", "a", "d"],
                "matching_information" => ["D", "C", "E", "B", "D"],
                "summary_completion" => ["energi", "food", "gardening", "obesity", "i", "f", "a", "c", "h"],
                "oc" => ["b", "c", "d", "b", "a", "d", "c"],
                "ynng" => ["yes", "no", "not given", "yes", "yes", "not given", "no", "no"]
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




        // Cambridge IELTS 10 Academic Listening Test 3 - Listening
        $form_completion = ["4", "46 Wombat", "Thursday", "8.30", "red", "lunch", "glasses", "BALL", "aunt", "month"];
        $two_choices = ["c", "e"];
        $oc = [
            "b",
            "a",
            "c",
            "c",
            "a",
            "a",
            "b",
            "b",
        ];
        $matching_information = [
            "b",
            "c",
            "d",
            "d",
            "a",
            "e",
            "d",
            "a",
            "g",
            "c",
        ];

        $nc = ["[achievement, achievements]", "[personality, character]", "Situational", "friend", "[aspirations, ambitions]", "style", "development", "vision", "structures", "[innovation, innovations]"];

        for ($i = 1; $i <= count($form_completion); $i++) {
            Soal::create([
                'set_id' => 'yPLnQeqINAxbrnva',
                'id_soal' => 'yPLnQeqINAxbrnva-' . $i,
                'tipe_soal' => 'form_completion',
                'kategori' => 'listening',
                'jawaban_benar' => $form_completion[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($two_choices); $i++) {
            Soal::create([
                'set_id' => 'yPLnQeqINAxbrnva',
                'id_soal' => 'yPLnQeqINAxbrnva-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($oc); $i++) {
            Soal::create([
                'set_id' => 'yPLnQeqINAxbrnva',
                'id_soal' => 'yPLnQeqINAxbrnva-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($matching_information); $i++) {
            Soal::create([
                'set_id' => 'yPLnQeqINAxbrnva',
                'id_soal' => 'yPLnQeqINAxbrnva-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($nc); $i++) {
            Soal::create([
                'set_id' => 'yPLnQeqINAxbrnva',
                'id_soal' => 'yPLnQeqINAxbrnva-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
    }
}
