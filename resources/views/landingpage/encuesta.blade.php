<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienestar al Aprendiz Sena</title>

    <meta content="Portal oficial de bienestar al aprendiz Sena del Centro
    Nacional Colombo Alemán, podrá observar las diferentes actividades que
    se han realizado y podrá realizar la encuesta psicosocial." name="description">

    <meta content="Sena, Centro Nacional Colombo Aleman, Bienestar, Aprendiz Sena" name="keywords">

    <!-- Favicons -->
    <link href="{!! asset('img/sena_logo.svg') !!}" rel="icon">

    <!-- Vendor CSS Files -->
    <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: #39A900">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="encuesta logo">
                <h1><a href="#">Encuesta Psicosocial Bienestar Sena CNCA</a></h1>
            </div>
        </div>
    </header><!-- End Header -->

    <main class="container my-5 px-3">
        <section class="form-encuesta row justify-content-center">
            <div class="card col-lg-11 col-xxl-10 border-0 rounded-4 mb-3 shadow">
                <div class="card-body p-4">

                    <h3 class="card-title mt-2" style="color: #39A900">{{$ficha->NUM_FICHA}} - {{$ficha->NIVEL_FORMACION}} EN {{$ficha->PROGRAMA_FORMACION}}</h3>
                    <p class="card-text text-secondary fw-medium fs-5 mb-0">
                        En Bienestar al Aprendiz te invitamos ha realizar la siguiente encuesta psicosocial, todos los campos con el siguiente icono <i class="bi bi-exclamation-lg text-danger"></i> son importantes y requeridos.
                    </p>

                    <div class="tab-content" id="nav-tabContent">

                        <form action="{{ route('enviarEncuesta') }}" method="post" enctype="multipart/form-data" id="encuestaPsicosocial">
                            @csrf
                            <article id="informacionPersonal" class="px-md-3 d-block">
                                <nav class="py-4">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active mb-0 bg-light" aria-current="page" href="#informacionPersonal">Información Personal y Académica</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="row">
                                    <div class="form-group col-md-4 mb-4">
                                        <label for="nombre" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Nombre Completo:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value" name="NOMBRES_APRENDIZ" id="nombre" placeholder="Ingresa tu nombre completo" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="tipoDocumento" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Tipo de Documento:</label>
                                        <select  class="form-select border border-2 shadow-sm get-value" id="tipoDocumento" name="TIPO_DOCUMENTO" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Cedula Ciudadania"> Cedula de Ciudadanía </option>
                                            <option value="Cedula Extranjeria"> Cedula de Extranjería </option>
                                            <option value="Tarjeta Identidad"> Tarjeta de Identidad </option>
                                            <option value="Pasaporte"> Pasaporte </option>
                                            <option value="Identificacion Personal"> Número de Identificación Personal </option>
                                            <option value="Identificacion Tributaria"> Número de Identificación Tributaría </option>
                                            <option value="Permiso de Protección Personal"> Permiso de Protección Personal </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="tipoDocumentoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroDocumento" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Número Documento:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUMERO_DOCUMENTO" id="numeroDocumento" placeholder="Ingresa tu número de documento" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroDocumentoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4 mb-4">
                                        <label for="genero" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Genero:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="genero" name="GENERO_APRENDIZ" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Masculino"> Masculino </option>
                                            <option value="Femenino"> Femenino </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="generoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="fechaNacimiento" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Fecha de Nacimiento:</label>
                                        <input type="date" class="form-control border border-2 shadow-sm get-value" name="FECHA_NACIMIENTO" id="fechaNacimiento" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="fechaNacimientoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="lugarNacimiento" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Lugar de Nacimiento:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value" name="LUGAR_NACIMIENTO" id="lugarNacimiento" placeholder="Ingresa tu lugar de nacimiento" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="lugarNacimientoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroContacto" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Número de Contacto:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUMERO_CONTACTO" id="numeroContacto" placeholder="Ingresa tu número de contacto" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroContactoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="correo" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Correo Electrónico:</label>
                                        <input type="email" class="form-control border border-2 shadow-sm get-value" name="CORREO_APRENDIZ" id="correo" placeholder="Ingresa tu corro personal o SENA" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="correoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="listaDepartamentos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Departamento Donde Vive:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" name="DEPART_RESIDENCIA" id="listaDepartamentos" required>
                                            <option selected disabled value=""> Selecciona.. </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="listaDepartamentosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="listaMunicipios" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Municipio Donde Vive:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" name="MUNI_RESIDENCIA" id="listaMunicipios" required>
                                             <option selected disabled value=""> Selecciona.. </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="listaMunicipiosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="direccion" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Dirección de Residencia:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value" name="DIREC_RESIDENCIA" id="direccion" placeholder="Ingresa la dirección de tu casa" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="direccionAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="programa" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Programa de Formación:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value" value="{{ $ficha->PROGRAMA_FORMACION }}" id="programa" name="PROGRAMA_FORMACION" placeholder="Ingrese el programa de formación" readonly>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="programaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>


                                <div class="row justify-content-center">


                                    <div class="form-group col-md-4 mb-4">
                                        <label for="ficha" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Número de ficha:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm" value="{{ $ficha->NUM_FICHA }}" id="ficha" name="FICHA" placeholder="Ingrese el programa de formación" readonly>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="fichaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="jornada" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Jornada de Formación:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm" value="{{ $ficha->TIPO_JORNADA }}" id="jornada" name="JORNADA" placeholder="Ingrese el programa de formación" readonly>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="jornadaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="coordinacion" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Coordinación Académica:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm" value="{{ $ficha->NODO_SEDE }}" id="coordinacion" name="COORDINACION" placeholder="Ingrese el programa de formación" readonly>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="coordinacionAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="col-12 text-end mb-2">
                                        <a href="#" class="btn fs-5 btn-primary shadow" onClick="pagination('informacionPersonal', 'informacionFamiliar')">Siguiente <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>

                            </article>

                            <article id="informacionFamiliar" class="px-md-3 d-none">
                                <nav class="py-4">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active mb-0 bg-light" aria-current="page" href="#informacionFamiliar">Información Familiar</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroPersonasVive" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Con cuantás personas vives?</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUM_PER_VIVE" id="numeroPersonasVive" placeholder="Ingrsa el número de personas" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroPersonasViveAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-8 mb-4 group-check" id="parentesco">
                                        <label class="form-label fw-semibold d-block pb-2"><i class="bi bi-exclamation-lg text-danger"></i>Parentesco con las personas que viven contigo?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="padres" name="Padres" value="Padres">
                                            <label class="form-check-label" for="padres">Padres</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="hermano" name="Hermano" value="Hermano">
                                            <label class="form-check-label" for="hermano">Hermanos</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="abuelo" name="Abuelo" value="Abuelo">
                                            <label class="form-check-label" for="abuelo">Abuelos</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="tios" name="Tios" value="Tíos">
                                            <label class="form-check-label" for="tios">Tíos</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="amigos" name="Amigos" value="Amigos">
                                            <label class="form-check-label" for="amigos">Amigos</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" id="otrosVive" name="Otro_Vive" value="Otros">
                                            <label class="form-check-label" for="otrosVive">Otros</label>
                                        </div>

                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="parentescoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>

                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="numeroHermanos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Número de Hermanos:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUM_HERMANOS" id="numeroHermanos" placeholder="Ingresa la cantidad de hermanos" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroHermanosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                    <label for="estadoCivil" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Estado Civil:</label>
                                        <select class="form-select form-control border border-2 shadow-sm get-value" id="estadoCivil" name="ESTADO_CIVIL" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Casado"> Casado </option>
                                            <option value="Separado/divorciado"> Separado / Divorciado </option>
                                            <option value="Soltero"> Soltero </option>
                                            <option value="Union libre"> Union libre </option>
                                            <option value="Viudo"> Viudo </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="estadoCivilAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="hijos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Tienes Hijos?</label>
                                        <select class="form-select form-control border border-2 shadow-sm get-value" id="hijos" name="HIJOS" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="hijosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="cantidadHijos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuántos Hijos?</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUM_HIJOS" id="cantidadHijos" placeholder="Ingresa la cantidad de hijos" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cantidadHijosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center col-md-12">

                                    <p class="fs-5 text-secondary mb-1"><i class="bi bi-exclamation-lg text-danger"></i>Tiene personas que dependan económicamente de usted?</p>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="personasDependenEco" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Seleccione una respuesta:</label>
                                        <select class="form-select form-control border border-2 shadow-sm get-value" id="personasDependenEco" name="PER_QUEDEPENDAN" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="personasDependenEcoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="cantPersonasDependenEco" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuántas personas?</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value" name="CUANTAS_PER" id="cantPersonasDependenEco" placeholder="Ingresa la cantidad de personas" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cantPersonasDependenEcoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <a href="#" class="btn fs-5 btn-secondary shadow" onClick="paginationOld('informacionFamiliar','informacionPersonal')"><i class="bi bi-arrow-left"></i> Anterior</a>
                                    <a href="#" class="btn fs-5 btn-primary shadow" onClick="pagination('informacionFamiliar', 'informacionMedica')">Siguiente <i class="bi bi-arrow-right"></i></a>
                                </div>

                            </article>

                            <article id="informacionMedica" class="px-md-3 d-none">
                                <nav class="py-4">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active mb-0 bg-light" aria-current="page" href="#informacionMedica">Información Medica</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="sisben" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuenta con Sisben?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="sisben" name="CUENTA_CON_SISBEN" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="SI" id="SISBEN"> Si </option>
                                            <option value="NO" id="SISBEN"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="sisbenAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="regimenAfiliacion" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Regimen de Afiliacion a Salud:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="regimenAfiliacion" name="AFILIACION_SALUD" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Contributivo"> Contributivo </option>
                                            <option value="Subsidiado"> Subsidiado </option>
                                            <option value="Ninguno_Afi"> Ninguno </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="regimenAfiliacionAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-5 mb-4">
                                        <label for="nombreEPS" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>EPS a la que se Encuentra Afliado:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value" name="NOMBRE_EPS" id="nombreEPS" placeholder="Ingrese el nombre de la EPS" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreEPSAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <p class="fs-5 text-secondary mb-1"><i class="bi bi-exclamation-lg text-danger"></i>Padece de alguna enfermedad que requiera cuidados medicos especiales?</p>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="padeceEnfermedad" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Seleccione una Respuesta:</label>
                                        <select class="form-select form-control border border-2 shadow-sm get-value" id="padeceEnfermedad" name="PADECE_ENFERMEDAD" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="padeceEnfermedadAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="cualEnfermedad" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuál Enfermedad?</label>
                                        <input class="form-control form-control border border-2 shadow-sm get-value" type="text" id="cualEnfermedad" name="CUAL_ENFERMEDAD" placeholder="Ingresa el nombre de la enfermedad" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cualEnfermedadAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <p class="fs-5 text-secondary mb-1"><i class="bi bi-exclamation-lg text-danger"></i>Usted requiere de algún medicamento permanente?</p>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="medicamentoPermanente" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Seleccione una Respuesta:</label>
                                        <select class="form-select form-control border border-2 shadow-sm get-value" id="medicamentoPermanente" name="REQ_MEDICAMENTO" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="medicamentoPermanenteAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="cualMedicamento" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuál Medicamento?</label>
                                        <input class="form-control form-control border border-2 shadow-sm get-value" type="text" id="cualMedicamento" name="CUAL_MEDICAMENTO" placeholder="Ingresa el nombre del medicamento" required>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cualMedicamentoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <p class="fs-5 text-secondary mb-1"><i class="bi bi-exclamation-lg text-danger"></i>Usted se encuentra en condición de discapacidad?</p>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="discapacidad" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Seleccione una respuesta:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="discapacidad" name="TIENE_DISCAPACIDAD" required>
                                            <option selected disabled value=""> Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="discapacidadAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <label for="tipoDiscapacidad" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Tipo de Discapacidad:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="tipoDiscapacidad" name="TIPO_DISCAPACIDAD" required>
                                            <option selected disabled value="">seleccione.. </option>
                                            <option value="Visual"> Visual </option>
                                            <option value="Auditiva"> Auditiva </option>
                                            <option value="Sordo/Ceguera"> Sordo - Ceguera </option>
                                            <option value="Fisica"> Fisica </option>
                                            <option value="Cognitiva"> Cognitiva </option>
                                            <option value="Psicosocial"> Psicosocial </option>
                                            <option value="Multiple"> Multiple </option>
                                            <option value="No Aplica"> No Aplica </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="tipoDiscapacidadAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between mb-2">
                                        <a href="#" class="btn fs-5 btn-secondary shadow" onClick="paginationOld('informacionMedica', 'informacionFamiliar')"><i class="bi bi-arrow-left"></i> Anterior</a>
                                        <a href="#" class="btn fs-5 btn-primary shadow" onClick="pagination('informacionMedica', 'informacionSocioeconomicaI')">Siguiente <i class="bi bi-arrow-right"></i></a>
                                    </div>

                                </div>

                            </article>

                            <article id="informacionSocioeconomicaI" class="px-md-3 d-none">
                                <nav class="py-4">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active mb-0 bg-light" aria-current="page" href="#informacionSocioeconomicaI">Información Socioeconómica Sección-1</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-5 mb-4">
                                        <label for="poblaciones" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Pertenece a algúna de estas poblaciones?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="poblaciones" name="ENCUENTRA_POBLACIONES" required>
                                            <option selected disabled value="">Seleccione</option>
                                            <option value="Comunidad LGBTI"> Comunidad LGBTI </option>
                                            <option value="Indigenas"> Indigenas </option>
                                            <option value="Jovenes Vulnerables"> Jovenes Vulnerables </option>
                                            <option value="Adolescentes-Conflicto"> Adolescentes en conflicto con la Ley </option>
                                            <option value="Mujer Cabeza Hogar"> Mujer Cabeza de Hogar </option>
                                            <option value="Poblacion Afro"> Poblacion Afro </option>
                                            <option value="Raizales"> Raizales </option>
                                            <option value="Palenquera"> Palenquera </option>
                                            <option value="Otra Poblacion"> Otras </option>
                                            <option value="Ninguna Poblacion"> Ninguna </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="poblacionesAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="claseVivienda"class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Clase de Vivienda:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="claseVivienda" name="CLASE_VIVIENDA" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Urbana"> Urbana </option>
                                            <option value="Rural"> Rural </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="claseViviendaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="estratoSocial"class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Estrato Social:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="estratoSocial" name="ESTRATO_SOCIAL" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Estrato 1"> 1 </option>
                                            <option value="Estrato 2"> 2 </option>
                                            <option value="Estrato 3"> 3 </option>
                                            <option value="Estrato 4"> 4 </option>
                                            <option value="Estrato 5"> 5 </option>
                                            <option value="Estrato 6"> 6 </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="estratoSocialAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group group-check col-12 mb-4" id="serviciosPublicos">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuenta con algúno de los siguientes servicios en su vivienda?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Acueducto" id="Acueducto" value="Acueducto">
                                            <label class="form-check-label" for="Acueducto">Acueducto y Alcantarillado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="EnergiaElectrica" id="EnergiaElectrica"
                                                value="EnergiaElectrica">
                                            <label class="form-check-label" for="EnergiaElectrica">Energía Eléctrica</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="SerTelefonico" id="SerTelefonico"
                                                value="SerTelefonico">
                                            <label class="form-check-label" for="SerTelefonico">Servicio Telefónico</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Gas" id="Gas" value="Gas">
                                            <label class="form-check-label" for="Gas">Gas Natural</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Internet" id="Internet" value="Internet">
                                            <label class="form-check-label" for="Internet">Internet</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="OtroSer"id="OtroSer" value="Otro Servicios">
                                            <label class="form-check-label" for="OtroSer">Otros</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="serviciosPublicosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                    <div class="form-group group-check col-12 mb-4" id="problematicaVivienda">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuál de las siguientes problematicas afectan el sector donde vive?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Delincuencia" id="Delincuencia" value="Delincuencia">
                                            <label class="form-check-label" for="Delincuencia">Delincuencia Común</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="VentaSustancias" id="VentaSustancias" value="VentaSustancias">
                                            <label class="form-check-label" for="VentaSustancias">Venta Y/O Consumo de Sustancias Psicoactivas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="PobrezaExtrema" id="PobrezaExtrema" value="PobrezaExtrema">
                                            <label class="form-check-label" for="PobrezaExtrema">Pobreza Extrema</label>
                                        </div><div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="OtraPro" id="OtraPro" value="Otra Problematica">
                                            <label class="form-check-label" for="OtraPro">Otras</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="NingunaPro" id="NingunaPro" value="Ninguna Problematica">
                                            <label class="form-check-label" for="NingunaPro">Ninguna</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="problematicaViviendaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                    <div class="form-group group-check col-12 mb-4" id="eventosFamiliares">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuáles de los siguientes eventos se han apresentado en tu hogar?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="ViolenciaIntrafamiliar" id="ViolenciaIntrafamiliar" value="ViolenciaIntrafamiliar">
                                            <label class="form-check-label" for="ViolenciaIntrafamiliar">Violencia Intrafamiliar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="AbusoSexual" id="AbusoSexual" value="AbusoSexual">
                                            <label class="form-check-label" for="AbusoSexual">Abuso Sexual</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Alcoholismo" id="Alcoholismo" value="Alcoholismo">
                                            <label class="form-check-label" for="Alcoholismo">Alcoholismo</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Drogadiccion" id="Drogadiccion" value="Drogadiccion">
                                            <label class="form-check-label" for="Drogadiccion">Drogadicción</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="OtroEvento" id="OtroEvento" value="Otro Evento">
                                            <label class="form-check-label" for="OtroEvento">Otros</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="NingunEvento" id="NingunEvento" value="Ningun Evento">
                                            <label class="form-check-label" for="NingunEvento">Ninguno</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="eventosFamiliaresAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                    <div class="form-group group-check col-md-12 mb-4" id="tecnologia">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuenta con algúna de las siguientes herramientas tecnológicas en su vivienda?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Computador" id="Computador" value="Computador">
                                            <label class="form-check-label" for="Computador">Computador</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Tablet" id="Tablet" value="Tablet">
                                            <label class="form-check-label" for="Tablet">Tablet</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Celular" id="Celular" value="Celular">
                                            <label class="form-check-label" for="Celular">Celular</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="NingunoTec" id="NingunoTec" value="Ninguno">
                                            <label class="form-check-label" for="NingunoTec">Ninguno</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="tecnologiaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4">
                                        <label for="relacionFamiliar" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cómo es su relación con los miembros de su familia?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="relacionFamiliar" name="RELACION_CON_FAMILIA" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Buena"> Buena </option>
                                            <option value="Distante"> Distante </option>
                                            <option value="Agresiva"> Agresiva</option>
                                            <option value="No tengo Relacion"> No tengo Relación con ellos </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="relacionFamiliarAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="conflictos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Si hay conflictos en su familia, cómo los resuelven?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="conflictos" name="CONFLICTOS" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Dialogo"> Dialogo </option>
                                            <option value="Silencio"> Silencio </option>
                                            <option value="Agresion Fisica"> Agresión Física </option>
                                            <option value="Agresion Verbal"> Agresión Verbal </option>
                                            <option value="Huida"> Huida </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="conflictosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="comoMoviliza" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cómo se moviliza de su casa al centro de formación?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="comoMoviliza" name="COMO_MOVILIZA" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Transporte"> Transporte Público </option>
                                            <option value="Moto"> Moto Propia </option>
                                            <option value="Moto Taxi"> Moto Taxi </option>
                                            <option value="Bicicleta"> Bicicleta </option>
                                            <option value="Caminando"> Caminando </option>
                                            <option value="Vehiculo"> Vehiculo Familiar/Propio </option>
                                            <option value="Ninguno"> Ninguno (formacion virtual) </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="comoMovilizaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between mb-2">
                                        <a href="#" class="btn fs-5 btn-secondary shadow" onClick="paginationOld('informacionSocioeconomicaI', 'informacionMedica')"><i class="bi bi-arrow-left"></i> Anterior</a>
                                        <a href="#" class="btn fs-5 btn-primary shadow" onClick="pagination('informacionSocioeconomicaI', 'informacionSocioeconomicaII')">Siguiente <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>

                            <article id="informacionSocioeconomicaII" class="px-md-3 d-none">
                                <nav class="py-4">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active mb-0 bg-light" aria-current="page" href="#informacionSocioeconomicaII">Información Socioeconómica Sección-2</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="row justify-content-center2">
                                    <div class="form-group group-check col-md-12 mb-4" id="programaGobierno">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>De los siguientes programas de gobierno, a cuál pertenece?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="FamiliasAccion" id="FamiliasAccion" value="Familias en Acción">
                                            <label class="form-check-label" for="FamiliasAccion">Familias en Acción</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="JovenesAccion" id="JovenesAccion" value="Jovenes en Acción">
                                            <label class="form-check-label" for="JovenesAccion">Jovenes en Acción </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="IngresoSolidario" id="IngresoSolidario" value="Ingreso Solidario">
                                            <label class="form-check-label" for="IngresoSolidario">Ingreso Solidario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="ColombiaMayor" id="ColombiaMayor" value="Colombia Mayor">
                                            <label class="form-check-label" for="ColombiaMayor">Colombia Mayor</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="OtroPrograma" id="OtroPrograma" value="Otro Programa">
                                            <label class="form-check-label" for="OtroPrograma">Otro</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="NingunPrograma" id="NingunPrograma" value="Ningun Programa">
                                            <label class="form-check-label" for="NingunPrograma">Ninguno</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="programaGobiernoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-5 mb-4">
                                        <label for="cuantasComidas" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Cuantas veces come durante el día?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="cuantasComidas" name="CUANTAS_COMIDAS" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="1 Y 2 COMIDAS"> Entre 1 y 2 Comidas</option>
                                            <option value="3 COMIDAS"> 3 Comidas </option>
                                            <option value="MAS DE 3 COMIDAS"> Más de 3 Comidas</option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cuantasComidasAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="trabajaActualmente" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Trabaja actualmente?</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="trabajaActualmente" name="TRABAJA_ACTUALMENTE" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Si"> Si </option>
                                            <option value="No"> No </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="trabajaActualmenteAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="tipoTrabajo" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Tipo de Trabajo:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="tipoTrabajo" name="TIPO_TRABAJO" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="Independiente"> Independiente (Por su cuenta) </option>
                                            <option value="Dependiente"> Dependiente (Vínculo con una empresa) </option>
                                            <option value="Por Jornales"> Por Jornales (Por días) </option>
                                            <option value="Otro Trabajo"> Otros </option>
                                            <option value="No Aplica"> No Aplica </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="tipoTrabajoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <p class="text-secondary mb-1"><i class="bi bi-exclamation-lg text-danger"></i>Teniendo en cuenta el SMMLV Actual ($1.300.606), calcule el rango
                                        total de ingresos en su hogar (Tenga en cuenta el ingreso de otros miembros de la familia con los que convive).
                                    </p>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="totalIngresos" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Total de Ingresos:</label>
                                        <select class="form-select border border-2 shadow-sm get-value" id="totalIngresos" name="RANGO_INGRESOS" required>
                                            <option selected disabled value="">Seleccione.. </option>
                                            <option value="UN SALARIO"> Hasta un Salario Minimo </option>
                                            <option value="2 Y 3 SALARIOS">Entre 2 y 3 Salarios Minimos </option>
                                            <option value="MAS 3 SALARIOS">Más de 3 Salarios Minimos </option>
                                            <option value="NO TENGO INGRESOS"> No Tengo Ingresos </option>
                                        </select>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="totalIngresosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>


                                    <div class="form-group group-check col-md-9 mb-4" id="tiempoLibre">
                                        <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuál de las siguientes actividades ocupa su tiempolibre?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Deporte" id="Deporte" value="Deporte">
                                            <label class="form-check-label" for="Deporte">Deporte </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Musica" id="Musica" value="Musica">
                                            <label class="form-check-label" for="Musica">Musica </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Danza" id="Danza" value="Danza">
                                            <label class="form-check-label" for="Danza">Danza</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Cine_Radio_Tv" id="Cine_Radio_Tv" value="Cine - Radio - Tv">
                                            <label class="form-check-label" for="Cine_Radio_Tv">Cine, Radio y Tv</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="caminatas" id="caminatas" value="Caminatas">
                                            <label class="form-check-label" for="caminatas">Caminatas al Aire Libre</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Dormir"id="Dormir" value="Dormir">
                                            <label class="form-check-label" for="Dormir">Dormir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Juegos" id="Juegos" value="Juegos">
                                            <label class="form-check-label" for="Juegos">Juegos en Linea</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Lectura" id="Lectura" value="Lectura">
                                            <label class="form-check-label" for="Lectura">Lectura</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Otras_Actividades" id="Otras_Actividades" value="Otras Actividades">
                                            <label class="form-check-label" for="Otras_Actividades">Otras</label>
                                        </div>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="tiempoLibreAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="form-group group-check col-md-12 mb-4" id="medioComunicacion">
                                            <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Cuáles de los siguientes medios utiliza para comunicarse con los demás?</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="MedioEscritoFisico" id="MedioEscritoFisico" value="Medio Escrito Fisico">
                                                <label class="form-check-label" for="MedioEscritoFisico">Medio Escrito Físico </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Correo" id="Correo" value="Correo">
                                                <label class="form-check-label" for="Correo">Correos Electrónicos </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="RedesSociales" id="RedesSociales" value="Redes Sociales">
                                                <label class="form-check-label" for="RedesSociales">Redes Sociales</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Llamadas" id="Llamadas" value="Llamadas">
                                                <label class="form-check-label" for="Llamadas">Llamadas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="LenguajeSeñas" id="LenguajeSeñas" value="Lenguaje Señas">
                                                <label class="form-check-label" for="LenguajeSeñas">Lenguaje de Señas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Otra_Comunicacion" id="Otra_Comunicacion" value="Otra Comunicación">
                                                <label class="form-check-label" for="Otra_Comunicacion">Otros</label>
                                            </div>
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="medioComunicacionAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                            </div>
                                        </div>

                                        <div class="form-group group-check col-md-12 mb-4" id="sustanciasPsicoactivas">
                                            <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Usted consume con algúna regularidad una o varias de las siguientes sustancias psicoactivas?</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Alcohol" id="Alcohol" value="Alcohol">
                                                <label class="form-check-label" for="Alcohol">Alcohol </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Tabaco" id="Tabaco" value="Tabaco">
                                                <label class="form-check-label" for="Tabaco">Tabaco </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Opiaceos" id="Opiaceos" value="Opiaceos">
                                                <label class="form-check-label" for="Opiaceos">Opiaceos</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Anfetaminas" id="Anfetaminas"
                                                    value="Anfetaminas">
                                                <label class="form-check-label" for="Anfetaminas">Anfetaminas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Cocaina" id="Cocaina"
                                                    value="Cocaina">
                                                <label class="form-check-label" for="Cocaina">Cocaina</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Marihuana" id="Marihuana"
                                                    value="Marihuana">
                                                <label class="form-check-label" for="Marihuana">Marihuana</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Sedantes" id="Sedantes"
                                                    value="Sedantes">
                                                <label class="form-check-label" for="Sedantes">Sedantes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Extasis" id="Extasis"
                                                    value="Extasis">
                                                <label class="form-check-label" for="Extasis">Extasis</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Otra_Droga" id="Otra_Droga"
                                                    value="Otra Droga">
                                                <label class="form-check-label" for="Otra_Droga">Otras</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Noconsume" id="Noconsume"
                                                    value="No consume">
                                                <label class="form-check-label" for="Noconsume">No Consumo Sustancias Psicoactivas</label>
                                            </div>
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="sustanciasPsicoactivasAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                            </div>
                                        </div>

                                        <div class="form-group group-check col-md-12 mb-4" id="actividadesGustos">
                                            <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Le Gustan las Actividades:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Grupales" id="Grupales" value="Grupales">
                                                <label class="form-check-label" for="Grupales">Grupales </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Individuales" id="Individuales"
                                                    value="Individuales">
                                                <label class="form-check-label" for="Individuales">Individuales </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" Name="AireLibre"id="AireLibre"
                                                    value="Aire Libre">
                                                <label class="form-check-label" for="AireLibre">Al Aire Libre</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="EspaciosCerrados" id="EspaciosCerrados"
                                                    value="Espacios Cerrados">
                                                <label class="form-check-label" for="EspaciosCerrados">En Espacios Cerrados</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Competitivas" id="Competitivas"
                                                    value="Competitivas">
                                                <label class="form-check-label" for="Competitivas">Competitivas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="NingunaEspecial" id="NingunaEspecial"
                                                    value="Ninguna Especial">
                                                <label class="form-check-label" for="NingunaEspecial">Ninguna en Especial</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox"Name="Otra_Actividad" id="Otra_Actividad"
                                                    value="Otra Actividad">
                                                <label class="form-check-label" for="Otra_Actividad">Otras</label>
                                            </div>
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="actividadesGustosAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                            </div>
                                        </div>


                                        <div class="form-group group-check col-md-12 mb-4" id="opticaPersonal">
                                            <label class="form-label fw-semibold d-block"><i class="bi bi-exclamation-lg text-danger"></i>Usted se Considera una Persona:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Alegre" id="Alegre" value="Alegre">
                                                <label class="form-check-label" for="Alegre">Alegre </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Sociable" id="Sociable" value="Sociable">
                                                <label class="form-check-label" for="Sociable">Sociable </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Conflictiva" id="Conflictiva" value="Conflictiva">
                                                <label class="form-check-label" for="Conflictiva">Conflictiva</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Depresiva" id="Depresiva" value="Depresiva">
                                                <label class="form-check-label" for="Depresiva">Depresiva</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Introvertida" id="Introvertida" value="Introvertida">
                                                <label class="form-check-label" for="Introvertida">Introvertida</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Extrovertida" id="Extrovertida" value="Extrovertida">
                                                <label class="form-check-label" for="Extrovertida">Extrovertida</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check-value border border-2 shadow-sm" type="checkbox" name="Otra_Persona" id="Otra_Persona" value="Otra Personalidad">
                                                <label class="form-check-label" for="Otra_Persona">Otras</label>
                                            </div>
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="opticaPersonalAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Debes seleccionar una o varias opciones.
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between mb-2">
                                            <a href="#" class="btn fs-5 btn-secondary shadow" onClick="paginationOld('informacionSocioeconomicaII', 'informacionSocioeconomicaI')"><i class="bi bi-arrow-left"></i> Anterior</a>
                                            <a href="#" class="btn fs-5 btn-enviar shadow" onClick="pagination('informacionSocioeconomicaII', '')">Enviar <i class="bi bi-send-check-fill"></i></a>
                                        </div>
                                    </div>
                            </article>

                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="footer container-fluid p-3 text-white text-center" >
        <small class="fw-semibold">Copyright © Fabrica TIC - Sena CNCA 2023</small>
    </footer>

    <form action="/departamentos" method="post" id="formDepartamentos" class="d-none">
        @csrf
    </form>

    <form action="/municipios" method="post" id="formMunicipios" class="d-none">
        @csrf
        <input type="text" value="" id="hiddenDepartamento" name="departamento">
    </form>

    <!-- Vendor JS Files -->
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/validarForm.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.js') !!}"></script>
    <script src="{!! asset('js/departamentos_municipios.js') !!}"></script>
    <script src="{!! asset('assets/js/paginationForm.js') !!}"></script>
    <script src="{!! asset('assets/js/selectDisabled.js') !!}"></script>
</body>
</html>
