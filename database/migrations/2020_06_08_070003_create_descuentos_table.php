<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos', function (Blueprint $table) {
            $table->id('id_descuento');
            $table->unsignedBigInteger('tipo_id');
            $table->double('multa');
            $table->integer('horas_debe');
            $table->date('fecha'); //dia en que se atrasó o faltó
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
        Schema::dropIfExists('descuentos');
    }
}
