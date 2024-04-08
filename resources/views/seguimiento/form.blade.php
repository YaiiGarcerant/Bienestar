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
<main class="container mb-5">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
        <a href="{{ route('seguimiento.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Volver
        </a>
    </div>
    
    <div class="card border-0 shadow">
        <div class="card-body p-4">
            <h2 class="card-title text-center mb-3" style="color:#90adff">ACTUALIZAR REMISIÓN DE APRENDICE A SEGUIMIENTO</h2>
            <div class="px-4 py-2 needs-validation mb-0" novalidate>
                <div class="row">

                    <div class="form-group col-md-4 mb-3">
                        <label for="NUMERO_DOCUMENTO" style="color:#90adff;"><b>Documento del Aprendiz a Eemitir:</b></label>
                        <input class="form-control shadow-sm" type="number" value="{{ old('NUMERO_DOCUMENTO', $seguimiento->NUMERO_DOCUMENTO)}}" name="NUMERO_DOCUMENTO" id="NUMERO_DOCUMENTO">
                        
                        @error('NUMERO_DOCUMENTO')            
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="tipo_documento" style="color:#90adff"><b>Tipo de Documento:</b></label>
                        <select class="form-select shadow-sm" id="tipo_documento" name="tipo_documento">
                            <option selected value="{{ $seguimiento->tipo_documento}}" >{{ $seguimiento->tipo_documento}}</option>

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
                        <input class="form-control shadow-sm" id="NOMBRES_APRENDIZ" type="text" value="{{ old('NOMBRES_APRENDIZ', $seguimiento->NOMBRES_APRENDIZ)}}" name="NOMBRES_APRENDIZ">
                       
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
                        <input class="form-control shadow-sm" type="text" id="IDENTIFICADOR_FICHA" value="{{ old('IDENTIFICADOR_FICHA', $seguimiento->IDENTIFICADOR_FICHA)}}" name="IDENTIFICADOR_FICHA">
                        
                        @error('IDENTIFICADOR_FICHA')            
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-4 mb-3">
                        <label for="NIVEL_FORMACION" style="color:#90adff"><b>Nivel de Formación:</b></label>
                        <select name="NIVEL_FORMACION" class="form-select shadow-sm" id="NIVEL_FORMACION">
                            <option selected value="{{ $seguimiento->NIVEL_FORMACION}}">{{ $seguimiento->NIVEL_FORMACION}}</option>
                            
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
                        <input class="form-control shadow-sm" type="text" id="NOMBRE_PROGRAMA_FORMACION" value="{{ old('NOMBRE_PROGRAMA_FORMACION', $seguimiento->NOMBRE_PROGRAMA_FORMACION) }}" name="NOMBRE_PROGRAMA_FORMACION">
                        
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
                        <input class="form-control shadow-sm" type="text" id="NOMBRES_INSTRUCTOR" value="{{ old('NOMBRES_INSTRUCTOR', $seguimiento->NOMBRES_INSTRUCTOR) }}" name="NOMBRES_INSTRUCTOR">
                        
                        @error('NOMBRES_INSTRUCTOR')            
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="CORREO_INSTRUCTOR" style="color:#90adff;"><b>Correo del Instructor Remitente:</b></label>
                        <input class="form-control shadow-sm" type="email" id="CORREO_INSTRUCTOR" value="{{ old('CORREO_INSTRUCTOR', $seguimiento->CORREO_INSTRUCTOR) }}" name="CORREO_INSTRUCTOR"> 
                        
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
                        <input class="form-control shadow-sm" type="text" id="NOVEDAD_REMISION" value="{{ old('NOVEDAD_REMISION', $seguimiento->NOVEDAD_REMISION)}}" name="NOVEDAD_REMISION">
                        
                        @error('NOVEDAD_REMISION')            
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group col-md-3 mb-3">
                        <label for="MOTIVO_REMISION" style="color:#90adff;"><b>Motivo de Remisión:</b></label>
                        <select class="form-select shadow-sm" id="motivo" name="MOTIVO_REMISION" onchange="mostrarOtro()" >
                            <option disabled value="" >Seleccione: </option>
                            <option value="academico" @if($seguimiento->MOTIVO_REMISION=='academico') @selected(true) @endif>Académico</option>
                            <option value="disciplinario" @if($seguimiento->MOTIVO_REMISION=='disciplinario') @selected(true) @endif>Disciplinario</option>
                            <option value="ausentismo" @if($seguimiento->MOTIVO_REMISION=='ausentismo') @selected(true) @endif>Ausentismo</option>
                            <option value="otro" @if(fnmatch('otro: *',$seguimiento->MOTIVO_REMISION)) @selected(true) @endif>Otro:</option>
                        </select>
                       
                        @error('MOTIVO_REMISION')            
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3" id="otroMotivoField" style="display: none;">
                        <label for="otroMotivo" style="color:white;"><b>.  </b></label>
                        <input type="text" class="form-control shadow-sm" id="otroMotivo" name="otroMotivo" placeholder="Escriba otro motivo" value="{{substr($seguimiento->MOTIVO_REMISION,6)}}">
                        @error('otroMotivo')
                              <small class="text-danger">
                                  {{ $message }}
                              </small>
                        @enderror
                      </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="DESCRIPCION_MOTIVO" class="form-label" style="color:#90adff;"><b>Descripcion del Motivo</b></label>
                        <textarea class="form-control shadow-sm" id="DESCRIPCION_MOTIVO" name="DESCRIPCION_MOTIVO">{{ old('DESCRIPCION_MOTIVO', $seguimiento->DESCRIPCION_MOTIVO)}}</textarea>
                        
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
                            Actualizar Seguimiento
                        </button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>

@endsection
