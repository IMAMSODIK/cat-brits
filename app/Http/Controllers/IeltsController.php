<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\Soal;
use App\Models\TestDetailHistory;
use App\Models\TestHistory;
use App\Models\User;
use App\Models\VideoCall;
use App\Models\Videos;
use App\Models\Writing;
use App\Services\CheckServices;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;
use function Symfony\Component\Translation\t;

class IeltsController extends Controller
{
    use AuthorizesRequests;

    private function getScore($kategori, $correctAnswers)
    {
        $readingScoreMap = [
            ['min' => 39, 'max' => 40, 'score' => 9.0],
            ['min' => 37, 'max' => 38, 'score' => 8.5],
            ['min' => 35, 'max' => 36, 'score' => 8.0],
            ['min' => 33, 'max' => 34, 'score' => 7.5],
            ['min' => 30, 'max' => 32, 'score' => 7.0],
            ['min' => 27, 'max' => 29, 'score' => 6.5],
            ['min' => 23, 'max' => 26, 'score' => 6.0],
            ['min' => 19, 'max' => 22, 'score' => 5.5],
            ['min' => 15, 'max' => 18, 'score' => 5.0],
            ['min' => 13, 'max' => 14, 'score' => 4.5],
            ['min' => 10, 'max' => 12, 'score' => 4.0],
            ['min' => 8, 'max' => 9, 'score' => 3.5],
            ['min' => 6, 'max' => 7, 'score' => 3.0],
            ['min' => 4, 'max' => 5, 'score' => 2.5],
        ];

        $listeningScoreMap = [
            ['min' => 39, 'max' => 40, 'score' => 9.0],
            ['min' => 37, 'max' => 38, 'score' => 8.5],
            ['min' => 35, 'max' => 36, 'score' => 8.0],
            ['min' => 32, 'max' => 34, 'score' => 7.5],
            ['min' => 30, 'max' => 31, 'score' => 7.0],
            ['min' => 26, 'max' => 29, 'score' => 6.5],
            ['min' => 23, 'max' => 25, 'score' => 6.0],
            ['min' => 18, 'max' => 22, 'score' => 5.5],
            ['min' => 16, 'max' => 17, 'score' => 5.0],
            ['min' => 13, 'max' => 15, 'score' => 4.5],
            ['min' => 11, 'max' => 12, 'score' => 4.0],
            ['min' => 8, 'max' => 10, 'score' => 3.5],
            ['min' => 6, 'max' => 7, 'score' => 3.0],
            ['min' => 4, 'max' => 5, 'score' => 2.5],
        ];

        $map = $kategori === 'reading' ? $readingScoreMap : $listeningScoreMap;

        foreach ($map as $item) {
            if ($correctAnswers >= $item['min'] && $correctAnswers <= $item['max']) {
                return $item['score'];
            }
        }

        return 0;
    }

    public function index(Request $r)
    {
        try {
            $data = [
                'pageTitle' => "IELTS",
                'sets' => SetSoal::all(),
            ];

            return view('ielts.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
        }
    }

    public function categories(Request $r)
    {
        try {
            $data = [
                'pageTitle' => "IELTS Categories",
            ];

            if ($r->has('set-id')) {
                $set = SetSoal::where('kode', $r->input('set-id'))->first();
                $data['set'] = $set;
                $data['pageTitle'] = "Test Subjects";
                switch ($r->input('set-id')) {
                    case 'XJ3XOcvqPbgdZwyl':
                        return view('ielts.categories', $data);
                        break;
                    case 'QmN0FYAE2DCXRPdC':
                        return view('ielts.categories', $data);
                        break;
                    case 's4gzzYRpwLnhLRFf':
                        return view('ielts.categories', $data);
                        break;
                    case '11qYaGWPJUTxUVdq':
                        return view('ielts.categories', $data);
                        break;
                    case 'EKX6hyJgeV3x0pxB':
                        return view('ielts.categories', $data);
                        break;
                    case 'bBhJMdwYSokWGAc9':
                        return view('ielts.categories', $data);
                        break;
                    case '4JIjUOPpLAJ2FYdl':
                        return view('ielts.categories', $data);
                        break;
                    case 'Avfd93r1YAojm5Pb':
                        return view('ielts.categories', $data);
                        break;
                    case '1kxpl5g3zFLGtmEY':
                        return view('ielts.categories', $data);
                        break;
                    case 'nHmZBcocwalVytdH':
                        return view('ielts.categories', $data);
                        break;
                    case 'YuuZXlhsVNh26gHr':
                        return view('ielts.categories', $data);
                        break;

                    case 'BHByU4OTwRblfc5c':
                        return view('ielts.categories', $data);
                        break;

                    case '9uAizxgIsFCinyrq':
                        return view('ielts.categories', $data);
                        break;

                    case 'GTZbRoMFOA5DZLNK':
                        return view('ielts.categories', $data);
                        break;

                    case 'blsodB9LLhUn0zcg':
                        return view('ielts.categories', $data);
                        break;
                    case 'XW16JROLKCFE4BMH':
                        return view('ielts.categories', $data);
                        break;
                    case 'NmeBcwURSR2ZPfdX':
                        return view('ielts.categories', $data);
                        break;
                    case 'TqMfMy8BLvZp0JDm':
                        return view('ielts.categories', $data);
                        break;
                    case 'QUApDKzp0Wn1GCiA':
                        return view('ielts.categories', $data);
                        break;
                    case 'DPCLyNHpDTqSciXd':
                        return view('ielts.categories', $data);
                        break;
                    case 'wq6xHskL3uTj5VSU':
                        return view('ielts.categories', $data);
                        break;
                    case '15gOXcE7omDCL1uE':
                        return view('ielts.categories', $data);
                        break;
                    case 'KeCD0au8jSaBuT3A':
                        return view('ielts.categories', $data);
                        break;
                    case 'JSRJ0oDlxC0yFMgt':
                        return view('ielts.categories', $data);
                        break;
                    case '8uQvKzYbHuROu9RJ':
                        return view('ielts.categories', $data);
                        break;
                    case 'yPLnQeqINAxbrnva':
                        return view('ielts.categories', $data);
                        break;
                    case 'xQKeqKYrkqfdgotg':
                        return view('ielts.categories', $data);
                        break;
                    case 'GEf4EtQ1AZxTFhTw':
                        return view('ielts.categories', $data);
                        break;
                    case 'IgWhHunhjhOYd3hb':
                        return view('ielts.categories', $data);
                        break;
                    // 18 END

                    // 19 START
                    case 'rbsuXiTcqh8ewr9Q':
                        return view('ielts.categories', $data);
                        break;

                    case '0XIGAcSMlticROES':
                        return view('ielts.categories', $data);
                        break;

                    case 'cwwPbLf22UsNEqIp':
                        return view('ielts.categories', $data);
                        break;
                        // case 'kqQSrG7Rs5yw1AuD':
                        //     return view('ielts.categories', $data);
                        //     break;
                }
            }

            return view('ielts.categories', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
        }
    }

    public function practice(Request $r)
    {
        try {
            $data = [];

            if ($r->has('set-id') && $r->input('section')) {
                $set = SetSoal::where('kode', $r->input('set-id'))->first();
                if ($set) {
                    $data['set'] = $set;
                    $data['section'] = $r->input('section');

                    $blade = 'ielts.sets.' . $r->input('set-id') . '.practice.' . $r->input('section');
                    return view($blade, $data);
                } else {
                    return redirect()->back()->with('error', 'Question set not found.');
                }
            } else {
                return redirect()->back()->with('error', 'Incomplete request.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
        }
    }

    public function checkV2(Request $r)
    {
        $setId = $r->input('set_id');
        $tipe = $r->input('tipe');
        $kategori = $r->input('kategori');
        $jumlahSoal = $r->input('jumlah_soal');
        $namaTipe = $r->input('nama_tipe');
        $questionId = $r->input('question_id', null);


        switch ($kategori) {
            case 'speaking':
                $r->validate([
                    'video' => 'required|file|mimetypes:video/webm,video/mp4,video/ogg|max:204800',
                    'question_id' => 'nullable|string',
                    'timestamp' => 'nullable'
                ]);
                $part = $r->input('part', null);
                $filename = 'recording_q-' . $setId . '-' . $questionId . '_' . time() . '.webm';
                $path = $r->file('video')->storeAs('recordings', $filename, 'public');
                $url = Storage::url($path);
                return CheckServices::checkSpeaking($setId, $questionId, $part, $path, $filename, $kategori, Auth::id(), $url);

            case 'writing':
                $r->validate([
                    'answer' => 'required',
                    'task' => 'required',
                    'tipe' => 'required',
                    'no_soal' => 'required',
                    'set_id' => 'required',
                    'kategori' => 'required',
                ]);

                $task = $r->input('task', null);
                $answer = $r->input('answer', null);
                return CheckServices::checkWriting($setId, $task, $answer, $kategori, Auth::id(), $tipe, $namaTipe, $questionId);

            default:
                $dataJson = $r->input('data');
                $data = json_decode($dataJson, true);
                return CheckServices::checkOtherType($setId, $data, $kategori, $tipe, $namaTipe, Auth::id());
        }
    }

    public function check(Request $r)
    {
        DB::beginTransaction();
        try {
            $setId = $r->input('set_id');
            $tipe = $r->input('tipe');
            $kategori = $r->input('kategori');
            $jumlahSoal = $r->input('jumlah_soal');
            $namaTipe = $r->input('nama_tipe');

            if ($kategori == 'speaking') {
                $r->validate([
                    'video' => 'required|file|mimetypes:video/webm,video/mp4,video/ogg|max:204800',
                    'question_id' => 'nullable|string',
                    'timestamp' => 'nullable'
                ]);

                $questionId = $r->input('question_id', null);
                $part = $r->input('part', null);
                $filename = 'recording_q-' . $setId . '-' . $questionId . '_' . time() . '.webm';
                $path = $r->file('video')->storeAs('recordings', $filename, 'public');

                $setSoal = SetSoal::where('kode', $setId)->first();

                $saveVideos = Videos::create([
                    'student_id' => Auth::user()->id,
                    'set_soal_id' => $setSoal->id,
                    'no_soal' => (int) $questionId,
                    'part_soal' => (int) $part,
                    'tipe' => 'practice',
                    'video' => $filename,
                ]);

                DB::commit();

                if ($saveVideos) {
                    $history = TestHistory::create([
                        'student_id' => Auth::id(),
                        'teacher_id' => null,
                        'tipe_test' => 'practice',
                        'kategori' => $kategori,
                        'tipe' => "Part " . $part,
                        'set_soal_id' => $setSoal->id,
                        'nama_tipe' => "Part " . $part,
                    ]);

                    return response()->json([
                        'success' => true,
                        'message' => 'Video uploaded successfully.',
                        'file' => $filename,
                        'path' => $path,
                        'url' => Storage::url($path)
                    ]);
                }
            } else if ($kategori == 'writing') {
                $r->validate([
                    'answer' => 'required',
                    'task' => 'required',
                    'tipe' => 'required',
                    'no_soal' => 'required',
                    'set_id' => 'required',
                    'kategori' => 'required',
                ]);

                $questionId = $r->input('no_soal', null);
                $task = $r->input('task', null);
                $answer = $r->input('answer', null);
                $setSoal = SetSoal::where('kode', $setId)->first();

                $saveWriting = Writing::create([
                    'student_id' => Auth::user()->id,
                    'set_soal_id' => $setSoal->id,
                    'no_soal' => (int) $questionId,
                    'task' => $task,
                    'tipe' => $tipe,
                    'answer' => $answer
                ]);

                DB::commit();

                if ($saveWriting) {
                    $history = TestHistory::create([
                        'student_id' => Auth::id(),
                        'teacher_id' => null,
                        'tipe_test' => $tipe,
                        'kategori' => $kategori,
                        'tipe' => $r->task,
                        'set_soal_id' => $setSoal->id,
                        'nama_tipe' => $r->task,
                    ]);

                    return response()->json([
                        'status' => true,
                        'message' => 'Task submited successfully.'
                    ]);
                }
            } else {
                $results = [];
                $score = 0;
                $payloadKeys = collect($r->all())
                    ->keys()
                    ->filter(fn($k) => str_starts_with($k, $setId . '-'))
                    ->values();

                if ($tipe === "two_choices") {
                    $answers = (array) $r->input($payloadKeys[0], []);
                    $soalIds = [];

                    foreach ($payloadKeys as $key) {
                        [$prefix, $number] = explode('-', $key);
                        $number = (int) $number;

                        $soal1 = "{$prefix}-{$number}";
                        $soal2 = "{$prefix}-" . ($number + 1);

                        $soalIds[$soal1] = $answers[0] ?? "";
                        $soalIds[$soal2] = $answers[1] ?? "";
                    }

                    $soals = Soal::where('set_id', $setId)
                        ->where('kategori', $kategori)
                        ->where('tipe_soal', $tipe)
                        ->whereIn('id_soal', array_keys($soalIds))
                        ->get();
                } else {
                    $soalIds = $payloadKeys->toArray();
                    $soals = Soal::where('set_id', $setId)
                        ->where('kategori', $kategori)
                        ->where('tipe_soal', $tipe)
                        ->whereIn('id_soal', $soalIds)
                        ->get();
                }

                $results = [];
                $score = 0;

                foreach ($soalIds as $qid) {
                    if ($tipe == "two_choices") {
                        $key = array_search($qid, $soalIds, true);
                        $rawUser = $qid;
                        $soal = $soals->firstWhere('id_soal', $key);
                    } else {
                        $rawUser = $r->input($qid, '');
                        $soal = $soals->firstWhere('id_soal', $qid);
                    }
                    $userNorm = mb_strtoupper(trim($rawUser));

                    $correctRaw = (string) optional($soal)->jawaban_benar;
                    $correctNorm = mb_strtoupper(trim($correctRaw));
                    $userNorm = mb_strtoupper(trim($rawUser));

                    $matched = false;

                    if (preg_match('/\[\s*(.*?)\s*\]/', $correctRaw, $matches)) {
                        $list = explode(',', $matches[1]);
                        $list = array_map(fn($v) => mb_strtoupper(trim($v)), $list);

                        if (in_array($userNorm, $list)) {
                            $matched = true;
                        }
                    } else {
                        $matched = ($userNorm === $correctNorm);
                    }

                    if ($matched)
                        $score++;

                    $results[$qid] = [
                        'status' => $matched ? 'correct' : 'wrong',
                        'user' => $rawUser ?: null,
                        'correct' => $correctRaw ?: null,
                    ];
                }

                $setSoal = SetSoal::where('kode', $setId)->first();
                $history = TestHistory::create([
                    'student_id' => Auth::id(),
                    'teacher_id' => null,
                    'tipe_test' => 'practice',
                    'kategori' => $kategori,
                    'tipe' => $tipe,
                    'set_soal_id' => $setSoal->id,
                    'score' => $score,
                    'jumlah_soal' => $jumlahSoal,
                    'nama_tipe' => $namaTipe,
                ]);

                foreach ($results as $qid => $res) {
                    TestDetailHistory::create([
                        'test_history_id' => $history->id,
                        'soal_id' => $qid,
                        'jawaban_user' => $res['user'] ?? '',
                        'jawaban_benar' => $res['correct'] ?? '',
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
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function mockTestCheck(Request $r)
    {
        DB::beginTransaction();
        try {
            $setId = $r->input('set_id');
            $kategori = $r->input('kategori');
            $answers = $r->input('answers', []);

            if (empty($answers)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Tidak ada jawaban dikirim.'
                ], 400);
            }

            $results = [];
            $score = 0;

            foreach ($answers as $ans) {

                $qid = $ans['question'] ?? null;
                $type = $ans['type'] ?? null;
                $name = $ans['name'] ?? null;

                $rawAnswer = $ans['answer'] ?? null;
                if (is_array($rawAnswer)) {
                    $userAns = implode(',', $rawAnswer);
                } else {
                    $userAns = trim($rawAnswer ?? '');
                }

                if (!$type)
                    continue;
                $cleanName = str_replace(['[]'], '', $name);

                $uniqueKey = "{$type}-{$cleanName}";

                $parts = explode("-", $cleanName);
                $lastPart = end($parts);

                $nomor = preg_replace('/[^0-9]/', '', $lastPart);

                if (!$nomor) {
                    $nomor = $qid;
                }

                $idSoal = $setId . '-' . $nomor;
                if ($type === 'two_choices') {

                    $userList = is_array($rawAnswer) ? $rawAnswer : [$rawAnswer];
                    $userList = array_map(fn($v) => strtolower(trim($v)), $userList);

                    $soal1 = Soal::where('set_id', $setId)
                        ->where('kategori', $kategori)
                        ->where('tipe_soal', $type)
                        ->where('id_soal', $setId . '-' . $nomor)
                        ->first();

                    $soal2 = Soal::where('set_id', $setId)
                        ->where('kategori', $kategori)
                        ->where('tipe_soal', $type)
                        ->where('id_soal', $setId . '-' . ($nomor + 1))
                        ->first();

                    $correctPair = [];

                    $parseAnswer = function ($raw) {
                        $out = [];
                        if ($raw === null || $raw === '')
                            return $out;

                        if (is_array($raw)) {
                            $out = array_map(fn($v) => strtolower(trim($v)), $raw);
                            return $out;
                        }

                        if (preg_match('/^\s*\[.*\]\s*$/', trim($raw))) {
                            if (preg_match('/\[(.*?)\]/', $raw, $m)) {
                                $parts = explode(',', $m[1]);
                                $out = array_map(fn($v) => strtolower(trim($v)), $parts);
                                return $out;
                            }
                        }

                        $out[] = strtolower(trim($raw));
                        return $out;
                    };

                    if ($soal1) {
                        $correctPair = array_merge($correctPair, $parseAnswer($soal1->jawaban_benar));
                    }
                    if ($soal2) {
                        $correctPair = array_merge($correctPair, $parseAnswer($soal2->jawaban_benar));
                    }

                    $correctPair = array_values(array_filter(array_unique($correctPair), fn($v) => $v !== ''));
                    for ($i = 0; $i < 2; $i++) {
                        $currentNomor = $nomor + $i;
                        $userAns = strtolower(trim($userList[$i] ?? ''));

                        $matched = false;
                        if ($userAns !== '' && in_array($userAns, $correctPair, true)) {
                            $matched = true;
                            $score++;
                        }

                        $uniqueKeyChild = "{$type}-{$type}-{$setId}-{$currentNomor}";

                        $results[$uniqueKeyChild] = [
                            'status' => $matched ? 'correct' : 'wrong',
                            'user' => $userAns ?: null,
                            'correct' => $correctPair,
                            'question' => (string) $currentNomor,
                            'type' => $type,
                        ];
                    }
                    continue;
                }

                $soal = Soal::where('set_id', $setId)
                    ->where('kategori', $kategori)
                    ->where('tipe_soal', $type)
                    ->where('id_soal', $idSoal)
                    ->first();

                if (!$soal) {
                    $results[$uniqueKey] = [
                        'status' => 'not_found',
                        'user' => $userAns ?: null,
                        'correct' => null,
                    ];
                    continue;
                }

                $correctRaw = (string) $soal->jawaban_benar;
                $correctNorm = strtoupper(trim($correctRaw));
                $userNorm = strtoupper(trim($userAns));

                $matched = false;

                if (preg_match('/\[(.*?)\]/', $correctRaw, $matches)) {
                    $list = explode(',', $matches[1]);
                    $list = array_map(fn($v) => strtoupper(trim($v)), $list);

                    if (in_array($userNorm, $list)) {
                        $matched = true;
                    }
                } else {
                    if ($userNorm === $correctNorm) {
                        $matched = true;
                    }
                }

                if ($matched)
                    $score++;

                $results[$uniqueKey] = [
                    'status' => $matched ? 'correct' : 'wrong',
                    'user' => $userAns ?: null,
                    'correct' => $correctRaw ?: null,
                    'question' => $qid,
                    'type' => $type,
                ];
            }

            $setSoal = SetSoal::where('kode', $setId)->first();
            $scoreConversion = $this->getScore($kategori, $score);
            $history = TestHistory::create([
                'student_id' => Auth::id(),
                'teacher_id' => null,
                'tipe_test' => 'mock',
                'kategori' => $kategori,
                'tipe' => 'mixed',
                'set_soal_id' => $setSoal?->id,
                'score_conversion' => $scoreConversion,
                'score' => $score,
                'jumlah_soal' => 40,
                'nama_tipe' => "Mock Test",
            ]);

            foreach ($results as $key => $res) {
                TestDetailHistory::create([
                    'test_history_id' => $history->id,
                    'soal_id' => $res['question'],
                    'jawaban_user' => is_array($res['user'])
                        ? implode(',', $res['user'])
                        : ($res['user'] ?? ''),
                    'jawaban_benar' => is_array($res['correct'])
                        ? implode(',', $res['correct'])
                        : ($res['correct'] ?? ''),
                    'status' => $res['status'] === 'correct',
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'ok',
                'score' => $score,
                'results' => $results,
                'history_id' => $history->id,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    function parseStringArray($value)
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

    public function mockTestCheckV2(Request $r)
    {
        DB::beginTransaction();
        try {
            $data = $r->input('data', []);
            $kategori = $r->input('kategori', '');
            $score = 0;
            $results = [];
            $q = 1;


            // $filledAnswers = collect($data)
            //     ->pluck('answer')
            //     ->filter(function ($answer) {
            //         return !(
            //             is_null($answer) ||
            //             $answer === '' ||
            //             (is_string($answer) && json_decode($answer, true) === [null])
            //         );
            //     });



            // if ($filledAnswers->isEmpty()) {
            //     throw new \Exception('Tidak ada jawaban yang dikirim.', 400);
            // }



            foreach ($data as $item) {
                $parts = explode('-', $item['name']);
                $type = $parts[0] ?? null;
                $id = $parts[1] ?? null;
                $number = isset($parts[2]) ? str_replace('[]', '', $parts[2]) : null;
                $answer = $item['answer'] ?? null;

                $soal = Soal::where('set_id', $id)
                    ->where('kategori', $kategori)
                    ->where('tipe_soal', $type)
                    ->where('id_soal', $id . '-' . $number)
                    ->first();

                if (!$soal) {
                    throw new \Exception("Soal tidak ditemukan.", 404);
                }

                $jawaban = false;
                $parsedSoal = $this->parseStringArray($soal->jawaban_benar);
                $parsedAnswer = $this->parseStringArray($answer);
                if (is_array($parsedSoal)) {
                    if (is_array($parsedAnswer)) {
                        foreach ($parsedSoal as $i => $ps) {
                            $currentAnswer = $parsedAnswer[$i] ?? null;

                            $jawaban = in_array(strtolower(trim($currentAnswer)), array_map('strtolower', array_map('trim', $parsedSoal)));

                            if ($jawaban) {
                                $score++;
                            }

                            $results[$type . '-' . $q] = [
                                'status' => $jawaban ? 'correct' : 'wrong',
                                'user' => $currentAnswer,
                                'correct' => $parsedSoal,
                            ];

                            $q++;
                        }
                    } else {
                        $jawaban = in_array(strtolower(trim((string) $answer)), array_map('strtolower', array_map('trim', $parsedSoal)));

                        if ($jawaban) {
                            $score++;
                        }

                        $results[$type . '-' . $q] = [
                            'status' => $jawaban ? 'correct' : 'wrong',
                            'user' => $answer,
                            'correct' => $parsedSoal,
                        ];

                        $q++;
                    }
                } else {
                    $jawaban = strtolower(trim((string) $answer)) === strtolower(trim((string) $soal->jawaban_benar));

                    if ($jawaban) {
                        $score++;
                    }

                    $results[$type . '-' . $q] = [
                        'status' => $jawaban ? 'correct' : 'wrong',
                        'user' => $answer,
                        'correct' => $soal->jawaban_benar,
                    ];

                    $q++;
                }
            }
            $setSoal = SetSoal::where('kode', $id)->first();
            $scoreConversion = $this->getScore($kategori, $score);
            $history = TestHistory::create([
                'student_id' => Auth::id(),
                'teacher_id' => null,
                'tipe_test' => 'mock',
                'kategori' => $kategori,
                'tipe' => 'mixed',
                'set_soal_id' => $setSoal?->id,
                'score_conversion' => $scoreConversion,
                'score' => $score,
                'jumlah_soal' => 40,
                'nama_tipe' => "Mock Test",
            ]);

            foreach ($results as $key => $res) {
                TestDetailHistory::create([
                    'test_history_id' => $history->id,
                    'soal_id' => explode('-', $key)[1],
                    'jawaban_user' => is_array($res['user'])
                        ? implode(',', $res['user'])
                        : ($res['user'] ?? ''),
                    'jawaban_benar' => is_array($res['correct'])
                        ? implode(',', $res['correct'])
                        : ($res['correct'] ?? ''),
                    'status' => $res['status'] === 'correct',
                ]);
            }

            DB::commit();

            return response()->json([
                'status' => 'ok',
                'score' => $score,
                'results' => $results,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], $e->getCode() ?: 500);
        }
    }


    public function mockTest(Request $r)
    {
        try {
            $data = [];

            if ($r->has('set-id') && $r->input('section')) {
                $set = SetSoal::where('kode', $r->input('set-id'))->first();
                if ($set) {
                    $data['set'] = $set;
                    $data['section'] = $r->input('section');

                    if ($r->input('section') == 'speaking') {
                        /** @var \App\Models\User $user */
                        $user = Auth::user();

                        if ($user->isStudent()) {
                            $data['sessions'] = $user->studentSessions()->with('teacher')->latest()->get();
                            $data['teachers'] = User::where('role', 'teacher')->get();
                            $blade = 'ielts.sets.' . $r->input('set-id') . '.mock.' . $r->input('section');
                            return view($blade, $data);
                        }
                    } else {
                        $blade = 'ielts.sets.' . $r->input('set-id') . '.mock.' . $r->input('section');
                        return view($blade, $data);
                    }
                } else {
                    return redirect()->back()->with('error', 'Question set not found.');
                }
            } else {
                return redirect()->back()->with('error', 'Incomplete request.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
        }
    }
}
