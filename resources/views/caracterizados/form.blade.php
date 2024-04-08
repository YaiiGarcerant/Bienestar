@extends('layouts.layout')
@section('content')
    <main class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="../../caracterizados" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
            </a>
        </div>
        <section class="card border-0 shadow">
            <div class="card-body p-4">
                <h3 class="card-title text-center mb-0" style="color:#90adff">REPORTE FICHA DE CARACTERIZACIÓN</h3>
                <div class="row justify-content-center">

                    <div class="col-md-11 accordion accordion-flush p-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold fs-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-informacionI" aria-expanded="false"
                                    aria-controls="flush-informacionI">
                                    INFORMACIÓN PERSONAL Y ACADEMICA
                                </button>
                            </h2>


                            <div id="flush-informacionI" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <br>
                                <div class="row">
                                    <div class="form-group col-md-4 mb-4">
                                        <label for="nombre" class="form-label fw-semibold">Nombre Completo:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="NOMBRES_APRENDIZ" id="nombre" placeholder="Ingresa tu nombre completo"
                                            value="{{ $ficha->NOMBRES_APRENDIZ }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="nombre" class="form-label fw-semibold">Tipo de Documento:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="TIPO_DOCUMENTO" id="tipoDocumento" placeholder=""
                                            value="{{ $ficha->TIPO_DOCUMENTO }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>



                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroDocumento" class="form-label fw-semibold">Número
                                            Documento:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value"
                                            name="NUMERO_DOCUMENTO" id="numeroDocumento"
                                            placeholder="Ingresa tu número de documento" required
                                            value="{{ $ficha->NUMERO_DOCUMENTO }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroDocumentoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="numeroContacto" class="form-label fw-semibold">Número de
                                            Contacto:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value"
                                            name="NUMERO_CONTACTO" id="numeroContacto"
                                            placeholder="Ingresa tu número de contacto" required
                                            value="{{ $ficha->NUMERO_CONTACTO }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroContactoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="correo" class="form-label fw-semibold">Correo Electrónico:</label>
                                        <input type="email" class="form-control border border-2 shadow-sm get-value"
                                            name="CORREO_APRENDIZ" id="correo"
                                            placeholder="Ingresa tu corro personal o SENA" required
                                            value="{{ $ficha->CORREO_APRENDIZ }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="correoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4 mb-4">
                                        <label for="genero" class="form-label fw-semibold">Genero:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="GENERO_APRENDIZ" id="genero" placeholder="Ingresa tu genero" required
                                            value="{{ $ficha->GENERO_APRENDIZ }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="generoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="fechaNacimiento" class="form-label fw-semibold">Fecha de
                                            Nacimiento:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="FECHA_NACIMIENTO" id="fechaNacimiento" required
                                            value="{{ $ficha->FECHA_NACIMIENTO }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="fechaNacimientoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="lugarNacimiento" class="form-label fw-semibold">Lugar de
                                            Nacimiento:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="LUGAR_NACIMIENTO" id="lugarNacimiento"
                                            placeholder="Ingresa tu lugar de nacimiento" required
                                            value="{{ $ficha->LUGAR_NACIMIENTO }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="lugarNacimientoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>





                                <div class="row justify-content-center">

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="nombre" class="form-label fw-semibold">Departamento Donde
                                            Vive:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="DEPART_RESIDENCIA" id="listaDepartamentos" placeholder=""
                                            value="{{ $departamento_municipio }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6 mb-6">
                                        <label for="direccion" class="form-label fw-semibold">Dirección de
                                            Residencia:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="DIREC_RESIDENCIA" id="direccion"
                                            placeholder="Ingresa la dirección de tu casa" required
                                            value="{{ $ficha->DIREC_RESIDENCIA }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="direccionAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>



                                </div>


                                <div class="row justify-content-center">

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="ficha" class="form-label fw-semibold">Número de ficha:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm"
                                            id="ficha" name="FICHA" placeholder="Ingrese el programa de formación"
                                            value="{{ $ficha->FICHA }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="fichaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-8 mb-8">
                                        <label for="programa" class="form-label fw-semibold">Programa de
                                            Formación:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            value="{{ $ficha->PROGRAMA_FORMACION }}" id="programa"
                                            name="PROGRAMA_FORMACION" placeholder="Ingrese el programa de formación"
                                            disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="programaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>



                                    <div class="form-group col-md-6 mb-6">
                                        <label for="jornada" class="form-label fw-semibold">Jornada de Formación:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm"
                                            id="jornada" name="JORNADA" placeholder="Ingrese el programa de formación"
                                            value="{{ $ficha->JORNADA }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="jornadaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="coordinacion" class="form-label fw-semibold">Coordinación
                                            Académica:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm"
                                            id="coordinacion" name="COORDINACION" placeholder=""
                                            value="{{ $ficha->COORDINACION }}" disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="coordinacionAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold fs-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-informacionII" aria-expanded="false"
                                    aria-controls="flush-informacionII">
                                    INFORMACIÓN FAMILIAR DEL APRENDIZ
                                </button>
                            </h2>
                            <div id="flush-informacionII" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <br>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="numeroPersonasVive" class="form-label fw-semibold">Cantidad de
                                            personas que viven con el aprendiz:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value"
                                            name="NUM_PER_VIVE" id="numeroPersonasVive" placeholder=""
                                            value="{{ $ficha->NUM_PER_VIVE }}" required disabled>
                                    </div>



                                    <div class="form-group col-md-6 mb-6">
                                        <label for="numeroHermanos" class="form-label fw-semibold">Número de
                                            Hermanos:</label>
                                        <input type="number" class="form-control border border-2 shadow-sm get-value"
                                            name="NUM_HERMANOS" id="numeroHermanos"
                                            placeholder="Ingresa la cantidad de hermanos"
                                            value="{{ $ficha->NUM_HERMANOS }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroHermanosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroHermanos" class="form-label fw-semibold">Estado Civil:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="ESTADO_CIVIL" id="estadoCivil" placeholder=""
                                            value="{{ $ficha->ESTADO_CIVIL }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroHermanosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroHermanos" class="form-label fw-semibold">El aprendiz tiene
                                            hijos?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="HIJOS" id="hijos" placeholder="" value="{{ $ficha->HIJOS }}"
                                            required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroHermanosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="numeroHermanos" class="form-label fw-semibold">Cuántos Hijos?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="NUM_HIJOS" id="cantidadHijos" placeholder=""
                                            value="{{ $ficha->NUM_HIJOS }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="numeroHermanosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>



                                </div>

                                <div class="row justify-content-center col-md-12">


                                    <div class="form-group col-md-6 mb-6">
                                        <label for="cantidadHijos" class="form-label fw-semibold">Dependen personas
                                            económicamente del aprendiz?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="NUM_HIJOS" id="cantidadHijos"
                                            placeholder="Ingresa la cantidad de hijos"
                                            value="{{ $ficha->PER_QUEDEPENDAN }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="cantidadHijosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-6">
                                        <label for="cantPersonasDependenEco" class="form-label fw-semibold">Cuántas
                                            personas?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="CUANTAS_PER" id="cantPersonasDependenEco"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->CUANTAS_PER }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none"
                                            id="cantPersonasDependenEcoAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

            

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold fs-5" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-informacionIV" aria-expanded="false"
                                    aria-controls="flush-informacionIV">
                                    INFORMACIÓN SOCIOECONÓMICA - SECCIÓN 1
                                </button>
                            </h2>
                            
                            <div id="flush-informacionIV" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <br>
                                <div class="row justify-content-center">

                                    <div class="form-group col-md-5 mb-4">
                                        <label for="poblaciones" class="form-label fw-semibold">Pertenece a algúna de
                                            estas poblaciones?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="CUANTAS_PER" id="poblaciones"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->ENCUENTRA_POBLACIONES }}" required disabled>

                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="claseVivienda"class="form-label fw-semibold">Clase de Vivienda:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="CUANTAS_PER" id="poblaciones"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->CLASE_VIVIENDA }}" required disabled>
                                    </div>

                                    <div class="form-group col-md-3 mb-4">
                                        <label for="estratoSocial"class="form-label fw-semibold">Estrato Social:</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="ESTRATO_SOCIAL" id="estratoSocial"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->ESTRATO_SOCIAL }}" required disabled>

                                    </div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="form-group col-md-4">
                                        <label for="relacionFamiliar" class="form-label fw-semibold">Cómo es su relación
                                            con los miembros de su familia?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="RELACION_CON_FAMILIA" id="relacionFamiliar"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->RELACION_CON_FAMILIA }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="relacionFamiliarAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="conflictos" class="form-label fw-semibold">Si hay conflictos en su
                                            familia, cómo los resuelven?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="CONFLICTOS" id="conflictos"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->CONFLICTOS }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="conflictosAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 mb-4">
                                        <label for="comoMoviliza" class="form-label fw-semibold">Cómo se moviliza de su
                                            casa al centro de formación?</label>
                                        <input type="text" class="form-control border border-2 shadow-sm get-value"
                                            name="COMO_MOVILIZA" id="comoMoviliza"
                                            placeholder="Ingresa la cantidad de personas"
                                            value="{{ $ficha->COMO_MOVILIZA }}" required disabled>
                                        <div class="text-danger fw-medium p-1 m-0 d-none" id="comoMovilizaAlert">
                                            <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">

                                    <div class="form-group group-check col-12 mb-4" id="serviciosPublicos">
                                        <label class="form-label fw-semibold d-block">Cuenta con algúno de los siguientes
                                            servicios en su vivienda?</label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Acueducto == 'Acueducto') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Acueducto">Acueducto y
                                                Alcantarillado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->EnergiaElectrica == 'EnergiaElectrica') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="EnergiaElectrica">Energia
                                                Electrica</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->SerTelefonico == 'SerTelefonico') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="SerTelefonico">Servicio
                                                Telefonico</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Gas == 'Gas') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Gas">Gas natural</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Internet == 'Internet') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Internet">Internet</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->OtroSer == 'Otro Servicios') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="OtroSer">Otros</label>
                                        </div>

                                    </div>

                                    <div class="form-group group-check col-12 mb-4" id="problematicaVivienda">
                                        <label class="form-label fw-semibold d-block">Cuál de las siguientes problematicas
                                            afectan el sector donde vive?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Delincuencia == 'Delincuencia') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Delincuencia">Delincuencia
                                                Común</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->VentaSustancias == 'VentaSustancias') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="VentaSustancias">Venta Y/O
                                                Consumo de Sustancias Psicoactivas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->PobrezaExtrema == 'PobrezaExtrema') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="PobrezaExtrema">Pobreza
                                                Extrema</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->NingunaPro == 'Ninguna Problematica') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="NingunaPro">Ninguno</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->OtraPro == 'Otra Problematica') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="OtraPro">otras</label>
                                        </div>
                                    </div>

                                    <div class="form-group group-check col-12 mb-4" id="eventosFamiliares">
                                        <label class="form-label fw-semibold d-block">Cuáles de los siguientes eventos se
                                            han apresentado en tu hogar?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->ViolenciaIntrafamiliar == 'ViolenciaIntrafamiliar') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="ViolenciaIntrafamiliar">Violencia
                                                Intrafamiliar</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->AbusoSexual == 'AbusoSexual') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="AbusoSexual">Abuso Sexual</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Alcoholismo == 'Alcoholismo') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Alcoholismo">Alcoholismo</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Drogadiccion == 'Drogadiccion') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Drogadiccion">Drogadicción</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->NingunEvento == 'Ningun Evento') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="NingunEvento">Ninguno</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->OtroEvento == 'Otro Evento') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="OtroEvento">Otras</label>
                                        </div>
                                    </div>

                                    <div class="form-group group-check col-md-12 mb-4" id="tecnologia">
                                        <label class="form-label fw-semibold d-block">Cuenta con algúna de las siguientes
                                            herramientas tecnológicas en su vivienda?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Computador == 'Computador') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Computador">Computador</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Tablet == 'Tablet') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Tablet">Tablet</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Celular == 'Celular') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Celular">Celular</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->NingunoTec == 'Ninguno') @checked(true)
                                                                @else
                                                                @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="NingunoTec">Ninguno</label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-semibold fs-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-informacionV"
                                        aria-expanded="false" aria-controls="flush-informacionV">
                                        INFORMACIÓN SOCIOECONÓMICA - SECCIÓN 2
                                    </button>
                                    </h2>
                                    <div id="flush-informacionV" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <br>
                                        <div class="row justify-content-center">
                                                <div class="form-group col-md-6 mb-6">
                                                    <label for="cuantasComidas" class="form-label fw-semibold">Cuantas veces come durante el día?</label>
                                                    <input type="text" class="form-control border border-2 shadow-sm get-value"
                                                    name="CUANTAS_COMIDAS" id="cuantasComidas"
                                                    placeholder="Ingresa la cantidad de personas"
                                                    value="{{ $ficha->CUANTAS_COMIDAS }}" required disabled>
                                                </div>
                                                <div class="form-group col-md-3 mb-3">
                                                    <label for="trabajaActualmente" class="form-label fw-semibold">Trabaja actualmente?</label>
                                                    <input type="text" class="form-control border border-2 shadow-sm get-value"
                                                    name="TRABAJA_ACTUALMENTE" id="trabajaActualmente"
                                                    placeholder="Ingresa la cantidad de personas"
                                                    value="{{ $ficha->TRABAJA_ACTUALMENTE }}" required disabled>
                                                </div>
                                                <div class="form-group col-md-3 mb-3">
                                                    <label for="trabajaActualmente" class="form-label fw-semibold">Tipo de Trabajo:</label>
                                                    <input type="text" class="form-control border border-2 shadow-sm get-value"
                                                    name="TIPO_TRABAJO" id="tipoTrabajo"
                                                    placeholder="Ingresa la cantidad de personas"
                                                    value="{{ $ficha->TIPO_TRABAJO }}" required disabled>
                                                </div>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="form-group col-md-12 mb-12">
                                                <label for="trabajaActualmente" class="form-label fw-semibold">Total de ingresos teniendo en cuenta el SMMLV Actual ($1.300.606) es:</label>
                                                <input type="text" class="form-control border border-2 shadow-sm get-value"
                                                name="RANGO_INGRESOS" id="totalIngresos"
                                                placeholder="Ingresa la cantidad de personas"
                                                value="{{ $ficha->RANGO_INGRESOS }}" required disabled>
                                            </div>
                                        </div>

                                        Cuantas veces come durante el día: <b
                                            style="color: #90adff">{{ $ficha->CUANTAS_COMIDAS }}</b>, trabaja
                                        actualmente: <b style="color: #90adff">{{ $ficha->TRABAJA_ACTUALMENTE }}</b>,
                                        tipo de trabajo: <b style="color: #90adff">{{ $ficha->TIPO_TRABAJO }}</b>
                                        y total de ingresos teniendo en cuenta el SMMLV Actual ($1.300.606) es: <b
                                            style="color: #90adff">{{ $ficha->RANGO_INGRESOS }}</b>.
                                        <br><br>
                                        Programas de gobierno, a cuál pertenece: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->FamiliasAccion == 'Familias en Acción') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="FamiliasAccion">Familias en
                                                Accion</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->JovenesAccion == 'Jovenes en Acción') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="JovenesAccion">Jovenes en Accion
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->IngresoSolidario == 'Ingreso Solidario') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="IngresoSolidario">Ingreso
                                                Solidario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->ColombiaMayor == 'Colombia Mayor') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="ColombiaMayor">Colombia Mayor</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->OtroPrograma == 'Otro Programa') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="OtroPrograma">Otro</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->NingunPrograma == 'Ningun Programa') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="NingunPrograma">Ninguno</label>
                                        </div>
                                        <br><br>
                                        Actividades que ocupan su tiempo libre: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Deporte == 'Deporte') @checked(true)
                                                            77584 @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Deporte">Deporte </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Musica == 'Musica') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Musica">Música </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Danza == 'Danza') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Danza">Danza</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Cine_Radio_Tv == 'Cine - Radio - Tv') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Cine_Radio_Tv">Cine, Radio y
                                                Tv</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->caminatas == 'Caminatas') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="caminatas">Caminatas al Aire
                                                Libre</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Dormir == 'Dormir') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Dormir">Dormir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Juegos == 'Juegos') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Juegos">Juegos en Linea</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Lectura == 'Lectura') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Lectura">Lectura</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Otras_Actividades == 'Otras Actividades') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Otras_Actividades">Otras</label>
                                        </div>
                                        <br><br>
                                        Medios que utiliza para comunicarse con los demás: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->MedioEscritoFisico == 'Medio Escrito Fisico') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="MedioEscritoFisico">Medio Escrito
                                                Fisico </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Correo == 'Correo') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Correo">Correos Electronicos
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->RedesSociales == 'Redes Sociales') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="RedesSociales">Redes Sociales</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Llamadas == 'Llamadas') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Llamadas">Llamadas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->LenguajeSeñas == 'Lenguaje Señas') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="LenguajeSeñas">Lenguaje de
                                                Señas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Otra_Comunicacion == 'Otra Comunicación') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Otra_Comunicacion">Otros</label>
                                        </div>
                                        <br><br>
                                        Consume algún tipo sustancias psicoactivas: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Alcohol == 'Alcohol') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Alcohol">Alcohol </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Tabaco == 'Tabaco') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Tabaco">Tabaco </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Opiaceos == 'Opiaceos') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Opiaceos">Opiaceos</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Anfetaminas == 'Anfetaminas') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Anfetaminas">Anfetaminas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Cocaina == 'Cocaina') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Cocaina">Cocaina</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Marihuana == 'Marihuana') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Marihuana">Marihuana</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input"
                                                type="checkbox"@if ($ficha->Sedantes == 'Sedantes') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Sedantes">Sedantes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Extasis == 'Extasis') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Extasis">Extasis</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Otra_Droga == 'Otra Droga') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Otra_Droga">otras</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Noconsume == 'No consume') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Noconsume">No Consumo Sustancias
                                                Psicoactivas</label>
                                        </div>
                                        <br><br>
                                        Le gustan las actividades: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Grupales == 'Grupales') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Grupales">Grupales </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Individuales == 'Individuales') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Individuales">Individuales </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->AireLibre == 'Aire Libre') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="AireLibre">Al Aire Libre</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->EspaciosCerrados == 'Espacios Cerrados') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="EspaciosCerrados">En Espacios
                                                Cerrados</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Competitivas == 'Competitivas') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Competitivas">Competitivas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->NingunaEspecial == 'Ninguna Especial') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="NingunaEspecial">Ninguna en
                                                Especial</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Otra_Actividad == 'Otra Actividad') @checked(true)
                                                            @else
                                                            @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Otra_Actividad">Otras</label>
                                        </div>
                                        <br><br>
                                        Percepción del aprendiz hacia a sí mismo: <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Alegre == 'Alegre') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Alegre">Alegre </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Sociable == 'Sociable') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Sociable">Sociable </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Conflictiva == 'Conflictiva') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Conflictiva">Conflictiva</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Depresiva == 'Depresiva') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Depresiva">Depresiva</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Introvertida == 'Introvertida') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Introvertida">Introvertida</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Extrovertida == 'Extrovertida') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Extrovertida">Extrovertida</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                @if ($ficha->Otra_Persona == 'Otra Personalidad') @checked(true)
                                                                  @else
                                                                  @checked(false) @disabled(true) @endif>
                                            <label class="form-check-label" for="Otra_Persona">Otra</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-1 mt-3">
                            <a class="btn btn-danger "
                                href="{{ route('encuesta.pdf', ['id' => $ficha->id]) }}">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
                
                

            </div>
            </div>
        </section>
    </main>
@endsection
