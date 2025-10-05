<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\Soal;
use App\Models\TestDetailHistory;
use App\Models\TestHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IeltsController extends Controller
{
    public function index(Request $r)
    {
        try {
            $data = [
                'pageTitle' => "IELTS",
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
                        $data['title'] = 'Cambridge IELTS 10 Academic Reading Test 1';
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

            $payloadKeys = collect($r->all())
                ->keys()
                ->filter(fn($k) => str_starts_with($k, $setId . '-'))
                ->values();

            $soalIds = $payloadKeys->toArray();

            $soals = Soal::where('set_id', $setId)
                ->where('tipe_soal', $tipe)
                ->whereIn('id_soal', $soalIds)
                ->get();

            $results = [];
            $score = 0; // Hitung nilai benar

            foreach ($soalIds as $qid) {
                $rawUser = $r->input($qid, '');
                $userNorm = mb_strtoupper(trim($rawUser));

                $soal = $soals->firstWhere('id_soal', $qid);
                $correctRaw = (string) optional($soal)->jawaban_benar;
                $correctNorm = mb_strtoupper(trim($correctRaw));

                $matched = ($userNorm === $correctNorm);
                if ($matched) $score++;

                $results[$qid] = [
                    'status'  => $matched ? 'correct' : 'wrong',
                    'user'    => $rawUser ?: null,
                    'correct' => $correctRaw ?: null,
                ];
            }

            // ✅ Simpan ke test_histories
            $history = TestHistory::create([
                'student_id'   => auth()->id(),
                'teacher_id'   => null,
                'kategori'     => $kategori,
                'tipe'         => $tipe,
                'set_soal'  => $setId,
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

            DB::commit();

            return response()->json([
                'status'  => 'ok',
                'score'   => $score,
                'results' => $results,
                'history_id' => $history->id // Bisa dipakai untuk redirect ke halaman hasil
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
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
