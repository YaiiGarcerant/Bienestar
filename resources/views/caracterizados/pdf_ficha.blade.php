<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Nº{{ $ficha->id }}</title>
</head>

<body>
    <style type="text/css">
        h1,
        h2,
        p {
            font-family: 'Times New Roman', Times, serif
        }
    </style>
    <h1 style="color: #206695">REPORTE FICHA DE CARACTERIZACIÓN Nº{{ $ficha->id }}</h1>
    <hr>
    <h2 style="color: #206695">INFORMACIÓN PERSONAL Y ACADEMICA</h2>
    <p><strong>Nombre Completo: </strong>{{ $ficha->NOMBRES_APRENDIZ }}</p>
    <p><strong>Tipo de documento: </strong>{{ $ficha->TIPO_DOCUMENTO }}</p>
    <p><strong>Numero de documento: </strong>{{ $ficha->NUMERO_DOCUMENTO }}</p>
    <p><strong>Telefono de contacto: </strong>{{ $ficha->NUMERO_CONTACTO }}</p>
    <p><strong>Correo de Contacto: </strong>{{ $ficha->CORREO_APRENDIZ }}</p>
    <p><strong>Genero del aprendiz: </strong>{{ $ficha->GENERO_APRENDIZ }}</p>
    <p><strong>Fecha de nacimiento: </strong>{{ $ficha->FECHA_NACIMIENTO }}</p>
    <p><strong>Lugar de nacimiento: </strong>{{ $ficha->LUGAR_NACIMIENTO }}</p>
    <p><strong>Departamento y municipio donde vive: </strong>{{ $departamento_municipio }}</p>
    <p><strong>Direccion donde vive: </strong>{{ $ficha->DIREC_RESIDENCIA }}</p>
    <p><strong>Numero de ficha: </strong>{{ $ficha->FICHA }}</p>
    <p><strong>Programa de formación: </strong>{{ $ficha->PROGRAMA_FORMACION }}</p>
    <p><strong>Jornada de formación: </strong>{{ $ficha->JORNADA }}</p>
    <p><strong>Coordinacion academica: </strong>{{ $ficha->COORDINACION }}</p>
    <hr>
    <h2 style="color: #206695">INFORMACIÓN FAMILIAR DEL APRENDIZ</h2>
    <p><strong>Cantidad de personas que viven con el aprendiz: </strong>{{ $ficha->NUM_PER_VIVE }}</p>
    <p><strong>Número de Hermanos: </strong>{{ $ficha->NUM_HERMANOS }}</p>
    <p><strong>Estado Civil: </strong>{{ $ficha->ESTADO_CIVIL }}</p>
    <p><strong>Aprendiz tiene hijos?: </strong>{{ $ficha->HIJOS }}</p>
    <p><strong>Cantidad de hijos: </strong>{{ $ficha->NUM_HIJOS }}</p>
    <p><strong>Hay personas que dependad del aprendiz: </strong>{{ $ficha->PER_QUEDEPENDAN }}</p>
    <p><strong>Cantidad de personas: </strong>{{ $ficha->CUANTAS_PER }}</p>
    <hr>
    <h2 style="color: #206695">IINFORMACIÓN SOCIOECONÓMICA DEL APRENDIZ - SECCIÓN 1</h2>
    <p><strong>Poblacion a la que pertenece: </strong>{{ $ficha->ENCUENTRA_POBLACIONES }}</p>
    <p><strong>Clase de Vivienda: </strong>{{ $ficha->CLASE_VIVIENDA }}</p>
    <p><strong>Estrato social: </strong>{{ $ficha->ESTRATO_SOCIAL }}</p>
    <p><strong>Relacion con los miembros de la familia: </strong>{{ $ficha->RELACION_CON_FAMILIA }}</p>
    <p><strong>Metodo para relosver los conflictos: </strong>{{ $ficha->CONFLICTOS }}</p>
    <p><strong>Metodo para movilizarse hasta el centro de formación: </strong>{{ $ficha->COMO_MOVILIZA }}</p>
    <p><strong>Servicios en la vivienda: </strong>
        @if ($ficha->Acueducto == 'Acueducto')
            Acueducto y Alcantarillado,
        @endif
        @if ($ficha->EnergiaElectrica == 'EnergiaElectrica')
            Energia Electrica,
        @endif
        @if ($ficha->SerTelefonico == 'SerTelefonico')
            Servicio Telefonico,
        @endif
        @if ($ficha->Gas == 'Gas')
            Gas Natural,
        @endif
        @if ($ficha->Internet == 'Internet')
            Internet,
        @endif
        @if ($ficha->OtroSer == 'Otro Servicios')
            y otros
        @endif
    </p>
    <p><strong>Problematicas en el sector: </strong>
        @if ($ficha->Delincuencia == 'Delincuencia')
            Delincuencia comun,
        @endif
        @if ($ficha->VentaSustancias == 'VentaSustancias')
            Venta Y/O
            Consumo de Sustancias Psicoactivas,
        @endif
        @if ($ficha->PobrezaExtrema == 'PobrezaExtrema')
            Pobreza extrema,
        @endif
        @if ($ficha->NingunaPro == 'Ninguna Problematica')
            Ninguna.
        @endif
        @if ($ficha->OtraPro == 'Otra Problematica')
            Otra.
        @endif
    </p>
    <p><strong>Eventos en tu hogar: </strong>
        @if ($ficha->ViolenciaIntrafamiliar == 'ViolenciaIntrafamiliar')
            Violencia Intrafamiliar,
        @endif
        @if ($ficha->AbusoSexual == 'AbusoSexual')
            Abuso Sexual,
        @endif
        @if ($ficha->Alcoholismo == 'Alcoholismo')
            Alcoholismo,
        @endif
        @if ($ficha->Drogadiccion == 'Drogadiccion')
            Drogadicción,
        @endif
        @if ($ficha->NingunEvento == 'Ningun Evento')
            Ningun evento.
        @endif
        @if ($ficha->OtroEvento == 'Otro Evento')
            Otras.
        @endif
    </p>
    <p><strong>Herramientas Tecnoloficas: </strong>
        @if ($ficha->Computador == 'Computador')
            Computador,
        @endif
        @if ($ficha->Tablet == 'Tablet')
            Tablet,
        @endif
        @if ($ficha->Celular == 'Celular')
            Celular,
        @endif
        @if ($ficha->NingunoTec == 'Ninguno')
            Ninguno.
        @endif
    </p>
    <hr>
    <h2 style="color: #206695">IINFORMACIÓN SOCIOECONÓMICA DEL APRENDIZ - SECCIÓN 2</h2>
    <p><strong>Programa(s) del gobierno: </strong>
        @if ($ficha->FamiliasAccion == 'Familias en Acción')
            Familia en accion,
        @endif
        @if ($ficha->JovenesAccion == 'Jovenes en Acción')
            Jovenes en accion,
        @endif
        @if ($ficha->IngresoSolidario == 'Ingreso Solidario')
            Ingreso solidario,
        @endif
        @if ($ficha->ColombiaMayor == 'Colombia Mayor')
            Colombia mayor,
        @endif
        @if ($ficha->OtroPrograma == 'Otro Programa')
            Otro.
        @endif
        @if ($ficha->NingunPrograma == 'Ningun Programa')
            Ningun programa.
        @endif
    </p>
    <p><strong>Cantidad de comidas durante el dia: </strong>{{ $ficha->CUANTAS_COMIDAS }}</p>
    <p><strong>Trabaja Actualmente: </strong>{{ $ficha->TRABAJA_ACTUALMENTE }}</p>
    <p><strong>Tipo de trabajo: </strong>{{ $ficha->TIPO_TRABAJO }}</p>
    <p><strong>Total de ingresos segun el salario mensual actual ($1.300.606): </strong>{{ $ficha->RANGO_INGRESOS }}
    </p>
    <p><strong>Actividades en las que se ocupa su tiempo libre: </strong>
        @if ($ficha->Deporte == 'Deporte')
            Deporte,
        @endif
        @if ($ficha->Musica == 'Musica')
            Musica,
        @endif
        @if ($ficha->Danza == 'Danza')
            Danza,
        @endif
        @if ($ficha->Cine_Radio_Tv == 'Cine - Radio - Tv')
            Cine, radio y Tv,
        @endif
        @if ($ficha->caminatas == 'Caminatas')
            Caminatas,
        @endif
        @if ($ficha->Dormir == 'Dormir')
            Dormir,
        @endif
        @if ($ficha->Juegos == 'Juegos')
            Juegos,
        @endif
        @if ($ficha->Lectura == 'Lectura')
            Lectura,
        @endif
        @if ($ficha->Otras_Actividades == 'Otras Actividades')
            Otras.
        @endif
    </p>
    <p><strong>Medios para comunicarse con los demas: </strong>
        @if ($ficha->MedioEscritoFisico == 'Medio Escrito Fisico')
            Medio Escrito Fisico,
        @endif
        @if ($ficha->Correo == 'Correo')
            Correo electronico,
        @endif
        @if ($ficha->RedesSociales == 'Redes Sociales')
            Redes sociales,
        @endif
        @if ($ficha->Llamadas == 'Llamadas')
            Llamadas,
        @endif
        @if ($ficha->LenguajeSeñas == 'Lenguaje Señas')
            Lenguaje de señas,
        @endif
        @if ($ficha->Otra_Comunicacion == 'Otra Comunicación')
            Otra forma.
        @endif
    </p>
    <p><strong>Sustancias psicoactivas que consume: </strong>
        @if ($ficha->Alcohol == 'Alcohol')
            Alcohol,
        @endif
        @if ($ficha->Tabaco == 'Tabaco')
            Tabaco,
        @endif
        @if ($ficha->Opiaceos == 'Opiaceos')
            Opiaceos,
        @endif
        @if ($ficha->Anfetaminas == 'Anfetaminas')
            Anfetaminas,
        @endif
        @if ($ficha->Cocaina == 'Cocaina')
            Cocaina
        @endif
        @if ($ficha->Marihuana == 'Marihuana')
            Marihuana
        @endif
        @if ($ficha->Sedantes == 'Sedantes')
            Sedantes
        @endif
        @if ($ficha->Extasis == 'Extasis')
            Extasis
        @endif
        @if ($ficha->Otra_Droga == 'Otra Droga')
            Otras.
        @endif
        @if ($ficha->Noconsume == 'No consume')
            No Consume Sustancias Psicoactivas.
        @endif
    </p>
    <p><strong>Le gustan las actividades:</strong>
    @if ($ficha->Grupales == 'Grupales')
        Grupales,
    @endif
    @if ($ficha->Individuales == 'Individuales')
        Individuales
    @endif
    @if ($ficha->AireLibre == 'Aire Libre')
        Al aire libre,
    @endif
    @if ($ficha->EspaciosCerrados == 'Espacios Cerrados')
        Espacios cerrados,
    @endif
    @if ($ficha->Competitivas == 'Competitivas')
        Competitivas
    @endif
    @if ($ficha->NingunaEspecial == 'Ninguna Especial')
        Ninguna en especial.
    @endif
    @if ($ficha->Otra_Actividad == 'Otra Actividad')
        Otras.
    @endif
    </p>
    <p><strong>El aprendiz se considera una persona:</strong>
    @if ($ficha->Alegre == 'Alegre')
        Alegre,
    @endif
    @if ($ficha->Sociable == 'Sociable')
        Sociable,
    @endif
    @if ($ficha->Conflictiva == 'Conflictiva')
        Conflictiva,
    @endif
    @if ($ficha->Depresiva == 'Depresiva')
        Depresiva,
    @endif
    @if ($ficha->Introvertida == 'Introvertida')
        Introvertida,
    @endif
    @if ($ficha->Extrovertida == 'Extrovertida')
        Extrovertida,
    @endif
    @if ($ficha->Otra_Persona == 'Otra Personalidad')
        Otra.
    @endif
    </p>
</body>

</html>
