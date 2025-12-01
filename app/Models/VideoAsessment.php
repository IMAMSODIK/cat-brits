<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoAsessment extends Model
{
    /** @use HasFactory<\Database\Factories\VideoAsessmentFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function video(): BelongsTo{
        return $this->belongsTo(Videos::class);
    }
}
