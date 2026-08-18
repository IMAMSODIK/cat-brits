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
        Schema::table('writing_assessments', function (Blueprint $table) {
            $table->json('checklist')->nullable();
            $table->decimal('overall_band', 4, 1)->nullable();
            $table->decimal('predicted_band', 4, 1)->nullable();
            $table->text('ta_notes')->nullable();
            $table->text('cc_notes')->nullable();
            $table->text('lr_notes')->nullable();
            $table->text('gra_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('writing_assessments', function (Blueprint $table) {
            $table->dropColumn([
                'checklist',
                'overall_band',
                'predicted_band',
                'ta_notes',
                'cc_notes',
                'lr_notes',
                'gra_notes',
            ]);
        });
    }
};
