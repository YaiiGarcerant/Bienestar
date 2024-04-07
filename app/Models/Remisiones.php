<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remisiones extends Model
{
    use HasFactory;
    protected $fillable = [
        'NUMERO_DOCUMENTO',
        'tipo_documento',
        'NOMBRES_APRENDIZ',
        'IDENTIFICADOR_FICHA',
        'NIVEL_FORMACION',
        'NOMBRE_PROGRAMA_FORMACION',
        'NOMBRES_INSTRUCTOR',
        'CORREO_INSTRUCTOR',
        'NOVEDAD_REMISION',
        'MOTIVO_REMISION',
        'DESCRIPCION_MOTIVO',
    ];
}
