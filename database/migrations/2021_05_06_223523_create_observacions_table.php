<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Observacion;

class CreateObservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacions', function (Blueprint $table) {
            $table->id();//'id_observacion'
            $table->text('observacion');
            $table->string('lugar');
            $table->string('fecha');
            //$table->string('archivo')->nullable();
            //$table->string('galeria1')->nullable();
            //$table->string('galeria2')->nullable();
            //$table->string('galeria3')->nullable();
            $table->enum('estado', [Observacion::ACTIVO, Observacion::INACTIVO])->default(Observacion::ACTIVO);
            //$table->string('slug');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('muestra_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('muestra_id')->references('id')->on('muestras')->onDelete('cascade');

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
        Schema::dropIfExists('observacions');
    }
}
