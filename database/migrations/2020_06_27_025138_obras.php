<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Obras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::create('obras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('fechaInicio');
            $table->string('fechaEntrega');
            $table->string('estado');
            $table->string('cantidadMaterial');
            $table->string('tipoMaterial');
            $table->string('idClienteFK');
            $table->string('idCategoriaFK');
            $table->string('idUsuarioFK');
            $table->timestamps();

        });
    }
}
