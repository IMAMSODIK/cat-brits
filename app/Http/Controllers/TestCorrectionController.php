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
            $video_request = Videos::with(['student', 'setSoal', 'teacher', 'assesment'])
                ->whereHas('student')
                ->latest()
                ->get();

            $writing_request = Writing::with(['student', 'setSoal', 'teacher', 'assessment'])
                ->latest()
                ->get();

            $data = [
                'pageTitle' => "Students",
                'video_request' => $video_request,
                'writing_request' => $writing_request,
                'video_pending_count' => $video_request->whereNull('teacher_id')->count(),
                'writing_pending_count' => $writing_request->whereNull('teacher_id')->count(),
                'pendingSessions' => VideoCall::pending()->with('student')->get(),
                'upcomingSessions' => $user->teacherSessions()->accepted()->upcoming()->with('student')->get(),
                'completedSessions' => VideoCall::where("teacher_id", $user->id)->where("status", "completed")->with('student')->get()
            ];

            return view('test_correction.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.' . $e->getMessage());
        }
    }

    public function submissions(Request $r)
    {
        try {
            $kategori = $r->input('kategori', 'writing');
            $search = trim((string) $r->input('q', ''));
            $status = $r->input('status', '');
            $date = $r->input('date', '');

            $query = $kategori === 'speaking'
                ? Videos::with(['student', 'setSoal', 'teacher'])->whereHas('student')
                : Writing::with(['student', 'setSoal', 'teacher']);

            if ($search !== '') {
                $query->where(function ($q) use ($search, $kategori) {
                    $q->whereHas('student', fn($s) => $s->where('name', 'like', "%{$search}%"))
                        ->orWhereHas('setSoal', function ($s) use ($search) {
                            $s->where('name', 'like', "%{$search}%")
                                ->orWhere('thumbnail', 'like', "%{$search}%");
                        });
                    if ($kategori === 'writing') {
                        $q->orWhere('task', 'like', "%{$search}%")
                            ->orWhere('answer', 'like', "%{$search}%");
                    }
                });
            }

            if ($status === 'reviewed') {
                $query->whereNotNull('teacher_id');
            } elseif ($status === 'pending') {
                $query->whereNull('teacher_id');
            }

            if (filled($date)) {
                $query->whereDate('created_at', $date);
            }

            $submissions = $query->latest()->paginate(15)->withQueryString();

            // Live search / AJAX: kembalikan HTML daftar saja
            if ($r->ajax()) {
                return response()->json([
                    'html'  => view('test_correction.partials.submission_list', [
                        'submissions' => $submissions,
                        'kategori'    => $kategori,
                    ])->render(),
                    'total' => $submissions->total(),
                ]);
            }

            // Statistik keseluruhan (tanpa filter)
            $stats = $kategori === 'speaking'
                ? Videos::selectRaw("
                        COUNT(*) AS total,
                        COALESCE(SUM(teacher_id IS NOT NULL), 0) AS reviewed,
                        COALESCE(SUM(teacher_id IS NULL), 0) AS pending,
                        COALESCE(COUNT(CASE WHEN created_at >= CURDATE() - INTERVAL 7 DAY THEN 1 END), 0) AS last_7_days
                    ")->first()
                : Writing::selectRaw("
                        COUNT(*) AS total,
                        COALESCE(SUM(teacher_id IS NOT NULL), 0) AS reviewed,
                        COALESCE(SUM(teacher_id IS NULL), 0) AS pending,
                        COALESCE(COUNT(CASE WHEN created_at >= CURDATE() - INTERVAL 7 DAY THEN 1 END), 0) AS last_7_days
                    ")->first();

            return view('test_correction.submissions', [
                'pageTitle' => ucfirst($kategori) . ' Test Requests',
                'kategori'  => $kategori,
                'submissions' => $submissions,
                'stats'     => $stats,
                'filters'   => [
                    'q'      => $search,
                    'status' => $status,
                    'date'   => $date,
                ],
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.' . $e->getMessage());
        }
    }
}
