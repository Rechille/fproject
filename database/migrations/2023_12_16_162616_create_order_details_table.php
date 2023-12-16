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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('ID');
            $table->timestamps();
        });

        Schema::table('order_details', function (Blueprint $table) {
            $table->foreign('orderID')->references('id')->on('order');
            $table->foreign('carID')->references('id')->on('cars');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
