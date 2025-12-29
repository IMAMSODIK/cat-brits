<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCall extends Model
{
    /** @use HasFactory<\Database\Factories\VideoCallFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'teacher_id',
        'set_soal_id',
        'title',
        'description',
        'proposed_time',
        'scheduled_time',
        'started_at',
        'ended_at',
        'status',
        'jitsi_room_name',
        'rejection_reason',
        'teacher_notes',
        'duration_minutes',
        'recording_url',
        'recording_filename',
        'recording_size',
        'recording_duration',
        'screen_sharing_data',
    ];

    protected $casts = [
        'proposed_time' => 'datetime',
        'scheduled_time' => 'datetime',
        'started_at' => 'datetime',
        'ended_at' => 'datetime',
        'screen_sharing_data' => 'array',
    ];

    // Relationships
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    public function scopeUpcoming($query)
    {
        return $query->where('scheduled_time', '>', now());
    }

    // Methods
    public function generateRoomName()
    {
        return 'mocktest-' . $this->id . '-' . uniqid();
    }

    /**
     * Check if session can be started
     * Session can start 15 minutes before scheduled time until it ends
     */
    public function canStart()
    {
        // Must be accepted status
        if ($this->status !== 'accepted') {
            return false;
        }

        // Must have scheduled time
        if (!$this->scheduled_time) {
            return false;
        }

        $now = now();
        $startWindow = $this->scheduled_time->copy()->subMinutes(15);
        $endTime = $this->scheduled_time->copy()->addMinutes($this->duration_minutes);

        // Session can start 15 minutes before scheduled time and until it ends
        return $now >= $startWindow && $now <= $endTime;
    }
}
