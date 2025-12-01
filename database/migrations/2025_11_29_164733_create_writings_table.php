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
        Schema::create('writings', function (Blueprint $table) {
            $table->id();
            $table->uuid('teacher_id')->nullable();
            $table->uuid('student_id');
            $table->foreignId('set_soal_id');
            $table->integer('no_soal');
            $table->integer('task')->nullable();

            $table->enum('tipe', ['mock', 'practice']);
            $table->longText('answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writings');
    }
};
