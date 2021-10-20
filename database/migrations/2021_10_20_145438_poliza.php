<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poliza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Poliza', function (Blueprint $table) {
            $table->id('NroPoliza');
            $table->string('Patente');
            $table->string('Vendedor');
            $table->string('FechaInicio');
            $table->string('Duracion');
            $table->string('Tipo');
            $table->rememberToken();
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
        Schema::dropIfExists('Poliza');
    }
}
