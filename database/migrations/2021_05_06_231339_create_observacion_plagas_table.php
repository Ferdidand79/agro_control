<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservacionPlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacion_plagas', function (Blueprint $table) {
            $table->id();//'id_observacion_plaga'

            $table->unsignedBigInteger('observacion_id');
            $table->unsignedBigInteger('plaga_id');

            $table->foreign('observacion_id')->references('id')->on('observacions')->onDelete('cascade');
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
        Schema::dropIfExists('observacion_plagas');
    }
}
