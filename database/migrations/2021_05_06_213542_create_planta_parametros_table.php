<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantaParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planta_parametros', function (Blueprint $table) {
            $table->id();//'id_planta_parametro'

            $table->unsignedBigInteger('planta_id');
            $table->unsignedBigInteger('parametro_id');

            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');
            $table->foreign('parametro_id')->references('id')->on('parametros')->onDelete('cascade');

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
        Schema::dropIfExists('planta_parametros');
    }
}
