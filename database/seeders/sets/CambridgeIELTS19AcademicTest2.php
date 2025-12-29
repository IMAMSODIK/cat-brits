<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS19AcademicTest2 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "0XIGAcSMlticROES",
            "kategori" => "reading",
            "questions" => [
                "tfng" => ["NOT GIVEN", "FALSE", "NOT GIVEN", "TRUE", "TRUE", "NOT GIVEN"],
                "nc" => ["piston", "coal", "workshops", "labour", "quality", "railways", "sanitation"],
                "matching_information" => ["D", "F", "A", "C", "F"],
                "sc" => ["injury", "serves", "excitement", "[visualisation, visualization]"],
                "two_choices" => ["[B,D]", "[A,E]"],
                "summary_completion" => ["H", "A", "C", "B", "J", "I"],
                "oc" => ["C", "B", "D"],
                "ynng" => ["YES", "NOT GIVEN", "YES", "NOT GIVEN", "NO"]

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
            "id" => "0XIGAcSMlticROES",
            "kategori" => "listening",
            "questions" => [
                "form_completion" => ["MATHIESON", "beginners", "college", "New", "[11, eleven]", "instrument"],
                "table_completion" => ["ear", "Clapping", "recording", "alone"],
                "nc" => ["move", "short", "[discs, disks]", "oxygen", "tube", "temperatures", "protein", "space", "seaweed", "endangered"],
                "oc" => ["A", "B", "A", "B", "C", "A", "A", "B", "B", "B", "C", "A"],
                "two_choices" => ["[C, E]", "[A, B]"],
                "matching_information" => ["E", "B", "A", "C"],

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
