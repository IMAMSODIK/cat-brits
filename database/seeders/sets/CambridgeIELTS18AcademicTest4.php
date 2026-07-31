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
                "two_choices" => ["[c,d]", "[a,d]"],
                "matching_information" => ["D", "C", "E", "B", "D"],
                "summary_completion" => ["energy", "food", "gardening", "obesity", "i", "f", "a", "c", "h", "e"],
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

        $answer_listening = [
            "id" => "yPLnQeqINAxbrnva",
            "kategori" => "listening",
            "questions" => [
                "nc" => [
                    "receptionist",
                    "Medical",
                    "Chastons",
                    "appointments",
                    "database",
                    "experience",
                    "confident",
                    "temporary",
                    "1.15",
                    "parking",
                    "plot",
                    "poverty",
                    "Europe",
                    "poetry",
                    "drawings",
                    "furniture",
                    "lamps",
                    "[harbour, harbor]",
                    "children",
                    "relatives"
                ],
                "oc" => ["B", "A", "A", "C", "A", "B", "C"],
                "matching_information" => ["F", "G", "E", "A", "C", "B", "D", "A", "C", "G", "F"],
                "two_choices" => ["[B, D]"],
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
