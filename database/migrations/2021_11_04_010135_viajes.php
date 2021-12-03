<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Viajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->string('lugarsalida');
            $table->string('lugardestino');
            //idplantas
            $table->bigInteger('idplantas')->unsigned();

            $table->string('cantidadviaje');
            //idvehiculos-quiza salga error
            $table->bigInteger('idvehiculos')->unsigned();
            //idconductores
            $table->bigInteger('idconductores')->unsigned();

            $table->timestamps();

           
        });

        Schema::table('viajes', function (Blueprint $table) {
            
            $table->foreign('idplantas')->references('id')->on('plantas')->onDelete("cascade");
           
            $table->foreign('idconductores')->references('id')->on('conductores')->onDelete("cascade");

            $table->foreign('idvehiculos')->references('id')->on('vehiculos')->onDelete("cascade");
            
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
