<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas_compras', function (Blueprint $table) {
            $table->id('id_boleta_compra');
            $table->unsignedBigInteger('boleta_id');
            $table->timestamps();

            $table->foreign('boleta_id')->references('id_boleta')->on('boletas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boleta_compra');
    }
}
