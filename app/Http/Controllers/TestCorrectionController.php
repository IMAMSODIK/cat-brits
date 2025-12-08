<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Videos;
use App\Models\Writing;
use Illuminate\Http\Request;

class TestCorrectionController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'pageTitle' => "Students",
                'video_request' => Videos::with(['student', 'setSoal'])->where('teacher_id', null)->get(),
                'writing_request' => Writing::with(['student', 'setSoal'])->where('teacher_id', null)->get(),
            ];

            return view('test_correction.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
