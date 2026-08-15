<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('test_detail_histories', function (Blueprint $table) {
            $table->text('jawaban_user')->change();
            $table->text('jawaban_benar')->change();
        });
    }

    public function down(): void
    {
        Schema::table('test_detail_histories', function (Blueprint $table) {
            $table->string('jawaban_user')->change();
            $table->string('jawaban_benar')->change();
        });
    }
};
