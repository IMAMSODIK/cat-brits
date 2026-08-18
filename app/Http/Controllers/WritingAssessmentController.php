<?php

namespace App\Http\Controllers;

use App\Models\WritingAssessment;
use App\Http\Controllers\Controller;
use App\Models\TestHistory;
use App\Models\Writing;
use App\Services\WritingQuestionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WritingAssessmentController extends Controller
{
    public function detail($id)
    {
        $writing = Writing::with(['assessment', 'teacher'])->findOrFail($id);

        return response()->json([
            'answer' => $writing->answer,
            'topic' => $writing->setSoal->name ?? '',
            'set_code' => $writing->setSoal->kode ?? '',
            'student' => $writing->student->name ?? '',
            'task' => $writing->task ?? '',
            'question' => app(WritingQuestionService::class)->getQuestion($writing),
            'submitted_at' => $writing->created_at?->translatedFormat('l, d F Y H:i'),
            'assessed_at' => $writing->assessment?->updated_at?->translatedFormat('l, d F Y'),
            'tutor' => $writing->teacher->name ?? (auth()->user()->name ?? ''),
            'assessment' => $writing->assessment ? [
                'ta_band'        => (float) $writing->assessment->ta_band,
                'cc_band'        => (float) $writing->assessment->cc_band,
                'lr_band'        => (float) $writing->assessment->lr_band,
                'gra_band'       => (float) $writing->assessment->gra_band,
                'feedback'       => $writing->assessment->feedback,
                'checklist'      => $writing->assessment->checklist,
                'answer_highlights' => $writing->assessment->answer_highlights ?? [],
                'overall_band'   => $writing->assessment->overall_band !== null ? (float) $writing->assessment->overall_band : null,
                'predicted_band' => $writing->assessment->predicted_band !== null ? (float) $writing->assessment->predicted_band : null,
                'ta_notes'       => $writing->assessment->ta_notes,
                'cc_notes'       => $writing->assessment->cc_notes,
                'lr_notes'       => $writing->assessment->lr_notes,
                'gra_notes'      => $writing->assessment->gra_notes,
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

            // Field checklist (hanya dikirim dari UI Writing Score Prediction Checklist)
            if ($r->has('checklist') || $r->has('overall_band')) {
                $data = array_merge($data, [
                    'checklist'      => $r->input('checklist'),
                    'answer_highlights' => is_string($r->input('answer_highlights'))
                        ? json_decode($r->input('answer_highlights'), true)
                        : $r->input('answer_highlights'),
                    'overall_band'   => $r->overall_band ?: null,
                    'predicted_band' => $r->predicted_band ?: null,
                    'ta_notes'       => $r->ta_notes,
                    'cc_notes'       => $r->cc_notes,
                    'lr_notes'       => $r->lr_notes,
                    'gra_notes'      => $r->gra_notes,
                ]);
            }

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
