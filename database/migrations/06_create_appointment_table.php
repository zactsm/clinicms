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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id('aptID');
            $table->unsignedBigInteger('patientID');
            $table->unsignedBigInteger('staffID');
            //$table->foreignId('patientID')->constrained('patient');
            //$table->foreignId('staffID')->constrained('staff');
            $table->date('aptDate');
            $table->time('aptTime');
            $table->timestamps();

            $table->foreign('patientID')->references('patientID')->on('patient')->onDelete('cascade');
            $table->foreign('staffID')->references('staffID')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
