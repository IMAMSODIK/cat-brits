<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Videos extends Model
{
    /** @use HasFactory<\Database\Factories\VideosFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function assesment(): HasOne{
        return $this->hasOne(VideoAsessment::class);
    }

    public function setSoal()
    {
        return $this->belongsTo(SetSoal::class, 'set_soal_id');
    }
}
