<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population', function (Blueprint $table) {
            
            $table->bigIncrements('population_id');


            $table->year('year');
            $table->string('value');
            $table->string('sex');
            $table->string('reliability');

           // $table->unsignedBigInteger('country_id');
            
           // $table->foreign('country_id')->references('country_id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
           



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('population');
    }
};
