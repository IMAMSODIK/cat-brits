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
        Schema::create('test_histories', function (Blueprint $table) {
            $table->id();
            $table->uuid('student_id');
            $table->uuid('teacher_id')->nullable();
            $table->enum('tipe_test', ['mock', 'practice']);
            $table->string('kategori');
            $table->string('tipe');
            $table->unsignedBigInteger('set_soal_id');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_histories');
    }
};
