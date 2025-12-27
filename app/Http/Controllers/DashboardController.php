<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SetSoal;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['pageTitle'] = 'Dashboard';

        try{
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

            return view('dashboard.index', $data);
        }catch(Exception $e){
            return redirect('/dashboard')->with('error', $e->getMessage());
        }
    }
}
