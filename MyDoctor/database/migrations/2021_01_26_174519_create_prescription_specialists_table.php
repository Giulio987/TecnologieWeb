<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription_specialists', function (Blueprint $table) {
            $table->id('id');
            $table->char('fiscal_code_pazient', '16');
            $table->char('fiscal_code_doctor', '16');
            $table->bigInteger('id_specialist')->unsigned();
            $table->date('date');
            $table->timestamps();

            $table->foreign('fiscal_code_pazient')->references('fiscal_code')->on('pazients')->onDelete('cascade');
            $table->foreign('fiscal_code_doctor')->references('fiscal_code')->on('doctors')->onDelete('cascade');
            $table->foreign('id_specialist')->references('id')->on('specialists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription_specialists');
    }
}
