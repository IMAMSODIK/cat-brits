<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VideoCall;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VideoCallController extends Controller
{
    use AuthorizesRequests;
    public function store(Request $request)
    {
        try {
            $request->validate([
                'student_id' => 'required|exists:users,id',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'proposed_time' => 'required|date|after:now',
                'setSoal' => 'required|exists:set_soals,id',
            ]);

            $proposedTime = \Carbon\Carbon::parse($request->proposed_time)
                ->timezone(config('app.timezone'));
            $roomName = 'mocktest-' . $request->title . '-' . uniqid();

            $session = VideoCall::create([
                'teacher_id' => Auth::id(),
                'student_id' => $request->student_id,
                'title' => $request->title,
                'description' => $request->description,
                'proposed_time' => $proposedTime,
                'scheduled_time' => $proposedTime,
                'duration_minutes' => 30,
                'set_soal_id' => $request->setSoal,
                'status' => 'accepted',
                'jitsi_room_name' => $roomName,
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

    public function destroy(VideoCall $mockTest)
    {
        $this->authorize('delete', $mockTest);

        $mockTest->delete();

        return back()->with('success', 'Mock test session deleted successfully!');
    }

    public function accept(Request $request, VideoCall $mockTest)
    {
        $this->authorize('update', $mockTest);

        $request->validate([
            'scheduled_time' => 'required|date|after:now',
            'teacher_notes' => 'nullable|string',
        ]);

        $roomName = $mockTest->id . '-' . uniqid();

        $mockTest->update([
            'status' => 'accepted',
            'scheduled_time' => Carbon::parse($request->scheduled_time)->subHours(6)->subMinutes(57)->format('Y-m-d H:i:s'),
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

    public function showDashboard(VideoCall $mockTest)
    {
        if (Auth::id() !== $mockTest->student_id && Auth::id() !== $mockTest->teacher_id && Auth::user()->role != 'admin') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $html = view('ielts.partials.modals.dashboard_detail_session', compact('mockTest'))->render();

        return response()->json(['html' => $html]);
    }

    public function startSession(VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        // if (!$mockTest->canStart()) {
        //     return redirect()->back()->with('error', 'Session cannot be started yet. Please wait until the scheduled time.');
        // }

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
            return redirect('/dashboard')->with('success', 'Mock test session completed!');
        }
    }

    public function saveRecording(Request $request, VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        $request->validate([
            'recording' => 'required|file|mimes:webm,mp4,ogg|max:512000', // Max 500MB
        ]);

        // Store the recording file
        $file = $request->file('recording');
        $filename = 'recording_' . $mockTest->id . '_' . time() . '.' . $file->getClientOriginalExtension();

        // Store in recordings folder
        $path = $file->storeAs('recordings/' . $mockTest->id, $filename, 'public');

        $mockTest->update([
            'recording_url' => $path,
            'recording_filename' => $filename,
            'recording_size' => $file->getSize(),
            'recording_duration' => $request->input('duration', 0),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Recording saved successfully!',
            'path' => $path,
            'filename' => $filename,
        ]);
    }

    /**
     * Upload recording chunk (for large files)
     */
    public function uploadRecordingChunk(Request $request, VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        $request->validate([
            'chunk' => 'required',
            'chunkIndex' => 'required|integer',
            'totalChunks' => 'required|integer',
            'filename' => 'required|string',
        ]);

        $chunkDir = storage_path('app/temp/recordings/' . $mockTest->id);
        if (!file_exists($chunkDir)) {
            mkdir($chunkDir, 0755, true);
        }

        $chunkPath = $chunkDir . '/' . $request->filename . '.part' . $request->chunkIndex;
        file_put_contents($chunkPath, base64_decode($request->chunk));

        // If all chunks uploaded, merge them
        if ($request->chunkIndex == $request->totalChunks - 1) {
            $finalFilename = 'recording_' . $mockTest->id . '_' . time() . '.webm';
            $finalPath = storage_path('app/public/recordings/' . $mockTest->id);

            if (!file_exists($finalPath)) {
                mkdir($finalPath, 0755, true);
            }

            $finalFile = $finalPath . '/' . $finalFilename;
            $out = fopen($finalFile, 'wb');

            for ($i = 0; $i < $request->totalChunks; $i++) {
                $chunkFile = $chunkDir . '/' . $request->filename . '.part' . $i;
                if (file_exists($chunkFile)) {
                    $in = fopen($chunkFile, 'rb');
                    while ($buff = fread($in, 4096)) {
                        fwrite($out, $buff);
                    }
                    fclose($in);
                    unlink($chunkFile);
                }
            }
            fclose($out);

            // Clean up temp directory
            @rmdir($chunkDir);

            // Update database
            $mockTest->update([
                'recording_url' => 'recordings/' . $mockTest->id . '/' . $finalFilename,
                'recording_filename' => $finalFilename,
                'recording_size' => filesize($finalFile),
                'recording_duration' => $request->input('duration', 0),
            ]);

            return response()->json([
                'success' => true,
                'complete' => true,
                'message' => 'Recording uploaded successfully!',
                'filename' => $finalFilename,
            ]);
        }

        return response()->json([
            'success' => true,
            'complete' => false,
            'chunkIndex' => $request->chunkIndex,
        ]);
    }

    public function saveScreenSharing(Request $request, VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        $request->validate([
            'screen_data' => 'required|array',
        ]);

        // Merge with existing data
        $existingData = $mockTest->screen_sharing_data ?? [];
        $newData = array_merge($existingData, $request->screen_data);

        $mockTest->update([
            'screen_sharing_data' => $newData,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * View/Stream recording
     */
    public function viewRecording(VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        if (!$mockTest->recording_url) {
            abort(404, 'Recording not found');
        }

        $path = storage_path('app/public/' . $mockTest->recording_url);

        if (!file_exists($path)) {
            abort(404, 'Recording file not found');
        }

        // Stream the video file
        return response()->file($path, [
            'Content-Type' => 'video/webm',
            'Content-Disposition' => 'inline; filename="' . $mockTest->recording_filename . '"',
        ]);
    }

    /**
     * Download recording
     */
    public function downloadRecording(VideoCall $mockTest)
    {
        $this->authorize('view', $mockTest);

        if (!$mockTest->recording_url) {
            abort(404, 'Recording not found');
        }

        $path = storage_path('app/public/' . $mockTest->recording_url);

        if (!file_exists($path)) {
            abort(404, 'Recording file not found');
        }

        return response()->download($path, $mockTest->recording_filename);
    }
}
