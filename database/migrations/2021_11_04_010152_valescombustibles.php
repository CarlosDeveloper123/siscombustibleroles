<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Valescombustibles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valescombustibles', function (Blueprint $table) {
           
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->string('numerovale');
            //idvehiculos
            $table->bigInteger('idvehiculos')->unsigned();
            //idconductores
            $table->bigInteger('idconductores')->unsigned();
            //idgrifos
            $table->bigInteger('idgrifos')->unsigned();

            $table->string('fecha');
            $table->integer('kilometraje');
            $table->string('galonaje');
            $table->string('precio');
            $table->string('total');
            

            $table->timestamps();

    

        });

        Schema::table('valescombustibles', function (Blueprint $table) {

            $table->foreign('idvehiculos')->references('id')->on('vehiculos')->onDelete("cascade");
            $table->foreign('idconductores')->references('id')->on('conductores')->onDelete("cascade");
            $table->foreign('idgrifos')->references('id')->on('grifos')->onDelete("cascade");
            
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
