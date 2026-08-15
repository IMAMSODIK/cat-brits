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
        Schema::create('writing_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('writing_id')->constrained()->onDelete('cascade');

            $table->decimal('ta_band', 4, 1)->nullable();
            $table->decimal('cc_band', 4, 1)->nullable();
            $table->decimal('lr_band', 4, 1)->nullable();
            $table->decimal('gra_band', 4, 1)->nullable();

            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writing_assessments');
    }
};
