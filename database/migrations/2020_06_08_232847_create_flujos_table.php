<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlujosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujos', function (Blueprint $table) {
            $table->id('id_flujo');
            $table->unsignedBigInteger('cuenta_id');
            $table->string('descripcion');
            $table->float('monto_flujo');
            $table->smallinteger('tipo'); //para saber si es ingreso o egreso
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
        Schema::dropIfExists('flujos');
    }
}
