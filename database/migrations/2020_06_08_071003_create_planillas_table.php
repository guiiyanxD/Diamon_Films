<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planillas', function (Blueprint $table) {
            $table->id('id_planilla');
            $table->unsignedBigInteger('contrato_laboral_id');
            $table->double('sueldo_base');
            $table->double('sueldo_liquido');
            $table->unsignedBigInteger('bono_id');
            $table->unsignedBigInteger('descuento_id');
            $table->double('aporte_AFP');
            $table->time('hora_entrada');
            $table->time('hora_salida');
            $table->timestamps();

            $table->foreign('contrato_laboral_id')->references('id_laboral')->on('contratos_laborales')->onDelete('cascade');
            $table->foreign('bono_id')->references('id_bono')->on('bonos')->onDelete('cascade');
            $table->foreign('descuento_id')->references('id_descuento')->on('descuentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planillas');
    }
}
