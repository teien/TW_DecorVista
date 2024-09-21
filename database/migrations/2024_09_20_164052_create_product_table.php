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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 255);
            $table->string('category', 100);
            $table->string('brand', 100);
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('image_url', 255)->nullable();
            $table->timestamps(); // Bao gồm cả created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};