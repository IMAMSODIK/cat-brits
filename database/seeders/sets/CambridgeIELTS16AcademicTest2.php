<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS16AcademicTest2 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 16 Academic Reading Test 2 - Reading
        $tfng = [
            "true",
            "not given",
            "true",
            "false",
            "false",
            "true",
            "true",
            "not given",
            "false",
            "not given",
            "not given",
            "true",
            "true"
        ];
        $summary_completion = [
            "Ridgeway",
            "documents",
            "soil",
            "fertility",
            "Rhiannon",
            "G",
            "B",
            "H",
            "E",
            "D",
            "A",
            "C",
            "F",
            "G"
        ];
        $oc = [
            "d",
            "c",
            "a",
            "b",
            "c",
            "b",
            "d"
        ];
        $ynng = ["yes", "no", "not given", "yes", "not given", "no"];

        for ($i = 1; $i <= count($tfng); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($summary_completion); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'summary_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $summary_completion[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($oc); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }

        for ($i = 1; $i <= count($ynng); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 16 Academic Listening Test 2 - Listening
        $nc = [
            "frame",
            "195",
            "payment",
            "Grandparents",
            "[colour, color]",
            "hand",
            "background",
            "focus",
            "[ten, 10 days]",
            "plastic",
            "creativity",
            "therapy",
            "fitness",
            "balance",
            "brain",
            "motivation",
            "isolation",
            "calories",
            "obesity",
            "habit"
        ];
        $oc = [
            "c",
            "b",
            "a",
            "a",
            "c",
            "b",
            "a",
            "c",
            "c"
        ];
        $matching_information = [
            "d",
            "a",
            "b"
        ];
        $two_choices = ["[B, C]", "[B, C]"];
        $fc_completion = ["history", "paper", "[humans, people]", "stress", "graph", "evaluate"];

        for ($i = 1; $i <= count($nc); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for ($i = 1; $i <= count($oc); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for ($i = 1; $i <= count($matching_information); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for ($i = 1; $i <= count($two_choices); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for ($i = 1; $i <= count($fc_completion); $i++) {
            Soal::create([
                'set_id' => 'XW16JROLKCFE4BMH',
                'id_soal' => 'XW16JROLKCFE4BMH-' . $i,
                'tipe_soal' => 'fc_completion',
                'kategori' => 'listening',
                'jawaban_benar' => $fc_completion[$i - 1]
            ]);
        }




    }
}
