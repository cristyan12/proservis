<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrestador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestador', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nit', 20)->nullable();
            $table->string('cedula', 20)->nullable();
            $table->integer('usuario_tipo')->default(1);
            $table->integer('contrato_id')->default(1);
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('direccion');
            $table->integer('barrio_id')->default(1);
            $table->string('telefono', 20);
            $table->integer('genero_id')->default(1);
            $table->integer('profesion_id')->default(1);
            $table->tinyInteger('estado')->default(1);
            $table->tinyInteger('borrado')->default(0);

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
        Schema::dropIfExists('prestador');
    }
}
