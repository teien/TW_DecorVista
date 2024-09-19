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
        Schema::create('interior_designers', function (Blueprint $table) {
            $table->id('designer_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('specialization', 255);
            $table->string('portfolio', 2048)->default('');

            $table->integer('years_of_experience')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interior_designers');
    }
};
