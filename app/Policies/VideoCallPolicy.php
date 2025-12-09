<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\VideoCall;
use App\Models\User;

class VideoCallPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, VideoCall $videoCall): bool
    {
        return $user->id === $videoCall->student_id ||
               $user->id === $videoCall->teacher_id;
    }

    public function endSession(User $user, VideoCall $mockTestSession): bool
    {
        return $user->id === $mockTestSession->student_id ||
               $user->id === $mockTestSession->teacher_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, VideoCall $videoCall): bool
    {
        if ($user->role === 'teacher') {
            return true;
        }
        
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, VideoCall $videoCall): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, VideoCall $videoCall): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, VideoCall $videoCall): bool
    {
        return false;
    }
}
