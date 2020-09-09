<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->id('id_representante');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('empresa_id');
            $table->string('cargo_representante');
            $table->timestamps();

            $table->foreign('persona_id')->references('id_persona')->on('personas')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id_empresa')->on('empresas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
