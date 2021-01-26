<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id('id');
            $table->string('street_address', '50');
            $table->string('street_number', '8');
            $table->string('postal_code', '5');
            $table->string('city', '30');
            $table->timestamps();

            $table->unique(['street_address','street_number','postal_code','city']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
