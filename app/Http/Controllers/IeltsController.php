<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\Soal;
use App\Models\TestDetailHistory;
use App\Models\TestHistory;
use App\Models\Videos;
use App\Models\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class IeltsController extends Controller
{
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
                switch ($r->input('set-id')) {
                    case 'XJ3XOcvqPbgdZwyl':
                        $data['set_id'] = 'XJ3XOcvqPbgdZwyl';
                        $data['title'] = 'Cambridge IELTS 10 Test 1';
                        return view('ielts.categories', $data);
                        break;
                    case 'QmN0FYAE2DCXRPdC':
                        $data['set_id'] = 'QmN0FYAE2DCXRPdC';
                        $data['title'] = 'Cambridge IELTS 10 Test 2';
                        return view('ielts.categories', $data);
                        break;
                    case 'BoXPeTu8aF68JZFw':
                        $data['set_id'] = 'BoXPeTu8aF68JZFw';
                        $data['title'] = 'Cambridge IELTS 10 Test 2';
                        return view('ielts.categories', $data);
                        break;
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

    public function check(Request $r)
    {
        DB::beginTransaction();
        try {
            $setId = $r->input('set_id');
            $tipe = $r->input('tipe');
            $kategori = $r->input('kategori');

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
                    'video' => $filename
                ]);

                DB::commit();

                if($saveVideos){
                    return response()->json([
                        'success' => true,
                        'message' => 'Video uploaded successfully.',
                        'file' => $filename,
                        'path' => $path,
                        'url' => Storage::url($path)
                    ]);
                }
            } else if($kategori == 'writing'){
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
                    'tipe' => 'practice',
                    'answer' => $answer
                ]);

                DB::commit();

                if($saveWriting){
                    return response()->json([
                        'status' => true,
                        'message' => 'Task submited successfully.'
                    ]);
                }
            } else {
                $results = [];
                $score = 0;

                if ($tipe == "two_choices") {
                    $payloadKeys = collect($r->all())
                        ->keys()
                        ->filter(fn($k) => str_starts_with($k, $setId . '-'))
                        ->values();

                    $soalIds = $payloadKeys->toArray();
                    foreach ($soalIds as $soalId) {
                        $soals = Soal::where('set_id', $setId)
                            ->where('kategori', $kategori)
                            ->where('tipe_soal', $tipe)
                            ->whereIn('id_soal', $soalIds)
                            ->get();

                        $userAnswer = $r->input($soalId);
                        $jawabanBenar = $soals->pluck('jawaban_benar')->toArray();

                        $index = 1;
                        $score = 0;
                        foreach ($userAnswer as $ua) {
                            if (in_array(strtolower($ua), array_map('strtolower', $jawabanBenar))) {
                                $results[$soalId . '-' . $index++] = [
                                    'status'  => 'correct',
                                    'user'    => $ua,
                                    'correct' => implode(', ', $jawabanBenar),
                                ];
                                $score++;
                            } else {
                                $results[$soalId . '-' . $index++] = [
                                    'status'  => 'wrong',
                                    'user'    => $ua ?: null,
                                    'correct' => implode(', ', $jawabanBenar),
                                ];
                            }
                        }

                        $setSoal = SetSoal::where('kode', $setId)->first();

                        $history = TestHistory::create([
                            'student_id'   => Auth::id(),
                            'teacher_id'   => null,
                            'tipe_test'    => 'practice',
                            'kategori'     => $kategori,
                            'tipe'         => $tipe,
                            'set_soal_id'  => $setSoal->id,
                            'score'        => $score,
                        ]);

                        foreach ($results as $qid => $res) {
                            TestDetailHistory::create([
                                'test_history_id' => $history->id,
                                'soal_id'         => preg_replace('/-\d+$/', '', $qid),
                                'jawaban_user'    => $res['user'] ?? '',
                                'jawaban_benar'   => $res['correct'] ?? '',
                                'status'          => $res['status'] === 'correct',
                            ]);
                        }
                    }
                } else {
                    $payloadKeys = collect($r->all())
                        ->keys()
                        ->filter(fn($k) => str_starts_with($k, $setId . '-'))
                        ->values();

                    $soalIds = $payloadKeys->toArray();

                    $soals = Soal::where('set_id', $setId)
                        ->where('kategori', $kategori)
                        ->where('tipe_soal', $tipe)
                        ->whereIn('id_soal', $soalIds)
                        ->get();

                    $results = [];
                    $score = 0;

                    foreach ($soalIds as $qid) {
                        $rawUser = $r->input($qid, '');
                        $userNorm = mb_strtoupper(trim($rawUser));

                        $soal = $soals->firstWhere('id_soal', $qid);
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

                        if ($matched) $score++;

                        $results[$qid] = [
                            'status'  => $matched ? 'correct' : 'wrong',
                            'user'    => $rawUser ?: null,
                            'correct' => $correctRaw ?: null,
                        ];
                    }

                    $setSoal = SetSoal::where('kode', $setId)->first();
                    $history = TestHistory::create([
                        'student_id'   => Auth::id(),
                        'teacher_id'   => null,
                        'tipe_test'    => 'practice',
                        'kategori'     => $kategori,
                        'tipe'         => $tipe,
                        'set_soal_id'  => $setSoal->id,
                        'score'        => $score,
                    ]);

                    // ✅ Simpan ke test_detail_histories
                    foreach ($results as $qid => $res) {
                        TestDetailHistory::create([
                            'test_history_id' => $history->id,
                            'soal_id'         => $qid,
                            'jawaban_user'    => $res['user'] ?? '',
                            'jawaban_benar'   => $res['correct'] ?? '',
                            'status'          => $res['status'] === 'correct',
                        ]);
                    }
                }

                DB::commit();

                return response()->json([
                    'status'  => 'ok',
                    'score'   => $score,
                    'results' => $results,
                    'history_id' => $history->id // Bisa dipakai untuk redirect ke halaman hasil
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

            // Buat identifier unik
            foreach ($answers as $ans) {
                $qid = $ans['question'] ?? null;
                $type = $ans['type'] ?? null;
                $name = $ans['name'] ?? null;
                $userAns = trim($ans['answer'] ?? '');

                if (!$type) continue;

                // Gunakan name jika ada, fallback ke type-question
                $uniqueKey = "{$type}-{$name}";

                // Ambil soal berdasarkan kombinasi tipe + nomor
                $name = explode("-", $name);
                $name = $name[1] . '-' . $name[2];

                $soal = Soal::where('set_id', $setId)
                    ->where('kategori', $kategori)
                    ->where('tipe_soal', $type)
                    ->where('id_soal', $name)
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
                $correctNorm = mb_strtoupper(trim($correctRaw));
                $userNorm = mb_strtoupper(trim($userAns));

                $matched = false;

                if (preg_match('/\[(.*?)\]/', $correctRaw, $matches)) {
                    $list = explode(',', $matches[1]);
                    $list = array_map(fn($v) => mb_strtoupper(trim($v)), $list);

                    if (in_array($userNorm, $list)) {
                        $matched = true;
                    }
                } else {
                    $matched = ($userNorm === $correctNorm);
                }

                if ($matched) $score++;

                $results[$uniqueKey] = [
                    'status'   => $matched ? 'correct' : 'wrong',
                    'user'     => $userAns ?: null,
                    'correct'  => $correctRaw ?: null,
                    'question' => $qid,
                    'type'     => $type,
                ];
            }

            // Simpan hasil ke database
            $setSoal = SetSoal::where('kode', $setId)->first();

            $history = TestHistory::create([
                'student_id'   => Auth::id(),
                'teacher_id'   => null,
                'tipe_test'    => 'mock',
                'kategori'     => $kategori,
                'tipe'         => 'mixed',
                'set_soal_id'  => $setSoal?->id,
                'score'        => $score,
            ]);

            foreach ($results as $key => $res) {
                TestDetailHistory::create([
                    'test_history_id' => $history->id,
                    'soal_id'         => $res['question'],
                    'jawaban_user'    => $res['user'] ?? '',
                    'jawaban_benar'   => $res['correct'] ?? '',
                    'status'          => $res['status'] === 'correct',
                ]);
            }

            DB::commit();

            return response()->json([
                'status'  => 'ok',
                'score'   => $score,
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

    public function mockTest(Request $r)
    {
        try {
            $data = [];

            if ($r->has('set-id') && $r->input('section')) {
                $set = SetSoal::where('kode', $r->input('set-id'))->first();
                if ($set) {
                    $data['set'] = $set;
                    $data['section'] = $r->input('section');

                    $blade = 'ielts.sets.' . $r->input('set-id') . '.mock.' . $r->input('section');
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
}
