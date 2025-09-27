<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
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
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }

    public function category(Request $r)
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
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
