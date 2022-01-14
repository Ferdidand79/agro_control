<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndiceParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indice_parametros', function (Blueprint $table) {
            $table->id();//'id_indice_parametro'
            $table->integer('valor');

            $table->unsignedBigInteger('observacion_id');
            $table->unsignedBigInteger('parametro_id');
            $table->unsignedBigInteger('unidad_id')->nullable();

            $table->foreign('observacion_id')->references('id')->on('observacions')->onDelete('cascade');
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
        Schema::dropIfExists('indice_parametros');
    }
}
