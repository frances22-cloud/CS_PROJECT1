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
        Schema::table('addrecipes', function (Blueprint $table) {
            //
            $table->string('image')->nullable()->after('nutritional_fact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addrecipes', function (Blueprint $table) {
            //
            $table->dropColumn('image');
        });
    }
};
