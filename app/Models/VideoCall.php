<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCall extends Model
{
    /** @use HasFactory<\Database\Factories\VideoCallFactory> */
    use HasFactory;

    protected $fillable = [
        'guru_id','murid_id','scheduled_at','duration_minutes','status','room_url','note'
    ];

    protected $dates = ['scheduled_at'];

    public function guru() { return $this->belongsTo(User::class, 'guru_id'); }
    public function murid() { return $this->belongsTo(User::class, 'murid_id'); }

    public function isJoinable()
    {
        if ($this->status !== 'approved') return false;

        $start = $this->scheduled_at;
        $end = $start->copy()->addMinutes($this->duration_minutes);

        // beri toleransi 5 menit sebelum start
        return now()->between($start->subMinutes(5), $end);
    }
}
