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
        Schema::create('p04s', function (Blueprint $table) {
            $table->id();
            $table->string('REGIONAL');
            $table->string('NOMBRE_CENTRO');
            $table->string('NUM_FICHA');
            $table->string('ESTADO_PROGRAMA');
            $table->string('NIVEL_FORMACION');
            $table->string('TIPO_JORNADA');
            $table->string('FECHA_INICIO_FICHA');
            $table->string('FECHA_TERMINACION_FICHA');
            $table->string('ETAPA_FICHA');
            $table->string('MODALIDAD_FORMACION');
            $table->string('PROFESIONAL_ASIGNADO');
            $table->string('IDENTIFICACION_EMPRESA');
            $table->string('TIPOID_EMPRESA');
            $table->string('NOMBRE_EMPRESA');
            $table->string('SECTOR_PROGRAMA');
            $table->string('PROGRAMA_FORMACION');
            $table->string('DEPARTAMENTO_PROGRAMA');
            $table->string('MUNICIPIO_PROGRAMA');
            $table->string('TOTAL_APRENDICES_MASCULINOS');
            $table->string('TOTAL_APRENDICES_FEMENINOS');
            $table->string('TOTAL_APRENDICES');
            $table->string('TOTAL_APRENDICES_ACTIVOS');
            $table->string('NODO_SEDE');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p04s');
    }
};
