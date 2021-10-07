<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function(Blueprint $table){
            $table->id();
            $table->string('nombre', 80);
            $table->string('usuario', 50);
            $table->string('password', 200);
            $table->string('correo', 100)->unique();
            $table->string('hora_entrada', 50);
            $table->string('hora_comida', 50);
            $table->string('hora_comida_regreso', 50);
            $table->string('hora_salida', 50);
            $table->string('fecha', 30);
            $table->text('comentario')->nullable();
            $table->smallInteger('tipo_usuario');
            $table->string('ip');
            $table->unsignedBigInteger('id_grupo');
            $table->foreign('id_grupo')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
