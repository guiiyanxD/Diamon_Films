<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id('id_boleta');
            $table->unsignedBigInteger('cuenta_id');
            $table->string('concepto');
            $table->string('descripcion');
            $table->dateTime('fecha');
            $table->double('monto');
            $table->integer('tipo');
            $table->timestamps();

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
        Schema::dropIfExists('boletas');
    }
}
