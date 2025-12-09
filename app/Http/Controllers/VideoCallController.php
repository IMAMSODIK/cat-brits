<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoCall;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoCallController extends Controller
{
    use AuthorizesRequests;
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

    public function accept(Request $request, VideoCall $mockTest)
    {
        $this->authorize('update', $mockTest);

        $request->validate([
            'scheduled_time' => 'required|date|after:now',
            'teacher_notes' => 'nullable|string',
        ]);

        $roomName = 'mocktest-' . $mockTest->id . '-' . uniqid();

        $mockTest->update([
            'status' => 'accepted',
            'scheduled_time' => $request->scheduled_time,
            'teacher_notes' => $request->teacher_notes,
            'jitsi_room_name' => $roomName,
        ]);

        return back()->with('success', 'Mock test session accepted!');
    }

    public function reject(Request $request, VideoCall $mockTest)
    {
        $this->authorize('update', $mockTest);

        $request->validate([
            'rejection_reason' => 'required|string',
        ]);

        $mockTest->update([
            'status' => 'rejected',
            'rejection_reason' => $request->rejection_reason,
        ]);

        return back()->with('success', 'Mock test session rejected.');
    }

    public function show(VideoCall $mockTest)
    {
        if (Auth::id() !== $mockTest->student_id && Auth::id() !== $mockTest->teacher_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $html = view('ielts.partials.modals.detail_session', compact('mockTest'))->render();

        return response()->json(['html' => $html]);
    }

    public function startSession(VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        if (!$mockTest->canStart()) {
            return redirect()->back()->with('error', 'Session cannot be started yet. Please wait until the scheduled time.');
        }

        // Ensure room name exists
        if (empty($mockTest->jitsi_room_name)) {
            $mockTest->update([
                'jitsi_room_name' => 'mocktest-' . $mockTest->id . '-' . uniqid()
            ]);
            $mockTest->refresh();
        }

        // Mark session as started if not already
        if (!$mockTest->started_at) {
            $mockTest->update(['started_at' => now()]);
        }

        return view('ielts.mocktest-speaking.video-call', compact('mockTest'));
    }

    public function endSession(VideoCall $mockTest)
    {
        $this->authorize('endSession', $mockTest);

        $mockTest->update([
            'status' => 'completed',
            'ended_at' => now(),
        ]);

        if(Auth::user()->role == 'teacher'){
            return redirect('/test-correction?category=ielts')->with('success', 'Mock test session completed!');
        }else if(Auth::user()->role == 'student'){
            return redirect('/ielts/mock-test?set-id=XJ3XOcvqPbgdZwyl&section=speaking')->with('success', 'Mock test session completed!');
        }
    }

}
