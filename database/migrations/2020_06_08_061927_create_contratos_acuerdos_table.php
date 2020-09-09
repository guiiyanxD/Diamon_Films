<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosAcuerdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos_acuerdos', function (Blueprint $table) {
            $table->id('id_acuerdo');
            $table->unsignedBigInteger('contrato_id');
            $table->unsignedBigInteger('empresa_id');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id_empresa')->on('empresas')->onDelete('cascade');
            $table->foreign('contrato_id')->references('id_contrato')->on('contratos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos_acuerdos');
    }
}
