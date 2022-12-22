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
        Schema::create('countries', function (Blueprint $table) {
            
            $table->bigIncrements('country_id');
            
            $table->string('name');
            $table->string('capital');
            $table->string('currency');
            $table->string('flag');
            $table->string('code');
            $table->string('iso2');//codes
            $table->string('iso3');//codes
            $table->string('long');//location
            $table->string('lat');//location


            $table->unsignedBigInteger('state_id');
            
            $table->foreign('state_id')->references('state_id')->on('states')->onDelete('cascade')->onUpdate('cascade');
           

            $table->unsignedBigInteger('city_id');
            
            $table->foreign('city_id')->references('city_id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
           

            
            $table->unsignedBigInteger('population_id');
            
            $table->foreign('population_id')->references('population_id')->on('population')->onDelete('cascade')->onUpdate('cascade');
           

           

            






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
        Schema::dropIfExists('countries');
    }
};
