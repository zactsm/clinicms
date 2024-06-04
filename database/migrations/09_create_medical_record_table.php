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
        Schema::create('medical_record', function (Blueprint $table) {
            $table->id('recID');
            $table->unsignedBigInteger('patientID');
            $table->unsignedBigInteger('staffID');
            $table->unsignedBigInteger('medID');
            $table->text('recDiagnosis');
            $table->date('recDate');
            $table->timestamp(column: 'created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent();

            $table->foreign('patientID')->references('patientID')->on('patient')->onDelete('cascade');
            $table->foreign('staffID')->references('staffID')->on('staff')->onDelete('cascade');
            $table->foreign('medID')->references('medID')->on('medication')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_record');
    }
};
