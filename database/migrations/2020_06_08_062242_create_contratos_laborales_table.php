<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos_laborales', function (Blueprint $table) {
            $table->id('id_laboral');
            $table->unsignedBigInteger('contrato_id');
            $table->unsignedBigInteger('admin_id');
            $table->integer('sueldo');
            $table->timestamps();

            $table->foreign('admin_id')->references('id_admin')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('contratos_laborales');
    }
}
