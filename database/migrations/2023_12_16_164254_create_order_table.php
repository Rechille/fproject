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
        Schema::create('order', function (Blueprint $table) {
            $table->id('orderID');
            $table->date('date');
            $table->string('status');
            $table->integer('quantity');
            $table->integer('sales_total');
            $table->string('payment_method');

        });
        Schema::table('order', function (Blueprint $table) {
            $table->foreign('customerID')->references('id')->on('customer');
            $table->foreign('branchID')->references('id')->on('branch');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
