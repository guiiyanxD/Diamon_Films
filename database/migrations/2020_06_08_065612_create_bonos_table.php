<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonos', function (Blueprint $table) {
            $table->id('id_bono');
            $table->unsignedBigInteger('tipo_id');
            $table->double('bonificacion');
            $table->integer('horas_extra');
            $table->date('fecha'); //dia en que se hicieron las horas extras
            $table->timestamps();

            $table->foreign('tipo_id')->references('id_tipo')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bonos');
    }
}
