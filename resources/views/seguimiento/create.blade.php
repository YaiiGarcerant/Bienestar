@php
    $tiposDeDocumentos = [
        [
            "value" => "Cedula Ciudadanía",
            "label" => "Cedula de Ciudadanía",
        ],
        [
            "value" => "Cedula Extranjería",
            "label" => "Cedula de Extranjería",
        ],
        [
            "value" => "Identificacion Personal",
            "label" => "Número de Identificacion Personal",
        ],
        [
            "value" => "Identificacion Tributaría",
            "label" => "Número de Identificacion Tributaría",
        ],
        [
            "value" => "Tarjeta Identidad",
            "label" => "Tarjeta de Identidad",
        ],
        [
            "value" => "Pasaporte",
            "label" => "Pasaporte",
        ]
    ];
    $nivelesDeFormacion = [
        [
            "value" => "Curso Especial",
            "label" => "Curso Especial"
        ],
        [
            "value" => "Especialización",
            "label" => "Especialización Tecnológica"
        ],
        [
            "value" => "Evento",
            "label" => "Evento"
        ],
        [
            "value" => "Técnico",
            "label" => "Técnico"
        ],
        [
            "value" => "Tecnólogo",
            "label" => "Tecnólogo"
        ]
    ];
@endphp
@extends('layouts.layout')
@section('content')
<main class="container mb-5" style="padding-top: 3rem">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a style="background-color: #90adff"  href="../seguimiento" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
        </a>
    </div>

    <div class="card border-0 shadow">
        <div class="card-body p-4">
            <h2 class="card-title text-center mb-3" style="color:#90adff">REMISIÓN DE APRENDICES A SEGUIMIENTO</h2>
            <form action="{{url('/seguimiento')}}" method="POST" enctype="multipart/form-data" class="px-4 py-3 mb-0">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4 mb-3">
                        <label for="NUMERO_DOCUMENTO" style="color:#90adff;"><b>Documento del Aprendiz a Remitir:</b></label>
                        <input class="form-control shadow-sm" type="number" name="NUMERO_DOCUMENTO" id="NUMERO_DOCUMENTO" value="{{old('NUMERO_DOCUMENTO')}}">
                        @error('NUMERO_DOCUMENTO')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="tipo_documento" style="color:#90adff"><b>Tipo de Documento:</b></label>
                        <select class="form-select shadow-sm" id="tipo_documento" name="tipo_documento">
                            <option selected disabled value="" >Seleccione.. </option>

                            @foreach ($tiposDeDocumentos as $tipoDeDocumento)
                                <option value="{{ $tipoDeDocumento['value'] }}" {{ old('tipo_documento') == $tipoDeDocumento['value'] ? 'selected' : '' }}>
                                    {{ $tipoDeDocumento['label'] }}
                                </option>
                            @endforeach

                        </select>
                        @error('tipo_documento')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="NOMBRES_APRENDIZ" style="color:#90adff;"><b>Nombres y Apellidos del Aprendiz:</b></label>
                        <input class="form-control shadow-sm" id="NOMBRES_APRENDIZ" type="text" name="NOMBRES_APRENDIZ" value="{{old('NOMBRES_APRENDIZ')}}">

                        @error('NOMBRES_APRENDIZ')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-4 mb-3">
                        <label for="IDENTIFICADOR_FICHA" style="color:#90adff;"><b>Ficha del Programa de Formación:</b></label>
                        <input class="form-control shadow-sm" type="text" id="IDENTIFICADOR_FICHA" name="IDENTIFICADOR_FICHA" value="{{old('IDENTIFICADOR_FICHA')}}">
                        <div class="invalid-feedback fw-semibold mt-2 fs-6">
                            Este campo es requerido!
                        </div>
                        @error('IDENTIFICADOR_FICHA')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="NIVEL_FORMACION" style="color:#90adff"><b>Nivel de Formación:</b></label>
                        <select name="NIVEL_FORMACION" class="form-select shadow-sm" id="NIVEL_FORMACION" value="{{old('NIVEL_FORMACION')}}">
                            <option selected disabled value="">Seleccione.. </option>

                            @foreach ($nivelesDeFormacion as $nivelDeFormacion)
                                <option value="{{ $nivelDeFormacion['value'] }}" {{ old('NIVEL_FORMACION') == $nivelDeFormacion['value'] ? 'selected' : '' }}>
                                    {{ $nivelDeFormacion['label'] }}
                                </option>
                            @endforeach

                        </select>
                        @error('NIVEL_FORMACION')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="NOMBRE_PROGRAMA_FORMACION"  style="color:#90adff"><b>Nombre del Programa de Formación:</b></label>
                        <input class="form-control shadow-sm" type="text" id="NOMBRE_PROGRAMA_FORMACION" name="NOMBRE_PROGRAMA_FORMACION" value="{{old('NOMBRE_PROGRAMA_FORMACION')}}">
                        @error('NOMBRE_PROGRAMA_FORMACION')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6 mb-3">
                        <label for="NOMBRES_INSTRUCTOR" style="color:#90adff;"><b>Nombre del Instructor Remitente:</b></label>
                        <input class="form-control shadow-sm" type="text" id="NOMBRES_INSTRUCTOR" name="NOMBRES_INSTRUCTOR" value="{{old('NOMBRES_INSTRUCTOR')}}">
                        @error('NOMBRES_INSTRUCTOR')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="CORREO_INSTRUCTOR" style="color:#90adff;"><b>Correo del Instructor Remitente:</b></label>
                        <input class="form-control shadow-sm" type="email" id="CORREO_INSTRUCTOR" name="CORREO_INSTRUCTOR" value="{{old('CORREO_INSTRUCTOR')}}">
                        @error('CORREO_INSTRUCTOR')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-3 mb-3">
                        <label for="NOVEDAD_REMISION" style="color:#90adff;"><b>Novedad de Remisión:</b></label>
                        <input class="form-control shadow-sm" type="text" id="NOVEDAD_REMISION" name="NOVEDAD_REMISION" value="{{old('NOVEDAD_REMISION')}}">
                        @error('NOVEDAD_REMISION')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3 mb-3">
                        <label for="MOTIVO_REMISION" style="color:#90adff;"><b>Motivo de Remisión:</b></label>
                        <select class="form-select shadow-sm" id="motivo" name="MOTIVO_REMISION" onchange="mostrarOtro()">
                            <option selected disabled value="" >Seleccione: </option>
                            <option value="academico">Académico</option>
                            <option value="disciplinario">Disciplinario</option>
                            <option value="ausentismo">Ausentismo</option>
                            <option value="otro">Otro:</option>
                          </select>
                        @error('MOTIVO_REMISION')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3" id="otroMotivoField" style="display: none;">
                      <label for="otroMotivo" style="color:white;"><b>.  </b></label>
                      <input type="text" class="form-control shadow-sm" id="otroMotivo" name="otroMotivo" placeholder="Escriba otro motivo">
                      @error('otroMotivo')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                      @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="DESCRIPCION_MOTIVO" class="form-label" style="color:#90adff;"><b>Descripcion del Motivo</b></label>
                        <textarea class="form-control py-3 shadow-sm" rows="1" type="text" id="DESCRIPCION_MOTIVO" name="DESCRIPCION_MOTIVO" value="{{old('DESCRIPCION_MOTIVO')}}"></textarea>
                        @error('DESCRIPCION_MOTIVO')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                </div>

                <div class="row">
                    <div class="w-100 mt-2">
                        <button type="submit" class="btn btn-success info float-end">
                            Crear Seguimiento
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
