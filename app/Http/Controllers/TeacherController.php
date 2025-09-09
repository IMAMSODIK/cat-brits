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
                'role'     => 'Teacher'
            ]);

            return response()->json([
                'status'  => true,
                'message' => 'Teacher information saved successfully.',
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
                return response()->json([
                    'status'  => false,
                    'message' => 'Validation error',
                    'errors'  => $validator->errors()
                ], 422);
            }

            $user = User::find($r->id);

            if (!$user) {
                return response()->json([
                    'status'  => false,
                    'message' => 'User not found'
                ], 404);
            }

            return response()->json([
                'status'  => true,
                'message' => 'User data retrieved successfully.',
                'data'    => $user->toArray()
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong.',
                'error'   => $e->getMessage()
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
                'message' => 'Teacher information updated successfully.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update teacher information.',
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
                'message' => 'Failed to update teacher information.',
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
                'message' => 'The teacher has been deactivated.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update teacher information.',
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
                'message' => 'The teacher has been Activated.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update teacher information.',
                'errors'  => ['exception' => [$e->getMessage()]]
            ], 500);
        }
    }
}
