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
        Schema::create('fichacaracterizacions', function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRES_APRENDIZ', 250)->nullable();
            $table->string('GENERO_APRENDIZ', 25)->nullable();
            $table->string('CORREO_APRENDIZ', 100)->nullable();
            $table->string('NUMERO_CONTACTO', 20)->nullable();
            $table->string('FECHA_NACIMIENTO', 20)->nullable();
            $table->string('LUGAR_NACIMIENTO', 100)->nullable();
            $table->string('TIPO_DOCUMENTO', 50)->nullable();
            $table->string('NUMERO_DOCUMENTO', 15)->nullable();
            $table->string('DEPART_RESIDENCIA', 25)->nullable();
            $table->string('MUNI_RESIDENCIA', 25)->nullable();
            $table->string('DIREC_RESIDENCIA', 50)->nullable();
            $table->string('NUM_HERMANOS', 5)->nullable();
            $table->string('ESTADO_CIVIL', 50)->nullable();
            $table->string('HIJOS', 5)->nullable();
            $table->string('NUM_HIJOS', 5)->nullable();
            $table->string('PROGRAMA_FORMACION', 100)->nullable();
            $table->string('FICHA', 20)->nullable();
            $table->string('JORNADA', 100)->nullable();
            $table->string('COORDINACION', 100)->nullable();
            $table->string('NUM_PER_VIVE', 5)->nullable();
            $table->string('Hermano', 10)->nullable();
            $table->string('Padres', 10)->nullable();
            $table->string('Abuelo', 10)->nullable();
            $table->string('Tios', 10)->nullable();
            $table->string('Amigos', 10)->nullable();
            $table->string('Otro_Vive', 50)->nullable();
            $table->string('PER_QUEDEPENDAN', 5)->nullable();
            $table->string('CUANTAS_PER', 5)->nullable();
            $table->string('PADECE_ENFERMEDAD', 5)->nullable();
            $table->string('CUAL_ENFERMEDAD', 50)->nullable();
            $table->string('REQ_MEDICAMENTO', 5)->nullable();
            $table->string('CUAL_MEDICAMENTO', 100)->nullable();
            $table->string('TIENE_DISCAPACIDAD', 5)->nullable();
            $table->string('TIPO_DISCAPACIDAD', 100)->nullable();
            $table->string('ENCUENTRA_POBLACIONES', 50)->nullable();
            $table->string('CLASE_VIVIENDA', 15)->nullable();
            $table->string('ESTRATO_SOCIAL', 10)->nullable();
            $table->string('Acueducto', 15)->nullable();
            $table->string('EnergiaElectrica', 20)->nullable();
            $table->string('SerTelefonico', 20)->nullable();
            $table->string('Gas', 5)->nullable();
            $table->string('Internet', 10)->nullable();
            $table->string('OtroSer', 20)->nullable();
            $table->string('Computador', 15)->nullable();
            $table->string('Tablet', 10)->nullable();
            $table->string('Celular', 10)->nullable();
            $table->string('NingunoTec', 15)->nullable();
            // $table->string('PROFESIONAL_ASIGNADO');
            // $table->string('NODO');
            $table->string('COMO_MOVILIZA', 50)->nullable();
            $table->string('CONFLICTOS', 15)->nullable();
            $table->string('RELACION_CON_FAMILIA', 50)->nullable();
            $table->string('ViolenciaIntrafamiliar', 50)->nullable();
            $table->string('AbusoSexual', 50)->nullable();
            $table->string('Alcoholismo', 50)->nullable();
            $table->string('Drogadiccion', 50)->nullable();
            $table->string('NingunEvento', 50)->nullable();
            $table->string('OtroEvento', 50)->nullable();
            $table->string('Delincuencia', 50)->nullable();
            $table->string('VentaSustancias', 50)->nullable();
            $table->string('PobrezaExtrema', 50)->nullable();
            $table->string('NingunaPro', 50)->nullable();
            $table->string('OtraPro', 10)->nullable();
            $table->string('CUENTA_CON_SISBEN', 50)->nullable();
            $table->string('AFILIACION_SALUD', 50)->nullable();
            $table->string('NOMBRE_EPS', 50)->nullable();
            $table->string('FamiliasAccion', 50)->nullable();
            $table->string('JovenesAccion')->nullable();
            $table->string('IngresoSolidario', 50)->nullable();
            $table->string('ColombiaMayor', 20)->nullable();
            $table->string('OtroPrograma', 20)->nullable();
            $table->string('NingunPrograma', 20)->nullable();
            $table->string('TRABAJA_ACTUALMENTE', 10)->nullable();
            $table->string('TIPO_TRABAJO', 50)->nullable();
            $table->string('RANGO_INGRESOS', 50)->nullable();
            $table->string('CUANTAS_COMIDAS', 50)->nullable();
            $table->string('Deporte', 20)->nullable();
            $table->string('Musica', 20)->nullable();
            $table->string('Danza', 20)->nullable();
            $table->string('Cine_Radio_Tv', 20)->nullable();
            $table->string('caminatas', 20)->nullable();
            $table->string('Dormir', 15)->nullable();
            $table->string('Juegos', 15)->nullable();
            $table->string('Lectura', 15)->nullable();
            $table->string('Otras_Actividades', 50)->nullable();
            $table->string('MedioEscritoFisico', 50)->nullable();
            $table->string('Correo', 10)->nullable();
            $table->string('RedesSociales', 50)->nullable();
            $table->string('Llamadas', 50)->nullable();
            $table->string('LenguajeSeñas', 50)->nullable();
            $table->string('Otra_Comunicacion', 50)->nullable();
            $table->string('Alegre', 20)->nullable();
            $table->string('Sociable', 20)->nullable();
            $table->string('Conflictiva', 20)->nullable();
            $table->string('Depresiva', 20)->nullable();
            $table->string('Introvertida', 20)->nullable();
            $table->string('Extrovertida', 20)->nullable();
            $table->string('Otra_Persona', 20)->nullable();
            $table->string('Grupales', 20)->nullable();
            $table->string('Individuales', 20)->nullable();
            $table->string('AireLibre', 20)->nullable();
            $table->string('EspaciosCerrados', 50)->nullable();
            $table->string('Competitivas', 20)->nullable();
            $table->string('NingunaEspecial', 20)->nullable();
            $table->string('Otra_Actividad', 20)->nullable();
            $table->string('Alcohol', 20)->nullable();
            $table->string('Tabaco', 20)->nullable();
            $table->string('Opiaceos', 20)->nullable();
            $table->string('Anfetaminas', 20)->nullable();
            $table->string('Cocaina', 20)->nullable();
            $table->string('Marihuana', 20)->nullable();
            $table->string('Sedantes', 20)->nullable();
            $table->string('Extasis', 20)->nullable();
            $table->string('Otra_Droga', 20)->nullable();
            $table->string('Noconsume', 20)->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichacaracterizacions');
    }
};
