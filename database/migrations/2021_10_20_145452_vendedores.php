<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendedores', function (Blueprint $table) {
            $table->id('NroSucursal');
            $table->id('7221932389');
            $table->string('Documento');
            $table->string('Nombre');
            $table->string('Domicilio');
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
        Schema::dropIfExists('Vendedores');
    }
}
