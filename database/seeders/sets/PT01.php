<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class PT01 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 18 Academic Reading Test 4 - Reading
        $answer_reading = [
            "id" => "2uSKN2WwOj6EYc1X",
            "kategori" => "reading",
            "questions" => [
                "mh" => [
                    "ii",
                    "vii",
                    "v",
                    "i",
                    "iii",
                    "ix"
                ],
                "picture_completion" => [
                    "[New Zealand, NZ carrageen(s)]",
                    "agar",
                    "seameal",
                    "cough mixtures",
                    "crochet hook",
                    "[leaflets, leaves]",
                    "thorn",
                    "steps"
                ],
                "matching_information" => [
                    "B",
                    "C",
                    "A",

                    "A",
                    "D",
                    "C",
                    "B",

                    "C",
                    "B",
                    "D",
                    "B",
                    "A",
                    "C"
                ],
                "tfng" => [
                    "TRUE",
                    "TRUE",
                    "FALSE",
                    "TRUE",
                    "NOT GIVEN",
                    "FALSE"
                ],
                "oc" => [
                    "C",
                    "D",
                    "F"
                ],
                "summary_completion" => [
                    "Mesopotamia",
                    "Clay tablets",
                    "Cuneiform",
                    "abstract"
                ]

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
            "id" => "2uSKN2WwOj6EYc1X",
            "kategori" => "listening",
            "questions" => [
                "nc" => [
                    "[Saturday 25th , Saturday 25]",
                    "[55 , fifty-five , fifty five]",
                    "[knives and forks , forks and knives]",
                    "[chairs , garden chairs]",
                    "ice buckets",
                    "[same-day , same day]",
                    "home delivery",
                    "[$3.50 , three dollars fifty]",
                    "Susan Millins",
                    "3987695",
                    "[8 , eight]",
                    "leave",
                    "[three months , 3 months]",
                    "The Secret Garden",
                    "[(the) 20th century , (the) twentieth century]",
                    "walk",
                    "[motivations , motivation]",
                    "abstract ideas",
                    "roses",
                    "[darkness to lightness , dark to light]",
                    "health",
                    "environment",
                    "Human Companionship"
                ],
                "map_labeling" => [
                    "SHOE RACK",
                    "[CARPET,CIRCULAR CARPET,BIG CIRCULAR CARPET]",
                    "BOOKCASE",
                    "DRESS UP CUPBOARD",
                    "[CUBBYHOLE , LITTLE CUBBYHOLES]",
                    "[CLIMBING WALLS , THREE CLIMBING WALLS]",
                    "CHICKENS",
                    "[ear drum , eardrum]",
                    "auditory nerve",
                    "speech processor",
                    "receiver"
                ],
                "summary_completion" => [
                    "amplify",
                    "sound signals",
                    "speech therapy",
                    "natural hearing",
                    "duration",
                    "disease"
                ]
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
