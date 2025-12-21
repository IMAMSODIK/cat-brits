<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS19AcademicTest1 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "rbsuXiTcqh8ewr9Q",
            "kategori" => "reading",
            "questions" => [
                "tfng" => ["FALSE", "FALSE", "NOT GIVEN", "FALSE", "NOT GIVEN", "TRUE", "TRUE"],
                "nc" => ["paint", "topspin", "training", "intestines", "weights", "grips"],
                "matching_information" => ["D", "G", "C", "A", "G", "B"],
                "two_choices" => ["['B','D']", "['C','E']"],
                "summary_completion" => ["grain", "punishment", "ransom", "G", "J", "H", "B", "E", "C"],
                "oc" => ["D", "A", "C", "D"],
                "ynng" => ["YES", "NOT GIVEN", "NO", "NOT GIVEN"]
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
            "id" => "rbsuXiTcqh8ewr9Q",
            "kategori" => "listening",
            "questions" => [
                "nc" => ["69", "stream", "data", "map", "visitors", "sounds", "freedom", "skills", "4.95", "leaders", "walls", "son", "fuel", "oxygen", "rectangular", "lamps", "family", "winter", "soil", "rain"],
                "oc" => ["B", "A", "B", "C", "A"],
                "map_labeling" => ["G", "C", "B", "D", "A"],
                "two_choices" => ["['B', 'D']", "['A', 'E']"],
                "matching_information" => ["D", "G", "C", "B", "F", "H"],

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
