<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestDetailHistory extends Model
{
    /** @use HasFactory<\Database\Factories\TestDetailHistoryFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function testDetail(): BelongsTo{
        return $this->belongsTo(TestHistory::class, 'test_history_id');
    }
}
