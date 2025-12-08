<?php

namespace App\Http\Controllers;

use App\Models\WritingAssessment;
use App\Http\Controllers\Controller;
use App\Models\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WritingAssessmentController extends Controller
{
    public function detail($id)
    {
        $writing = Writing::findOrFail($id);

        return response()->json([
            'answer' => $writing->answer,
            'topic' => $writing->setSoal->title ?? '',
            'student' => $writing->student->name ?? ''
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
                'teacher_id' => auth()->id(),
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
