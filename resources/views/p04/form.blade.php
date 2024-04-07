@extends('layouts.layout')
@section('content')
<main class="container">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="../../p04" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
        </a>
    </div>

    <section class="card border-0 shadow">
        <div class="card-body p-4">
            <h3 class="card-title text-center mb-3 px-lg-5" style="color:#206695">FICHA | {{ $p04->NUM_FICHA}} - {{ $p04->PROGRAMA_FORMACION}}</h3>
            <div class="row justify-content-center">
                <div class="col-md-11 accordion accordion-flush p-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-informacionI" aria-expanded="false" aria-controls="flush-informacionI">
                                INFORMACIÓN DE LA FICHA 1 - PROGRAMA DE FORMACIÓN Y CENTRO
                            </button>
                        </h2>

                        <div id="flush-informacionI" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-5">
                                <div class="accordion-item">

                                    <div class="row justify-content-center">
                                        <div class="form-group col-md-6 mb-6">
                                            <label for="programaFormacion" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Programa de Formacion</label>
                                            <input type="text" class="form-control border border-2 shadow-sm get-value" name="PROGRAMA_FORMACION" id="programaFormacion" placeholder="Ingresa tu programa de Formacion" required disabled value="">
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="prograFormacionAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 mb-6">
                                            <label for="ficha" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Numero de Ficha</label>
                                            <input type="number" class="form-control border border-2 shadow-sm get-value" name="NUM_FICHA" id="ficha" placeholder="Ingresa tu numero de ficha" required disabled value="{{ $p04->NUM_FICHA}}">
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="fichaAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-group col-md-6 mb-6">
                                            <label for="nombreCentro" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Centro de Formacion</label>
                                            <input type="text" class="form-control border border-2 shadow-sm get-value" name="NOMBRE_CENTRO" id="nombreCentro" placeholder="Ingrese centro de formacion" required disabled value="">
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="nombreCentrooAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 mb-6">
                                            <label for="coordinacion" class="form-label fw-semibold"><i class="bi bi-exclamation-lg text-danger"></i>Coordinacion</label>
                                            <input type="text" class="form-control border border-2 shadow-sm get-value" name="NODO_SEDE" id="nodoSede" placeholder="Ingrese aqui" required disabled value="">
                                            <div class="text-danger fw-medium p-1 m-0 d-none" id="lugarNacimientoAlert">
                                                <i class="bi bi-exclamation-circle-fill"></i> Este campo es requerido.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-informacionII" aria-expanded="false" aria-controls="flush-informacionII">
                                INFORMACIÓN DE LA FICHA 2 - JORNADA Y FECHAS INICIO - FIN
                            </button>
                        </h2>
                        <div id="flush-informacionII" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-5">
                                Su nivel de formación es: <b style="color: #206695">{{ $p04->NIVEL_FORMACION}}</b> con jornada <b style="color: #206695">{{ $p04->TIPO_JORNADA}}</b>, modalidad de formación <b style="color: #206695">{{ $p04->MODALIDAD_FORMACION}}</b> y fecha de inicio <b style="color: #206695">{{ $p04->FECHA_INICIO_FICHA}}</b> -
                                fecha de terminación <b style="color: #206695">{{ $p04->FECHA_TERMINACION_FICHA}}</b>.
                            </div>
                        </div>
                    </div>


                        {{-- <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-informacionIII" aria-expanded="false" aria-controls="flush-informacionIII">
                                INFORMACIÓN DEL PROGRAMA 3 - SECTOR Y TOTAL DE APRENDICES
                            </button>
                        </h2>
                        <div id="flush-informacionIII" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-5">
                                Sector del programa de formación <b style="color: #39A900">{{ $p04->SECTOR_PROGRAMA}}</b> departamento y municipio <b style="color: #39A900">{{ $p04->DEPARTAMENTO_PROGRAMA}} - {{ $p04->MUNICIPIO_PROGRAMA}}</b>.
                                Total de aprendices <b style="color: #39A900">{{ $p04->TOTAL_APRENDICES}}</b>, aprendices femeninas <b style="color: #39A900">{{ $p04->TOTAL_APRENDICES_FEMENINOS}}</b>, aprendices masculino <b style="color: #39A900">{{ $p04->TOTAL_APRENDICES_MASCULINOS}}</b> y
                                total aprendices acivos <b style="color: #39A900">{{ $p04->TOTAL_APRENDICES_ACTIVOS}}</b>.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#flush-informacionIV" aria-expanded="false" aria-controls="flush-informacionIV">
                                INFORMACIÓN DEL PROGRAMA 4 - EMPRESA
                            </button>
                        </h2>
                        <div id="flush-informacionIV" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body fs-5">
                                @if ($p04->IDENTIFICACION_EMPRESA)
                                    <b style="color: #39A900">{{ $p04->NOMBRE_EMPRESA}} - {{$p04->IDENTIFICACION_EMPRESA}}</b>.
                                @else
                                    NINGUNA.
                                @endif
                            </div>
                        </div> 
                    </div> --}}
                </div>
                <div class="row justify-content-end">
                    <div class="col-1 mt-3">
                       <a class="btn btn-success" href="{{route('P04Excel',['id'=>$p04->id])}}"> 
                        <i class="fas fa-file-excel"></i>
                       </a> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection







