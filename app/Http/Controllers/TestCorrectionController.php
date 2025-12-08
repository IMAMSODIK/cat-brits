<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestCorrectionController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'pageTitle' => "Students",
                'data' => User::where('role', 'student')
                    ->where('verification_status', 1)
                    ->orderBy('status', 'desc')
                    ->orderBy('id', 'desc')
                    ->take(20)
                    ->get()
            ];

            return view('test_correction.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
