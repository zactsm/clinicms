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
        Schema::create('patient', function (Blueprint $table) {
            $table->id('patientID');
            $table->string('pFName', 32);
            $table->string('pLName', 32);
            $table->date('pDOB');
            $table->enum('pGender', ['M', 'F']);
            $table->string('pPhoneNo', 15);
            $table->string('pAddress', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
