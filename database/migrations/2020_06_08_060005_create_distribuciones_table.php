<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuciones', function (Blueprint $table) {
            $table->id('id_distribucion');
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('empresa_id');
            $table->double('porcentaje');
            $table->double('presupuesto')->nullable();
            $table->unsignedBigInteger('estado_id')->default(1);
            $table->unsignedBigInteger('delivery_id')->nullable();
            $table->timestamps();

            $table->foreign('estado_id')->references('id_estado')->on('estados')->onDelete('cascade');
            $table->foreign('pelicula_id')->references('id_pelicula')->on('peliculas')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id_empresa')->on('empresas')->onDelete('cascade');
            $table->foreign('delivery_id')->references('id_delivery')->on('deliveries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribuciones');
    }
}
