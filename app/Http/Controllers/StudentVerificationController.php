<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentVerificationController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'pageTitle' => "Students Verification",
                'data' => User::where('role', 'student')
                            ->where('verification_status', 0)
                            ->orderBy('status', 'desc')
                            ->orderBy('id', 'desc')
                            ->take(20)
                            ->get()
            ];

            return view('student.verification', $data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
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

            $user->delete();

            return response()->json([
                'status'  => true,
                'message' => 'The account has been deleted.',
                'data'    => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update account information.',
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
            $user->verification_status = 1;
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
            ->where('verification_status', 0)
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
            ->where('verification_status', 0)
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
