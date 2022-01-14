<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicePlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indice_plagas', function (Blueprint $table) {
            $table->id();//'id_indice_plaga'
            $table->integer('valor');

            $table->unsignedBigInteger('observacion_id');
            $table->unsignedBigInteger('plaga_id');
            $table->unsignedBigInteger('nivel_id')->nullable();

            $table->foreign('observacion_id')->references('id')->on('observacions')->onDelete('cascade');
            $table->foreign('plaga_id')->references('id')->on('plagas')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('set null');

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
        Schema::dropIfExists('indice_plagas');
    }
}
