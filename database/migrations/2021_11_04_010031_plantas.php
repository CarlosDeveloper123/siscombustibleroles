<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Plantas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->string('nombreplanta');
            $table->string('direccionplanta');
            $table->string('distanciaplanta');
            $table->string('telefonoplanta');
            $table->string('estadoplanta');

            
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
