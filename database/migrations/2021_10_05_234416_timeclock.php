<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Timeclock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeclock', function(Blueprint $table){
            $table->id();
            $table->string('nombre', 80);
            $table->string('hora_entrada', 50);
            $table->string('hora_comida', 50);
            $table->string('hora_comida_regreso', 50);
            $table->string('hora_salida', 50);
            $table->string('fecha', 30);
            $table->text('comentario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeclock');
    }
}
