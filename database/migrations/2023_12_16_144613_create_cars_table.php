<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('carID');
            $table->string('manufacturer');
            $table->string('model');
            $table->float('price');
            $table->integer('vin');
            $table->string('description');
            $table->string('image_URL');
            $table->timestamps();
        });

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('branchID')->references('id')->on('branch');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('cars');
    }
};
