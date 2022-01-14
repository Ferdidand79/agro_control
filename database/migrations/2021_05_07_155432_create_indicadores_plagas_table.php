<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresPlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores_plagas', function (Blueprint $table) {
            $table->id();//'id_indicadores_plaga'
            $table->integer('v_minimo');
            $table->integer('v_maximo');

            $table->unsignedBigInteger('planta_id');
            $table->unsignedBigInteger('plaga_id');

            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');
            $table->foreign('plaga_id')->references('id')->on('plagas')->onDelete('cascade');

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
        Schema::dropIfExists('indicadores_plagas');
    }
}
