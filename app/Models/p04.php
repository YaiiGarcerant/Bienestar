<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class p04 extends Model
{
    use HasFactory;
    protected $fillable = [
        'REGIONAL',
        'NOMBRE_CENTRO',
        'NUM_FICHA',
        'ESTADO_PROGRAMA',
        'NIVEL_FORMACION',
        'TIPO_JORNADA',
        'FECHA_INICIO_FICHA',
        'FECHA_TERMINACION_FICHA',
        'ETAPA_FICHA',
        'MODALIDAD_FORMACION',
        'PROFESIONAL_ASIGNADO',
        'IDENTIFICACION_EMPRESA',
        'TIPOID_EMPRESA',
        'NOMBRE_EMPRESA',
        'SECTOR_PROGRAMA',
        'PROGRAMA_FORMACION',
        'DEPARTAMENTO_PROGRAMA',
        'MUNICIPIO_PROGRAMA',
        'TOTAL_APRENDICES_MASCULINOS',
        'TOTAL_APRENDICES_FEMENINOS',
        'TOTAL_APRENDICES',
        'TOTAL_APRENDICES_ACTIVOS',
        'NODO_SEDE',
];
}
