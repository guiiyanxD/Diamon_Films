<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('id_factura');
            $table->unsignedBigInteger('distribucion_id');
            $table->unsignedBigInteger('cuenta_id');
            $table->string('concepto');
            $table->string('descripcion');
            $table->double('monto')->nullable();
            $table->double('iva_factura')->nullable();
            $table->double('it')->nullable();
            $table->dateTime('fecha');
            $table->timestamps();

            $table->foreign('distribucion_id')->references('id_distribucion')->on('distribuciones')->onDelete('cascade');
            $table->foreign('cuenta_id')->references('id_cuenta')->on('cuentas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
