<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('id');
            $table->char('fiscal_code','16')->unique();
            $table->string('name','20');
            $table->string('surname','20');
            $table->string('email','50')->unique();
            $table->char('gender','1');
            $table->date('dob');
            $table->string('phone_number','15')->unique();
            $table->bigInteger('id_building')->unsigned();
            $table->bigInteger('id_admin')->unsigned()->default(1);
            $table->string('password'); 
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_building')->references('id')->on('buildings')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}