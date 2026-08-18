<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WritingAssessment extends Model
{
    /** @use HasFactory<\Database\Factories\WritingAssessmentFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'checklist' => 'array',
        'answer_highlights' => 'array',
    ];

    public function writing(): BelongsTo{
        return $this->belongsTo(Writing::class);
    }
}
