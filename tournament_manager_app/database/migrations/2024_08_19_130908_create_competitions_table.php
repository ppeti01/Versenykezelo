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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('year');
            $table->json('languages')->nullable();
            $table->unsignedInteger('correct_points')->default(10);
            $table->Integer('incorrect_points')->default(-5);
            $table->unsignedInteger('empty_points')->default(0);
            $table->string('winner')->default('NaN');
            $table->timestamps();

            $table->unique(['name', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
