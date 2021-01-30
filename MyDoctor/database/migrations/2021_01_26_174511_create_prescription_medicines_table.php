<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_medicines', function (Blueprint $table) {
            $table->id('id');
            $table->char('fiscal_code_pazient', '16');
            $table->char('fiscal_code_doctor', '16');
            $table->char('aic', '10');
            $table->date('date');
            $table->timestamps();

            $table->foreign('fiscal_code_pazient')->references('fiscal_code')->on('users')->onDelete('cascade');
            $table->foreign('fiscal_code_doctor')->references('fiscal_code')->on('doctors')->onDelete('cascade');
            $table->foreign('aic')->references('aic')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription_medicines');
    }
}
