<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grifos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grifos', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->string('razongrifo');
            $table->integer('rucgrifo');
            $table->string('direcciongrifo');
            $table->integer('telefonogrifo');
            $table->string('estadogrifo');

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
