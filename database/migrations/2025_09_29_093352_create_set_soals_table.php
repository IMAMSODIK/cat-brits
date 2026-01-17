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
        Schema::create('set_soals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail');
            $table->string('thumbnail_reading')->nullable();
            $table->string('thumbnail_listening')->nullable();
            $table->string('thumbnail_speaking')->nullable();
            $table->string('thumbnail_writing')->nullable();
            $table->string('thumbnail_reading_text')->nullable();
            $table->string('thumbnail_listening_text')->nullable();
            $table->string('thumbnail_speaking_text')->nullable();
            $table->string('thumbnail_writing_text')->nullable();
            $table->string('kode')->unique();
            $table->enum('kategori', ['ielts', 'toefl', 'ge', 'sat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_soals');
    }
};
