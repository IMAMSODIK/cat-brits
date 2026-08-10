<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VideoCall;
use App\Models\Videos;
use App\Models\Writing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TestCorrectionController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        try {
            $data = [
                'pageTitle' => "Students",
                'video_request' => Videos::with(['student', 'setSoal'])
                    ->whereNull('teacher_id')
                    ->whereHas('student')
                    ->get(),
                'writing_request' => Writing::with(['student', 'setSoal'])->whereNull('teacher_id')->get(),
                'pendingSessions' => VideoCall::pending()->with('student')->get(),
                'upcomingSessions' => $user->teacherSessions()->accepted()->upcoming()->with('student')->get(),
                'completedSessions' => VideoCall::where("teacher_id", $user->id)->where("status", "completed")->with('student')->get()
            ];

            return view('test_correction.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.' . $e->getMessage());
        }
    }
}
