<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\TestHistory;
use App\Models\User;
use App\Models\VideoCall;
use App\Models\Videos;
use App\Models\Writing;
use Carbon\Carbon;
use Exception;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private function getTopBottomScores($kategori, $limit = 5) {
        // Top 5
        $top = DB::table('test_histories as th')
            ->join('users as u', 'th.student_id', '=', 'u.id')
            ->select('th.student_id', 'u.name', DB::raw('AVG(th.score_conversion) as avg_score'))
            ->where('th.kategori', $kategori)
            ->where('th.tipe_test', 'mock')
            ->whereMonth('th.created_at', Carbon::now()->month)
            ->whereYear('th.created_at', Carbon::now()->year)
            ->groupBy('th.student_id', 'u.name')
            ->orderByDesc('avg_score')
            ->limit($limit)
            ->get();

        // Bottom 5
        $bottom = DB::table('test_histories as th')
            ->join('users as u', 'th.student_id', '=', 'u.id')
            ->select('th.student_id', 'u.name', DB::raw('AVG(th.score_conversion) as avg_score'))
            ->where('th.kategori', $kategori)
            ->where('th.tipe_test', 'mock')
            ->whereMonth('th.created_at', Carbon::now()->month)
            ->whereYear('th.created_at', Carbon::now()->year)
            ->groupBy('th.student_id', 'u.name')
            ->orderBy('avg_score')
            ->limit($limit)
            ->get();

        return [$top, $bottom];
    }

    public function index()
    {
        $score = [];
        $categories = ['reading', 'listening'];

        foreach ($categories as $kategori) {
            $score[] = $this->getTopBottomScores($kategori);
        }

        $data['score'] = $score;
        $data['pageTitle'] = 'Dashboard';

        try{
            $user = auth()->user();

            $countUsers = User::count();
            $countAdmin = User::where("role", "admin")->count();
            $countTeacher = User::where("role", "teacher")->count();
            $countStudent = User::where("role", "student")->count();

            $data['countUsers'] = $countUsers;
            $data['countAdmin'] = $countAdmin;
            $data['countTeacher'] = $countTeacher;
            $data['countStudent'] = $countStudent;

            $countIelts = SetSoal::where("kategori", "ielts")->count();
            $countToefl = SetSoal::where("kategori", "toefl")->count();
            $countGe = SetSoal::where("kategori", "ge")->count();
            $countSat = SetSoal::where("kategori", "sat")->count();

            $data['countIelts'] = $countIelts;
            $data['countToefl'] = $countToefl;
            $data['countGe'] = $countGe;
            $data['countSat'] = $countSat;

            $unverifStudent = User::where('role', 'student')
                                ->where('verification_status', 0)
                                ->latest()
                                ->take(5)
                                ->get();

            $studentActivities = TestHistory::with(['student', 'setSoal'])
                                    ->latest()
                                    ->take(5)
                                    ->get();

            $data['unverifStudent'] = $unverifStudent;
            $data['studentActivities'] = $studentActivities;

            $videoRequest = Videos::with(['student', 'setSoal'])->where('teacher_id', null)->get();
            $writingRequest = Writing::with(['student', 'setSoal'])->whereNull('teacher_id')->get();
            
            if(in_array($user->role, ['admin', 'teacher'])){
                if($user->role == 'admin'){
                    $upcomingSessions = VideoCall::where("status", "accepted")->with('student')->get();
                    $pendingSessions = VideoCall::where("status", "pending")->with('student')->get();
                }elseif($user->role == 'teacher'){
                    $upcomingSessions = $user->teacherSessions()->accepted()->upcoming()->with('student')->get();
                    $pendingSessions = VideoCall::where("teacher_id", $user->id)->where("status", "pending")->with('student')->get();
                }

                $data['videoRequest'] = $videoRequest;
                $data['writingRequest'] = $writingRequest;
                $data['pendingSessions'] = $pendingSessions;
                $data['upcomingSessions'] = $upcomingSessions;
            }

            $end = Carbon::today();
            $start = $end->copy()->subYear()->startOfDay();
            if(auth()->user()->role == 'student'){
                                    $rawActivities = DB::table('test_histories')
                                    ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                                    ->where('student_id', auth()->user()->id)
                                    ->whereBetween('created_at', [$start, $end])
                                    ->groupBy('date')
                                    ->pluck('total', 'date')
                                    ->toArray();
            }else{
                $rawActivities = DB::table('test_histories')
                                    ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
                                    ->whereBetween('created_at', [$start, $end])
                                    ->groupBy(DB::raw('DATE(created_at)'))
                                    ->orderBy('date')
                                    ->pluck('total', 'date')
                                    ->toArray();
            }

            $data['start'] = $start;
            $data['end'] = $end;
            $data['courseActivities'] = $rawActivities;

            return view('dashboard.index', $data);
        }catch(Exception $e){
            // dd($e->getMessage());
            return redirect('/dashboard')->with('error', $e->getMessage());
        }
    }
}
