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
            $table->foreignId('guru_id');
            $table->foreignId('murid_id');
            $table->dateTime('scheduled_at');
            $table->integer('duration_minutes')->default(60);
            $table->string('status')->default('pending'); // pending, approved, rejected, completed
            $table->string('room_url')->nullable();
            $table->text('note')->nullable();
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
