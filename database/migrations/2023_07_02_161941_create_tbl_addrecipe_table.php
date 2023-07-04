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
        Schema::create('tbl_addrecipe', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->time('preptime');
            $table->time('cooktime');
            $table->string('difficulty');
            $table->text('description');
            $table->text('ingredient');
            $table->string('quantity');
            $table->text('instructions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_addrecipe');
    }
};
