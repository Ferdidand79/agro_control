<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Muestra;

class CreateMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muestras', function (Blueprint $table) {
            $table->id();//'id_muestra'
            $table->string('ubicacion');
            $table->string('fecha');
            $table->enum('estado', [Muestra::ACTIVO, Muestra::INACTIVO])->default(Muestra::ACTIVO);
            //$table->string('slug');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('planta_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('planta_id')->references('id')->on('plantas');

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
        Schema::dropIfExists('muestras');
    }
}
