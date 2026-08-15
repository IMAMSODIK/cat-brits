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
        Schema::create('test_detail_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_history_id');
            $table->string('soal_id');
            $table->string('jawaban_user');
            $table->string('jawaban_benar');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_detail_histories');
    }
};
