<?php

namespace App\Http\Controllers;

use App\Models\WritingAssessment;
use App\Http\Controllers\Controller;
use App\Models\TestHistory;
use App\Models\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WritingAssessmentController extends Controller
{
    public function detail($id)
    {
        $writing = Writing::with('assessment')->findOrFail($id);

        return response()->json([
            'answer' => $writing->answer,
            'topic' => $writing->setSoal->name ?? '',
            'student' => $writing->student->name ?? '',
            'assessment' => $writing->assessment ? [
                'ta_band'   => (float) $writing->assessment->ta_band,
                'cc_band'   => (float) $writing->assessment->cc_band,
                'lr_band'   => (float) $writing->assessment->lr_band,
                'gra_band'  => (float) $writing->assessment->gra_band,
                'feedback'  => $writing->assessment->feedback,
            ] : null,
        ]);
    }

    public function store(Request $r)
    {
        DB::beginTransaction();

        try {
            $data = [
                'writing_id' => $r->writing_id,
                'ta_band'    => $r->ta_band,
                'cc_band'    => $r->cc_band,
                'lr_band'    => $r->lr_band,
                'gra_band'   => $r->gra_band,
                'feedback'   => $r->feedback,
            ];

            $existing = WritingAssessment::where('writing_id', $r->writing_id)->first();

            if ($existing) {
                $existing->update($data);
            } else {
                WritingAssessment::create($data);
            }

            Writing::where('id', $r->writing_id)->update([
                'teacher_id' => Auth::id(),
            ]);

            // Tandai assessor pada exam history yang terkait jawaban writing ini
            TestHistory::whereHas('detailHistories', function ($q) use ($r) {
                $q->where('soal_id', 'writing-' . $r->writing_id);
            })->update([
                'teacher_id' => Auth::id(),
            ]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment saved successfully.'
            ]);
        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
