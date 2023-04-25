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
        Schema::create('szin', function (Blueprint $table) {
            $table->id("szid");
            $table->integer("red");
            $table->integer("green");
            $table->integer("blue");
            $table->dateTime("rogzitesIdeje");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szin');
    }
};
