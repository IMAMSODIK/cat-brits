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

                    $blade = 'ielts.sets.' . $r->input('set-id') . '.' . $r->input('section');
                    return view($blade, $data);
                } else {
                    return redirect()->back()->with('error', 'Question set not found.');
                }
            }else {
                return redirect()->back()->with('error', 'Incomplete request.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
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

                    $blade = 'ielts.sets.' . $r->input('set-id') . '.mock';
                    return view($blade, $data);
                } else {
                    return redirect()->back()->with('error', 'Question set not found.');
                }
            }else {
                return redirect()->back()->with('error', 'Incomplete request.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading data.');
        }
    }
}
