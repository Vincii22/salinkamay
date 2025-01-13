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
         // Create letters table
         Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->char('letter', 1);
            $table->string('image_path');
            $table->timestamps();
        });

        // Create words table
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('image_path');
            $table->timestamps();
        });

        // Create phrases table
        Schema::create('phrases', function (Blueprint $table) {
            $table->id();
            $table->string('phrase');
            $table->string('video_path');
            $table->timestamps();
        });

         // Create time expression table
         Schema::create('time_expressions', function (Blueprint $table) {
            $table->id();
            $table->string('time_expression');
            $table->string('video_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_language_tables');
    }
};
