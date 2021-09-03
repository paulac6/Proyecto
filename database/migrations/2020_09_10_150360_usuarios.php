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
        //
        Schema::create('usuarios',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('idRol');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('clave');
            $table->string('telcelular');
            $table->string('correo');
            $table->string('estado');
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
        //
    }
}
