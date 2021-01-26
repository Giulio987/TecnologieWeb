<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePazientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pazients', function (Blueprint $table) {
            $table->char('fiscal_code', '16')->primary();
            $table->string('name', '20');
            $table->string('surname', '20');
            $table->string('email', '50')->unique();
            $table->date('dob');
            $table->char('gender', '1');
            $table->string('street_address', '50');
            $table->string('street_number', '8');
            $table->string('postal_code', '5');
            $table->string('city', '30');
            $table->char('fiscal_code_doctor', '16');
            $table->timestamps();

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
        Schema::dropIfExists('pazients');
    }
}
