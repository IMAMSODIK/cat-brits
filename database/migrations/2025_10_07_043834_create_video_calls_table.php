<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('video_calls', function (Blueprint $table) {
            $table->id();
            $table->uuid('student_id')->nullable();
            $table->uuid('teacher_id')->nullable();
            $table->foreignId('set_soal_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->datetime('proposed_time');
            $table->datetime('scheduled_time')->nullable();
            $table->datetime('started_at')->nullable();
            $table->datetime('ended_at')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected', 'completed', 'cancelled'])->default('pending');
            $table->string('jitsi_room_name')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->text('teacher_notes')->nullable();
            $table->integer('duration_minutes')->default(60);
            $table->text('recording_url')->nullable();
            $table->string('recording_filename')->nullable();
            $table->bigInteger('recording_size')->nullable();
            $table->integer('recording_duration')->nullable();
            $table->text('screen_sharing_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_calls');
    }
};
