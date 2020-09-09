<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('id_delivery');
            $table->string('descripcion');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id_empresa')->on('empresas')->onDelete('cascade');
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
        Schema::dropIfExists('deliveries');
    }
}
