<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
           
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->string('placavehiculo');
            $table->string('tipovehiculo');
            $table->integer('añovehiculo');
            $table->string('marcavehiculo');
            $table->string('empresavehiculo');
            $table->string('estadovechiculo');
            //idtipocombustibles
            $table->bigInteger('idtipocombustibles')->unsigned();
            
            $table->timestamps(false);

            
        });

        Schema::table('vehiculos', function (Blueprint $table) {

            $table->foreign('idtipocombustibles')->references('id')->on('tipocombustibles')->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
