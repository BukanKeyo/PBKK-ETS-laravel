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
        Schema::create('anime_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('title_id')->unique();
            $table->foreignId('genre_id');
            $table->string('review');
            $table->float('rating');
            //$table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anime_reviews');
    }
};
