<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Conductores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
           
            $table->string('nombreconductor');
            $table->string('apellidoconductor');
            $table->integer('dniconductor');
            $table->string('licenciaconductor');
            $table->string('categoriaconductor');
            $table->integer('telefonoconductor');
            $table->string('direccionconductor');
            $table->string('emailconductor');
            $table->string('estadoconductor');
            
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
        //
    }
}
