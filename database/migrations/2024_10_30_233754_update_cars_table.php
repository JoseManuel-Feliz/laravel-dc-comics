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
            $table->string('engine_fuel_type', 50)->nullable(true)->change();
            $table->float('engine_hp')->nullable(true)->default(0)->change();
            $table->float('engine_cylinders')->nullable(true)->default(0)->change();
          /*   $table->tinyInteger('highway_mpg')->unsigned()->nullable(true)->default(0)->change();
            $table->tinyInteger('city_mpg')->unsigned()->nullable(true)->default(0)->change();
            $table->integer('popularity')->unsigned()->nullable(true)->default(0)->change();
            $table->integer('msrp')->unsigned()->nullable(true)->default(0)->change(); */
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