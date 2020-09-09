<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas_pagos', function (Blueprint $table) {
            $table->id('id_boleta_pago');
            $table->unsignedBigInteger('boleta_id');
            $table->timestamps();

            $table->foreign('boleta_id')->references('id_boleta')->on('boletas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boleta_pago');
    }
}
