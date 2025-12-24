<?php

namespace Database\Seeders\Sets;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class CambridgeIELTS19AcademicTest3 extends Seeder
{
    public function run()
    {
        // Cambridge IELTS 20 Academic Reading Test 3 - Reading
        $tfng = ["false", "false", "true", "not given", "true", "not given", "false"];
        $nc = ["caves", "stone", "bones", "beads", "pottery", "spices"];
        $matching_information = ["G", "A", "H", "B"];
        $sentence_completion = ["carbon", "fires", "biodiversity", "ditches", "subsidence"];
        $matching_features = ["A", "C", "D", "B"];
        $oc = ["D", "A", "C", "B"];
        $mse = ["C", "E", "F", "B"];
        $ynng = ["no", "yes", "no", "not given", "not given", "yes"];
        
        for($i = 1; $i <= count($tfng); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'tfng',
                'kategori' => 'reading',
                'jawaban_benar' => $tfng[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'reading',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }   
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }   
        for($i = 1; $i <= count($sentence_completion); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'sentence_completion',
                'kategori' => 'reading',
                'jawaban_benar' => $sentence_completion[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_features); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'matching_features',
                'kategori' => 'reading',
                'jawaban_benar' => $matching_features[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'reading',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($mse); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'mse',
                'kategori' => 'reading',
                'jawaban_benar' => $mse[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($ynng); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'ynng',
                'kategori' => 'reading',
                'jawaban_benar' => $ynng[$i - 1]
            ]);
        }


        // Cambridge IELTS 20 Academic Listening Test 3 - Listening
        $nc = [
            "[harbour, harbor]", "bridge", "[3.30, 3:30, three thirty, half 3, three]", "[Rose, rose]", "sign", "purple",
            "clothing", "mouths", "salt", "toothpaste", "[fertilizers, fertilisers]", "nutrients", "growth", "weight", "acid", "society"
        ];
        $tc = ["samphire", "melon", "coconut", "strawberry"];
        $matching_information = ["C", "D", "F", "G", "B", "H"];
        $two_choices = ["D", "E", "B", "C"];
        $oc = ["c", "b", "a", "a", "c"];
        $fc_completion = ['C', 'H', 'E', 'B', 'F'];
        
        for($i = 1; $i <= count($nc); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'nc',
                'kategori' => 'listening',
                'jawaban_benar' => $nc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($tc); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'tc',
                'kategori' => 'listening',
                'jawaban_benar' => $tc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($matching_information); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'matching_information',
                'kategori' => 'listening',
                'jawaban_benar' => $matching_information[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($two_choices); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'two_choices',
                'kategori' => 'listening',
                'jawaban_benar' => $two_choices[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($oc); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'oc',
                'kategori' => 'listening',
                'jawaban_benar' => $oc[$i - 1]
            ]);
        }
        for($i = 1; $i <= count($fc_completion); $i++){
            Soal::create([
                'set_id' => 'GEf4EtQ1AZxTFhTw',
                'id_soal' => 'GEf4EtQ1AZxTFhTw-' . $i,
                'tipe_soal' => 'fc_completion',
                'kategori' => 'listening',
                'jawaban_benar' => $fc_completion[$i - 1]
            ]);
        }
    }
}
