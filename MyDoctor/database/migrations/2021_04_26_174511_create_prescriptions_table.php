<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id('rfe');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_doctor')->unsigned();
            $table->string('description');
            $table->string('status');
            $table->date('date');
            $table->string('type');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_doctor')->references('id')->on('doctors')->onDelete('cascade');;
        });
        //inizializziamo rfe a un numero realistico
        DB::statement("ALTER TABLE prescriptions AUTO_INCREMENT = 120000000000000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
