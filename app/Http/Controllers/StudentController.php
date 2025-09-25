<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
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

            return view('student.index', $data);
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
