<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS14AcademicTest4 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "5k29sSZyLQgQjLWX",
            "kategori" => "reading",
            "questions" => [
                "nc" => ["['four', '4']", "young", "food", "light", "aggressively", "location", "neurons", "chemicals", "large", "microplastic", "populations", "concentrations", "predators", "disasters"],
                "tfng" => ["FALSE", "TRUE", "FALSE", "NOT GIVEN", "TRUE", "TRUE", "TRUE", "NOT GIVEN", "FALSE", "NOT GIVEN", "FALSE", "NOT GIVEN", "FALSE", "TRUE", "FALSE", "TRUE", "NOT GIVEN"],
                "matching_information" => ["B", "E", "C", "A"],
                "two_choices" => ["['b','d']", "['b','e']"],
                "oc" => ["A"]

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
            "id" => "5k29sSZyLQgQjLWX",
            "kategori" => "listening",
            "questions" => [
                "nc" => ["85", "roses", "trees", "stage", "speech", "support", "cabins", "spring", "tools", "maps", "heavy", "marble", "light", "camera, cameras", "medical", "eyes", "wine"],
                "matching_information" => ["C", "A", "B", "G", "D", "A", "E", "F", "B", "F", "E", "C", "B", "G"],
                "two_choices" => ["['b','d']", "['a','d']"],
                "oc" => ["A", "C", "A", "B", "B"],
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
