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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('ID');
            $table->integer('quantity');
            $table->date('arrival_date');
        });

        Schema::table('inventory', function (Blueprint $table) {
            $table->foreign('branchID')->references('id')->on('branch');
            $table->foreign('carID')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('inventory');
    }
};
