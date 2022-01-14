<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacion_parametros', function (Blueprint $table) {
            $table->id();//'id_observacion_parametro'

            $table->unsignedBigInteger('observacion_id');
            $table->unsignedBigInteger('parametro_id');

            $table->foreign('observacion_id')->references('id')->on('observacions')->onDelete('cascade');
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
        Schema::dropIfExists('observacion_parametros');
    }
}
