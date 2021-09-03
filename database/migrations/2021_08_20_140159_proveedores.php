<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipodoc');
            $table->string('numerodoc');
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
