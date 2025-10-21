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
        Schema::create('palindromes', function (Blueprint $table) {
            $table->id();
            $table->string('word')->unique();
            $table->integer('length');
            $table->boolean('palindrome');
            $table->string('sha256_hash');
            $table->integer('word_count');
            $table->integer('frequency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('palindromes');
    }
};
