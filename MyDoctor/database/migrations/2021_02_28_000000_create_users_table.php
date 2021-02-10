<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->char('fiscal_code', '16')->unique();
            $table->string('name', '20');
            $table->string('surname', '20');
            $table->string('email', '50')->unique();
            $table->date('dob');
            $table->string('phone_number','15')->unique();         
            $table->char('gender', '1');
            $table->string('street_address', '50');
            $table->string('street_number', '8');
            $table->string('postal_code', '5');
            $table->string('city', '30');
            $table->bigInteger('id_doctor')->unsigned();
            $table->bigInteger('id_admin')->unsigned();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('id_doctor')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
