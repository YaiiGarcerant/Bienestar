<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('remisiones', function (Blueprint $table) {
            $table->id();
            $table->string('NUMERO_DOCUMENTO');
            $table->string('tipo_documento');
            $table->string('NOMBRES_APRENDIZ');
            $table->string('IDENTIFICADOR_FICHA');
            $table->string('NIVEL_FORMACION');
            $table->string('NOMBRE_PROGRAMA_FORMACION');
            $table->string('NOMBRES_INSTRUCTOR');
            $table->string('CORREO_INSTRUCTOR');
            $table->string('NOVEDAD_REMISION');
            $table->string('MOTIVO_REMISION');
            $table->string('DESCRIPCION_MOTIVO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remisiones');
    }
};
