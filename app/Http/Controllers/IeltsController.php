<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\Soal;
use Illuminate\Http\Request;

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
        try {
            $setId = $r->input('set_id');

            $payloadKeys = collect($r->all())
                ->keys()
                ->filter(fn($k) => str_starts_with($k, $setId . '-'))
                ->values();
            $soalIds = $payloadKeys->toArray();

            $soals = Soal::where('set_id', $setId)
                        ->where('tipe_soal', $r->tipe)
                        ->whereIn('id_soal', $soalIds)
                        ->get();

            $results = [];

            foreach ($soalIds as $qid) {
                $userAnswer = strtoupper(trim($r->input($qid, '')));
                $correctAnswer = strtoupper(trim(optional($soals->firstWhere('id_soal', $qid))->jawaban_benar));

                if ($userAnswer === $correctAnswer) {
                    $results[$qid] = [
                        'status' => 'correct',
                        'user'   => $userAnswer,
                    ];
                } else {
                    $results[$qid] = [
                        'status'  => 'wrong',
                        'user'    => $userAnswer ?: null,
                        'correct' => $correctAnswer,
                    ];
                }
            }

            return response()->json([
                'status'  => 'ok',
                'results' => $results
            ]);
        } catch (\Exception $e) {
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
