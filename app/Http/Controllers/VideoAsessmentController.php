<?php

namespace App\Http\Controllers;

use App\Models\VideoAsessment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoAsessmentRequest;
use App\Http\Requests\UpdateVideoAsessmentRequest;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoAsessmentController extends Controller
{
    private function bool($value)
    {
        return $value === "on" ? 1 : 0;
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required|exists:videos,id'
        ]);

        try {
            DB::beginTransaction();

            $video = Videos::lockForUpdate()->findOrFail($request->video_id);
            $assessment = VideoAsessment::updateOrCreate(
                ['video_id' => $video->id],
                [
                    'fc_repetition'         => $this->bool($request->fc_repetition),
                    'fc_hesitation'         => $this->bool($request->fc_hesitation),
                    'fc_speech_rate'        => $this->bool($request->fc_speech_rate),
                    'fc_connectives'        => $this->bool($request->fc_connectives),
                    'fc_discourse_markers'  => $this->bool($request->fc_discourse_markers),
                    'fc_relevant_answers'   => $this->bool($request->fc_relevant_answers),
                    'fc_band'               => $request->fc_band,

                    'lr_range_vocab'        => $this->bool($request->lr_range_vocab),
                    'lr_idiomatic'          => $this->bool($request->lr_idiomatic),
                    'lr_less_common'        => $this->bool($request->lr_less_common),
                    'lr_collocation'        => $this->bool($request->lr_collocation),
                    'lr_paraphrase'         => $this->bool($request->lr_paraphrase),
                    'lr_band'               => $request->lr_band,

                    'gra_range_structure'   => $this->bool($request->gra_range_structure),
                    'gra_error_free'        => $this->bool($request->gra_error_free),
                    'gra_grammar_features'  => $this->bool($request->gra_grammar_features),
                    'gra_band'              => $request->gra_band,

                    'pr_features'           => $this->bool($request->pr_features),
                    'pr_understood'         => $this->bool($request->pr_understood),
                    'pr_band'               => $request->pr_band,

                    'remark'                => $request->remark,
                ]
            );


            $video->update([
                'teacher_id' => Auth::id()
            ]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Assessment saved successfully.',
                'assessment_id' => $assessment->id
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
