<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llaves', function (Blueprint $table) {
            $table->id('id_llave');
            $table->string('descripcion');
            $table->date('fecha');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('pelicula_id');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id_empresa')->on('empresas')->onDelete('cascade');
            $table->foreign('pelicula_id')->references('id_pelicula')->on('peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llaves');
    }
}
