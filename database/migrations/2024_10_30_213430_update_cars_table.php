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
        Schema::table('cars', function (Blueprint $table) {
            $table->string('make', 50)->nullable(false);
            $table->string('model', 50)->nullable(false);
            $table->year('year')->nullable(false);
            $table->string('engine_fuel_type', 30)->nullable(true);
            $table->smallInteger('engine_hp')->unsigned()->nullable(true);
            $table->tinyInteger('engine_cylinders')->unsigned()->nullable(true);
            $table->string('transmission_type', 20)->nullable(true);
            $table->string('driven_wheels', 20)->nullable(true);
            $table->tinyInteger('number_of_doors')->unsigned()->nullable(true)->default(4);
            $table->string('market_category', 100)->nullable(true);
            $table->string('vehicle_size', 20)->nullable(true);
            $table->string('vehicle_style', 20)->nullable(true);
            $table->tinyInteger('highway_mpg')->unsigned()->nullable(true);
            $table->tinyInteger('city_mpg')->unsigned()->nullable(true);
            $table->integer('popularity')->unsigned()->nullable(true);
            $table->integer('msrp')->unsigned()->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('image_url')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            //
        });
    }
};
