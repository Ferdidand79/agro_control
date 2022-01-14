<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantaPlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planta_plagas', function (Blueprint $table) {
            $table->id();//'id_planta_plaga'

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
        Schema::dropIfExists('planta_plagas');
    }
}
