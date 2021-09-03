<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SalidaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('salida_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->string('cantidadMaterial');
            $table->string('idMaterialFK');
            $table->string('idSalidaFK');
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
