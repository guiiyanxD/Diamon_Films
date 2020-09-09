<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id('id_pelicula');
            $table->timestamps();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('admin_id');
            $table->string('nombre');
            $table->string('clasificacion');
            $table->string('formato');
            $table->string('protagonista');
            $table->string('sello_cinematografico');
            $table->string('idioma');
            $table->string('genero');


            $table->foreign('admin_id')->references('id_admin')->on('users')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
