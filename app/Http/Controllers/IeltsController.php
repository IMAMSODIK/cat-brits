<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
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
        $tfng = [
            "FALSE", "TRUE", "NOT GIVEN", "NOT GIVEN", "TRUE",
            "TRUE", "FALSE", "NOT GIVEN", "NOT GIVEN", "FALSE"
        ];

        $results = [];
        $setId = $r->input('set_id', 'XJ3XOcvqPbgdZwyl');

        for ($i = 1; $i <= count($tfng); $i++) {
            $qid = $setId . '-' . $i;
            $userAnswer = strtoupper(trim($r->input($qid, ''))); 
            $correctAnswer = strtoupper(trim($tfng[$i - 1]));

            if ($userAnswer === $correctAnswer) {
                $results[$qid] = [
                    'status' => 'correct',
                    'user'   => $userAnswer,
                ];
            } else {
                $results[$qid] = [
                    'status'  => 'wrong',
                    'user'    => $userAnswer,
                    'correct' => $correctAnswer,
                ];
            }
        }

        return response()->json([
            'status' => 'ok',
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
