<?php

namespace App\Http\Controllers;

use App\Models\VideoCall;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoCallRequest;
use App\Http\Requests\UpdateVideoCallRequest;
use App\Mail\NewBookingForGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VideoCallController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // Murid: form booking
    public function create()
    {
        // ambil daftar guru (sesuaikan query role)
        $gurus = \App\Models\User::where('role', 'guru')->get();
        return view('video_calls.create', compact('gurus'));
    }

    public function store(Request $r)
    {
        $r->validate([
            'guru_id'=>'required|exists:users,id',
            'scheduled_at'=>'required|date|after:now',
            'duration_minutes'=>'nullable|integer|min:15',
        ]);

        $call = VideoCall::create([
            'guru_id' => $r->guru_id,
            'murid_id' => Auth::id(),
            'scheduled_at' => $r->scheduled_at,
            'duration_minutes' => $r->duration_minutes ?: 60,
            'status' => 'pending',
            'note' => $r->note,
        ]);

        // notifikasi email ke guru
        Mail::to($call->guru->email)->queue(new NewBookingForGuru($call));

        return response()->json(['status'=>'ok','message'=>'Booking terkirim']);
    }

    // Guru: list permintaan
    public function guruIndex()
    {
        $guruId = auth()->id();
        $calls = VideoCall::where('guru_id',$guruId)->orderBy('scheduled_at','desc')->get();
        return view('video_calls.guru_index', compact('calls'));
    }

    // Approve
    public function approve(Request $r, VideoCall $videoCall)
    {
        $this->authorize('manage', $videoCall); // buat policy optional

        if ($videoCall->status !== 'pending') {
            return response()->json(['status'=>'error','message'=>'Sudah diproses'], 400);
        }

        // generate Jitsi room (unik)
        $videoCall->room_url = 'https://meet.jit.si/'.uniqid('room_');
        $videoCall->status = 'approved';
        $videoCall->save();

        // kirim notifikasi email ke murid
        Mail::to($videoCall->murid->email)->queue(new BookingApprovedForStudent($videoCall));

        return response()->json(['status'=>'ok','message'=>'Disetujui']);
    }

    public function reject(Request $r, VideoCall $videoCall)
    {
        $this->authorize('manage', $videoCall);

        $videoCall->status = 'rejected';
        $videoCall->save();

        // (opsional) kirim email penolakan
        return response()->json(['status'=>'ok','message'=>'Ditolak']);
    }

    // Halaman join — embed
    public function join(VideoCall $videoCall)
    {
        // cek akses: hanya guru atau murid terkait
        $user = auth()->user();
        if (!in_array($user->id, [$videoCall->guru_id, $videoCall->murid_id])) {
            abort(403);
        }

        // cek apakah approved & joinable
        if ($videoCall->status !== 'approved') {
            return view('video_calls.not_ready', compact('videoCall'));
        }

        return view('video_calls.join', compact('videoCall'));
    }
}
