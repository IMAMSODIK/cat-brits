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
        Schema::create('video_asessments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('video_id');

            // ==== Fluency and Coherence ====
            $table->boolean('fc_repetition')->nullable();
            $table->boolean('fc_hesitation')->nullable();
            $table->boolean('fc_speech_rate')->nullable();
            $table->boolean('fc_connectives')->nullable();
            $table->boolean('fc_discourse_markers')->nullable();
            $table->boolean('fc_relevant_answers')->nullable();
            $table->float('fc_band')->nullable();

            // ==== Lexical Resource ====
            $table->boolean('lr_range_vocab')->nullable();
            $table->boolean('lr_idiomatic')->nullable();
            $table->boolean('lr_less_common')->nullable();
            $table->boolean('lr_collocation')->nullable();
            $table->boolean('lr_paraphrase')->nullable();
            $table->float('lr_band')->nullable();

            // ==== Grammatical Range & Accuracy ====
            $table->boolean('gra_range_structure')->nullable();
            $table->boolean('gra_error_free')->nullable();
            $table->boolean('gra_grammar_features')->nullable();
            $table->float('gra_band')->nullable();

            // ==== Pronunciation ====
            $table->boolean('pr_features')->nullable();
            $table->boolean('pr_understood')->nullable();
            $table->float('pr_band')->nullable();

            // remark
            $table->text('remark')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_asessments');
    }
};
