<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores_parametros', function (Blueprint $table) {
            $table->id();//'id_indicadores_parametro'
            $table->integer('v_minimo');
            $table->integer('v_maximo');

            $table->unsignedBigInteger('planta_id');
            $table->unsignedBigInteger('parametro_id');
            $table->unsignedBigInteger('unidad_id')->nullable();

            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');
            $table->foreign('parametro_id')->references('id')->on('parametros')->onDelete('cascade');
            $table->foreign('unidad_id')->references('id')->on('unidads')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicadores_parametros');
    }
}
