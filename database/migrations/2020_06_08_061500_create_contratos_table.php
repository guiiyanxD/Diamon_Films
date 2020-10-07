<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('id_contrato');
            $table->unsignedBigInteger('admin_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('tipo');
            $table->unsignedBigInteger('estado_id')->default(1);
            $table->timestamps();

            $table->foreign('estado_id')->references('id_estado')->on('estados')->onDelete('cascade');
            $table->foreign('admin_id')->references('id_admin')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
