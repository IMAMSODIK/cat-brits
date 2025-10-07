<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TestHistory;
use Illuminate\Http\Request;

class TestHistoryController extends Controller
{
    public function index(Request $r){
        try {
            $data = [
                'pageTitle' => strtoupper($r->category) . " Exam History",
                'histories' => TestHistory::with('student', 'teacher', 'setSoal')->get()
            ];

            return view('history.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
