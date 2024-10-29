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
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable(false);
            $table->string('brand', 40)->nullable(false);
            $table->string('engine', 50)->nullable(true);
            $table->tinyInteger('top_speed')->unsigned(true)->nullable(true);
            $table->tinyInteger('power')->unsigned(true)->nullable(true);
            $table->string('country', 20)->nullable(false);
            $table->text('image_url')->nullable(true);
            $table->float('weight', 5, 2)->nullable(true);
            $table->text('description', 20)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
