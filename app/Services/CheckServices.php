<?php

namespace App\Services;

use App\Models\SetSoal;
use App\Models\Soal;
use App\Models\TestDetailHistory;
use App\Models\TestHistory;
use App\Models\Videos;
use App\Models\Writing;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class CheckServices
{
    public static function checkSpeaking($setId, $questionId, $part, $path, $filename, $kategori, $studentId, $url)
    {
        DB::beginTransaction();
        try {

            $setSoal = SetSoal::where('kode', $setId)->first();

            $video = Videos::create([
                'student_id' => $studentId,
                'set_soal_id' => $setSoal->id,
                'no_soal' => (int) $questionId,
                'part_soal' => (int) $part,
                'tipe' => 'practice',
                'video' => $filename,
            ]);

            $history = TestHistory::create([
                'student_id' => $studentId,
                'teacher_id' => null,
                'tipe_test' => 'practice',
                'kategori' => $kategori,
                'tipe' => "Part " . $part,
                'set_soal_id' => $setSoal->id,
                'nama_tipe' => "Part " . $part,
            ]);

            TestDetailHistory::create([
                'test_history_id' => $history->id,
                'soal_id' => 'video-' . $video->id,
                'jawaban_user' => $filename,
                'jawaban_benar' => '',
                'status' => false,
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Video uploaded successfully.',
                'file' => $filename,
                'path' => $path,
                'url' => $url,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public static function checkWriting($setId, $task, $answer, $kategori, $studentId, $tipe, $namaTipe, $questionId)
    {
        DB::beginTransaction();
        try {
            $setSoal = SetSoal::where('kode', $setId)->first();
            $writing = Writing::create([
                'student_id' => $studentId,
                'set_soal_id' => $setSoal->id,
                'no_soal' => (int) $questionId,
                'task' => $task,
                'tipe' => $tipe,
                'answer' => $answer
            ]);

            $history = TestHistory::create([
                'student_id' => $studentId,
                'teacher_id' => null,
                'tipe_test' => $tipe,
                'kategori' => $kategori,
                'tipe' => $tipe,
                'set_soal_id' => $setSoal->id,
                'nama_tipe' => $namaTipe,
            ]);

            TestDetailHistory::create([
                'test_history_id' => $history->id,
                'soal_id' => 'writing-' . $writing->id,
                'jawaban_user' => $answer,
                'jawaban_benar' => '',
                'status' => false,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Task submited successfully.'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public static function parseStringArray($value)
    {
        if (is_array($value)) {
            return $value;
        }

        $value = trim((string) $value);

        // BUKAN array string → kembalikan string apa adanya
        if (!str_starts_with($value, '[') || !str_ends_with($value, ']')) {
            return $value;
        }

        // Coba JSON decode
        $decoded = json_decode($value, true);
        if (is_array($decoded)) {
            return array_map(fn($v) => $v === null ? '' : $v, $decoded);
        }

        // Single-quote array
        $jsonLike = preg_replace("/'([^']*)'/", '"$1"', $value);
        $decoded = json_decode($jsonLike, true);

        if (is_array($decoded)) {
            return array_map(fn($v) => $v === null ? '' : $v, $decoded);
        }

        // Manual fallback
        $clean = trim($value, '[]');

        return array_map(function ($item) {
            $item = trim($item);
            return strtolower($item) === 'null'
                ? ''
                : trim($item, "\"'");
        }, explode(',', $clean));
    }

    public static function checkOtherType($setId, $data, $kategori, $tipe, $namaTipe, $studentId)
    {

        DB::beginTransaction();
        try {
            $score = 0;
            $results = [];
            $q = 1;
            $filledAnswers = collect($data)
                ->pluck('answer')
                ->filter(function ($answer) {
                    return !(
                        is_null($answer) ||
                        $answer === '' ||
                        (is_string($answer) && json_decode($answer, true) === [null])
                    );
                });


            if ($filledAnswers->isEmpty()) {
                throw new \Exception('Tidak ada jawaban yang dikirim.' . $data, 400);
            };
            $soals = Soal::where('set_id', $setId)
                ->where('kategori', $kategori)
                ->where('tipe_soal', $tipe)
                ->get();

            if ($soals->isEmpty()) {
                throw new \Exception('Soal tidak ditemukan untuk set_id, kategori, dan tipe_soal yang diberikan.' . $setId . $kategori . $tipe, 404);
            };

            foreach ($data as $item) {
                $answer = $item['answer'];
                $idSoal = isset($item['name']) ? str_replace('[]', '', $item['name']) : null;
                $jawaban = false;

                $soal = $soals->firstWhere('id_soal', $idSoal);
                if (!$soal) {
                    throw new \Exception("Soal dengan id_soal {$idSoal} tidak ditemukan.", 404);
                }
                $correctAnswer = $soal->jawaban_benar;
                $parsedAnswer = self::parseStringArray($answer);
                $parsedCorrect = self::parseStringArray($correctAnswer);

                if (is_array($parsedCorrect)) {
                    if (is_array($parsedAnswer)) {
                        foreach ($parsedCorrect as $i => $pc) {
                            $currAns = $parsedAnswer[$i] ?? null;
                            if ($currAns !== null && in_array(strtolower($currAns), array_map('strtolower', array_map('trim', $parsedCorrect)))) {
                                $jawaban = true;
                                $score++;
                            } else {
                                $jawaban = false;
                            }
                            $results[$q] = [
                                'status' => $jawaban ? 'correct' : 'wrong',
                                'user' => $parsedAnswer[$i] ?: null,
                                'correct' => $correctAnswer ?: null,
                            ];
                            $q++;
                        }
                    } else {
                        if (in_array(trim((string) $answer), array_map('strtolower', array_map('trim', $parsedCorrect)))) {
                            $jawaban = true;
                            $score++;
                        } else {
                            $jawaban = false;
                        }
                        $results[$q] = [
                            'status' => $jawaban ? 'correct' : 'wrong',
                            'user' => $answer ?: null,
                            'correct' => $correctAnswer ?: null,
                        ];
                        $q++;
                    }
                } else {
                    if (strtolower(trim((string) $answer)) === strtolower(trim($correctAnswer))) {
                        $jawaban = true;
                        $score++;
                    } else {
                        $jawaban = false;
                    }
                    $results[$q] = [
                        'status' => $jawaban ? 'correct' : 'wrong',
                        'user' => $answer ?: null,
                        'correct' => $correctAnswer ?: null,
                    ];
                    $q++;
                }
            }
            $setSoal = SetSoal::where('kode', $setId)->first();
            $history = TestHistory::create([
                'student_id' => $studentId,
                'teacher_id' => null,
                'tipe_test' => 'practice',
                'kategori' => $kategori,
                'tipe' => $tipe,
                'set_soal_id' => $setSoal->id,
                'score' => $score,
                'jumlah_soal' => $q - 1,
                'nama_tipe' => $namaTipe,
            ]);

            foreach ($results as $qid => $res) {
                TestDetailHistory::create([
                    'test_history_id' => $history->id,
                    'soal_id' => $qid,
                    'jawaban_user' => $res['user'] ?? '',
                    'jawaban_benar' => (string)($res['correct'] ?? ''),
                    'status' => $res['status'] === 'correct',
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'ok',
                'score' => $score,
                'results' => $results,
                'history_id' => $history->id
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
