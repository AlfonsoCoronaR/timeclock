<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->time('entrada')->nullable();
            $table->time('comida')->nullable();
            $table->time('comida_regreso')->nullable();
            $table->time('salida')->nullable();
            $table->date('vacaciones')->nullable();
            $table->date('fin_vacaciones')->nullable();
            $table->date('enfermedad')->nullable();
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('registros');
    }
}
