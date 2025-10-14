<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TestHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestHistoryController extends Controller
{
    public function index(Request $r)
    {
        try {
            return view('history.index', [
                'pageTitle' => 'Exam History',
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memuat data.');
        }
    }

    public function loadData(Request $r)
    {
        try {
            $limit = 20;
            $offset = (int) $r->input('offset', 0);

            $query = TestHistory::with(['student', 'teacher', 'setSoal', 'detailHistories'])
                ->orderBy('created_at', 'desc');

            // 🔹 Filter kategori
            if ($r->filled('category')) {
                $cats = $r->input('category');
                if (!is_array($cats)) $cats = [$cats];
                $query->whereIn('kategori', $cats);
            }

            // 🔹 Filter tipe
            if ($r->filled('type')) {
                $types = $r->input('type');
                if (!is_array($types)) $types = [$types];
                $query->whereIn('tipe', $types);
            }

            // 🔹 Filter set soal
            if ($r->filled('set') && $r->input('set') !== '') {
                $query->where('set_soal_id', $r->input('set'));
            }

            // 🔹 Filter tanggal
            $start = $r->input('date_start');
            $end   = $r->input('date_end');
            if ($start && $end) {
                $startDt = \Carbon\Carbon::parse($start)->startOfDay();
                $endDt   = \Carbon\Carbon::parse($end)->endOfDay();
                $query->whereBetween('created_at', [$startDt, $endDt]);
            } elseif ($start) {
                $query->whereDate('created_at', '>=', \Carbon\Carbon::parse($start)->toDateString());
            } elseif ($end) {
                $query->whereDate('created_at', '<=', \Carbon\Carbon::parse($end)->toDateString());
            }

            // 🔹 Ambil data sesuai offset dan limit
            $histories = $query->skip($offset)->take($limit)->get();

            return response()->json([
                'status' => true,
                'data' => $histories,
                'next_offset' => $offset + $histories->count(),
                'has_more' => $histories->count() === $limit,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
