<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehiculos', function (Blueprint $table) {
            $table->id('NroMotor');
            $table->string('Patente');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('DocumentoDueño');
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
        Schema::dropIfExists('Vehiculos');
    }
}
