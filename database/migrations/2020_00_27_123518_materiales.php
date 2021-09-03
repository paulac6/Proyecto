<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materiales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materiales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peso');
            $table->string('tamaño');
            $table->string('cantidad');
            $table->string('estado');
            $table->string('idTipoFK');
            $table->string('idMarcaFK');
            $table->string('idProveedorFK');
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
