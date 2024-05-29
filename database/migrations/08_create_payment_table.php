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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('paymentID');
            $table->unsignedBigInteger('billID');
            //$table->foreignId('billID')->constrained('bill');
            $table->decimal('paymentAmount', 10, 2);
            $table->date('paymentDate');
            $table->timestamps();

            $table->foreign('billID')->references('billID')->on('bill')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
