<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id('id');
            $table->char('fiscal_code_pazient', '16');
            $table->char('fiscal_code_doctor', '16');
            $table->date('visit_data');
            $table->timestamps();

            $table->foreign('fiscal_code_pazient')->references('fiscal_code')->on('pazients')->onDelete('cascade');
            $table->foreign('fiscal_code_doctor')->references('fiscal_code')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
