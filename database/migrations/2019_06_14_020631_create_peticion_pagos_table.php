<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticionPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticion_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('referencia_solicitud');
            $table->string('referencia');
            $table->string('documento_usuario');
            $table->string('descripcion');
            $table->string('monto');
            $table->string('moneda');
            $table->string('estado');
            $table->string('entidad_financiera');
            $table->string('tipo_cuenta');
            $table->string('expiration');
            $table->string('codigo_respuesta');
            $table->string('returnUrl');
            $table->string('direccion_IP');
            $table->string('userAgent');
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
        Schema::dropIfExists('peticion_pagos');
    }
}
