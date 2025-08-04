<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'pageTitle' => "Teachers",
                'data' => User::where('role', 'teacher')->get()
            ];

            return view('teacher.index', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data guru.');
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'username' => 'required|string|max:255',
            'token' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $path = $request->file('foto')->store('user', 'public');

        $data = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'token' => $request->token,
            'password' => bcrypt($request->username),
            'picture' => $path,
            'role' => 'teacher'
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Teacher information saved successfully.',
            'data' => $data
        ]);
    }
}
