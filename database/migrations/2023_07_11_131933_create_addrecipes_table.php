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
        Schema::create('addrecipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipeName')->nullable();
            $table->string('userName')->nullable();
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable();
            $table->string('instructions')->nullable();
            $table->string('prepTime')->nullable();
            $table->string('cookTime')->nullable();
            $table->string('totalTime')->nullable();
            $table->string('nutritional_fact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addrecipes');
    }
};
