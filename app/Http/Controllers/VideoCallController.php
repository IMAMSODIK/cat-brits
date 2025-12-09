<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoCall;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoCallController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'teacher_id' => 'required|exists:users,id',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'proposed_time' => 'required|date|after:now',
                'duration_minutes' => 'required|integer|min:15|max:180',
            ]);

            $proposedTime = \Carbon\Carbon::parse($request->proposed_time)
                ->timezone(config('app.timezone'));

            $session = VideoCall::create([
                'student_id' => Auth::id(),
                'teacher_id' => $request->teacher_id,
                'title' => $request->title,
                'description' => $request->description,
                'proposed_time' => $proposedTime,
                'duration_minutes' => $request->duration_minutes,
                'status' => 'pending',
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Mock test session requested successfully!',
                'data' => $session
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Server error: ' . $e->getMessage()
            ], 500);
        }
    }
}
