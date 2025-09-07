<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        try {
            $data = [
                'pageTitle' => "Profile",
                'data' => User::find(Auth::id())
            ];

            return view('profile.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }
}
