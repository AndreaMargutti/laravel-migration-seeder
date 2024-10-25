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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("brand", 255);
            $table->string("departure_station", 255);
            $table->string("arrival_station", 255);
            $table->time("departure_hour");
            $table->time("arrival_hour");
            $table->string("train_code", 10)->unique();
            $table->integer("wagon_number");
            $table->boolean("is_punctual");
            $table->boolean("is_canceled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};