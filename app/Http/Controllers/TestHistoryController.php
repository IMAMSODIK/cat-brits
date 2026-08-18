<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TestHistory;
use App\Models\User;
use App\Models\Videos;
use App\Services\WritingQuestionService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestHistoryController extends Controller
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

            return view('history.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama'  => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'foto'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }

            $path = null;
            if ($request->hasFile('foto')) {
                $path = $request->file('foto')->store('foto_profile', 'public');
            }

            $data = User::create([
                'name'     => $request->nama,
                'email'    => $request->email,
                'password' => bcrypt($request->email),
                'foto'  => $path,
                'role'     => 'student'
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Student information saved successfully.',
                'data'    => User::where('id', $data->id)->select('id', 'name', 'email', 'status', 'foto')->first()
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong. Please try again later.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    public function detail(Request $r)
    {
        try {
            $validator = Validator::make($r->all(), [
                'id' => 'required|uuid|exists:users,id'
            ]);

            if ($validator->fails()) {
                return back()->with('error', 'User not found');
            }

            $user = User::with([
                'studentHistory.setSoal.soals' => function ($q) {
                    $q->select('id', 'set_id', 'tipe_soal', 'kategori');
                }
            ])->where('id', $r->id)->first();

            if (!$user) {
                return back()->with('error', 'User not found');
            }

            $summary = TestHistory::where('student_id', $r->id)
                ->where('tipe_test', 'mock')
                ->selectRaw("
                    COALESCE(COUNT(CASE WHEN kategori = 'reading' THEN 1 END), 0) AS reading_attempt,
                    COALESCE(COUNT(CASE WHEN kategori = 'listening' THEN 1 END), 0) AS listening_attempt,
                    COALESCE(AVG(CASE WHEN kategori = 'reading' THEN score_conversion END), 0) AS reading_avg,
                    COALESCE(AVG(CASE WHEN kategori = 'listening' THEN score_conversion END), 0) AS listening_avg
                ")
                ->first();

            $end = Carbon::today();
            $start = $end->copy()->subYear()->startOfDay();
            $rawActivities = DB::table('test_histories')
                ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                ->where('student_id', $r->id)
                ->whereBetween('created_at', [$start, $end])
                ->groupBy('date')
                ->pluck('total', 'date')
                ->toArray();
            $studentActivities = TestHistory::with(['student', 'setSoal'])
                                    ->latest()
                                    ->where('student_id', $r->id)
                                    ->get();

            $data = [
                'pageTitle' => 'Detail Student',
                'user' => $user,
                'summary' => $summary,
                'start' => $start,
                'end' => $end,
                'activities' => $rawActivities,
                'studentActivities' => $studentActivities
            ];

            return view('history.detail', $data);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to load data');
        }
    }

    public function myHistory()
    {
        try {
            /** @var \App\Models\User $user */
            $user = auth()->user();

            $summary = TestHistory::where('student_id', $user->id)
                ->where('tipe_test', 'mock')
                ->selectRaw("
                    COALESCE(COUNT(CASE WHEN kategori = 'reading' THEN 1 END), 0) AS reading_attempt,
                    COALESCE(COUNT(CASE WHEN kategori = 'listening' THEN 1 END), 0) AS listening_attempt,
                    COALESCE(AVG(CASE WHEN kategori = 'reading' THEN score_conversion END), 0) AS reading_avg,
                    COALESCE(AVG(CASE WHEN kategori = 'listening' THEN score_conversion END), 0) AS listening_avg
                ")
                ->first();

            $studentActivities = TestHistory::with(['setSoal', 'teacher'])
                ->where('student_id', $user->id)
                ->latest()
                ->get();

            return view('history.my', [
                'pageTitle' => 'My History',
                'user'      => $user,
                'summary'   => $summary,
                'studentActivities' => $studentActivities,
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to load data');
        }
    }

    public function answers(Request $r, $id)
    {
        try {
            /** @var \App\Models\User $user */
            $user = auth()->user();

            $history = TestHistory::with(['detailHistories', 'setSoal', 'teacher'])
                ->where('id', $id)
                ->firstOrFail();

            // Student hanya boleh melihat history miliknya sendiri
            if ($user->role === 'student' && $history->student_id !== $user->id) {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized.'
                ], 403);
            }

            $details = $history->detailHistories->map(function ($d) {
                return [
                    'soal_id'       => $d->soal_id,
                    'jawaban_user'  => $d->jawaban_user,
                    'jawaban_benar' => $d->jawaban_benar,
                    'status'        => (bool) $d->status,
                ];
            })->values();

            $videoUrls = [];
            $assessments = [];
            if ($history->kategori === 'speaking') {
                $videoIds = $history->detailHistories
                    ->pluck('soal_id')
                    ->filter(fn($s) => str_starts_with((string) $s, 'video-'))
                    ->map(fn($s) => (int) substr($s, 6));

                if ($videoIds->isNotEmpty()) {
                    $videos = Videos::with('assesment')->whereIn('id', $videoIds)->get();
                    foreach ($videos as $v) {
                        $videoUrls['video-' . $v->id] = Storage::url('recordings/' . $v->video);
                        if ($v->assesment) {
                            $assessments['video-' . $v->id] = [
                                'type' => 'speaking',
                                'fc_band' => (float) $v->assesment->fc_band,
                                'lr_band' => (float) $v->assesment->lr_band,
                                'gra_band' => (float) $v->assesment->gra_band,
                                'pr_band' => (float) $v->assesment->pr_band,
                                'overall' => round((
                                    (float) $v->assesment->fc_band +
                                    (float) $v->assesment->lr_band +
                                    (float) $v->assesment->gra_band +
                                    (float) $v->assesment->pr_band
                                ) / 4, 1),
                                'remark' => $v->assesment->remark,
                            ];
                        }
                    }
                }
            }

            if ($history->kategori === 'writing') {
                $writingIds = $history->detailHistories
                    ->pluck('soal_id')
                    ->filter(fn($s) => str_starts_with((string) $s, 'writing-'))
                    ->map(fn($s) => (int) substr($s, 8));

                if ($writingIds->isNotEmpty()) {
                    $writings = \App\Models\Writing::with(['assessment', 'setSoal'])
                        ->whereIn('id', $writingIds)
                        ->get();
                    foreach ($writings as $w) {
                        if ($w->assessment) {
                            $assessments['writing-' . $w->id] = [
                                'type' => 'writing',
                                'task' => $w->task,
                                'question' => app(WritingQuestionService::class)->getQuestion($w),
                                'ta_band' => (float) $w->assessment->ta_band,
                                'cc_band' => (float) $w->assessment->cc_band,
                                'lr_band' => (float) $w->assessment->lr_band,
                                'gra_band' => (float) $w->assessment->gra_band,
                                'overall' => $w->assessment->overall_band !== null
                                    ? (float) $w->assessment->overall_band
                                    : round((
                                        (float) $w->assessment->ta_band +
                                        (float) $w->assessment->cc_band +
                                        (float) $w->assessment->lr_band +
                                        (float) $w->assessment->gra_band
                                    ) / 4, 1),
                                'predicted_band' => $w->assessment->predicted_band !== null
                                    ? (float) $w->assessment->predicted_band
                                    : null,
                                'checklist' => $w->assessment->checklist ?? [],
                                'answer_highlights' => $w->assessment->answer_highlights ?? [],
                                'ta_notes' => $w->assessment->ta_notes,
                                'cc_notes' => $w->assessment->cc_notes,
                                'lr_notes' => $w->assessment->lr_notes,
                                'gra_notes' => $w->assessment->gra_notes,
                                'feedback' => $w->assessment->feedback,
                            ];
                        }
                    }
                }
            }

            return response()->json([
                'status' => true,
                'data' => [
                    'kategori'     => $history->kategori,
                    'tipe_test'    => $history->tipe_test,
                    'nama_tipe'    => $history->nama_tipe,
                    'set_name'     => $history->setSoal?->name,
                    'score'        => $history->score,
                    'jumlah_soal'  => $history->jumlah_soal,
                    'score_conversion' => $history->score_conversion,
                    'assessor'     => $history->teacher?->name,
                    'created_at'   => $history->created_at?->format('d M Y H:i'),
                    'details'      => $details,
                    'video_urls'   => $videoUrls,
                    'assessments'  => $assessments,
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to load answers.'
            ], 500);
        }
    }

    public function update(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id'    => 'required|exists:users,id',
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $r->id,
            'foto'  => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = User::findOrFail($r->id);

            $user->name  = $r->nama;
            $user->email = $r->email;

            if ($r->hasFile('foto')) {
                $path = $r->file('foto')->store('foto_profile', 'public');
                $user->foto = $path;
            }

            $user->save();

            return response()->json([
                'status'  => true,
                'message' => 'Student information updated successfully.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update student information.',
                'errors'  => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }

    public function resetPasssword(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id'    => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = User::findOrFail($r->id);

            $user->password  = bcrypt($user->email);
            $user->save();

            return response()->json([
                'status'  => true,
                'message' => 'Password has been reset.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update student information.',
                'errors'  => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }

    public function delete(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id'    => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = User::findOrFail($r->id);

            $user->status = 0;
            $user->save();

            return response()->json([
                'status'  => true,
                'message' => 'The student has been deactivated.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update student information.',
                'errors'  => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }

    public function activate(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'id'    => 'required|exists:users,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = User::findOrFail($r->id);
            $user->status = 1;
            $user->save();

            return response()->json([
                'status'  => true,
                'message' => 'The student has been Activated.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update student information.',
                'errors'  => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->get('q');

        $users = User::where('role', 'student')
            ->where('verification_status', 1)
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
            })
            ->get();

        if ($users->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No student found.'
            ], 200);
        }

        return response()->json([
            'status' => true,
            'data' => $users
        ], 200);
    }

    public function loadMore(Request $request)
    {
        $offset = (int) $request->get('offset', 0);
        $limit  = 10;

        $users = User::where('role', 'student')
            ->where('verification_status', 1)
            ->orderBy('id', 'desc')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json([
            'status' => true,
            'data'   => $users
        ]);
    }
}
