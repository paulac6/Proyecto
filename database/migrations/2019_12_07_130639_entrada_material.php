<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntradaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('entrada_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cantidadMaterial');
            $table->string('estado');
            $table->string('observacion');
            $table->string('idMaterialFK');
            $table->string('idEntradaFK');
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
