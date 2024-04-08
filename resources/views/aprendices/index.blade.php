@extends('layouts.layout')
@section('content')
<main class="container" style="background-color:white;">
    <div class="card border-0 shadow">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-end mb-3 mb-md-0">
                <a href="seguimiento/create" class="fw-semibold d-none d-sm-inline-block btn btn-success shadow-sm">
                    <i class="fas fa-solid fa-plus text-white-50"></i> Generar Remisión
                </a>
            </div>
            <h2 class="card-title text-center mb-3" style="color:#90adff">LISTADO DE APRENDICES CNCA</h2>
            <section class="table-responsive mt-5 px-md-3">
                <table class="table table-striped dt-responsive wrap" style="width:100%" id="tablaFiltro">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">APRENDIZ</th>
                            <th scope="col">IDENTIFICACIÓN</th>
                            <th scope="col">MOTIVO DE REMISIÓN</th>
                            <th scope="col">FICHA</th>
                            <th scope="col">PROGRAMA</th>
                            <th scope="col">INSTRUCTOR</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seguimientos as $seguimiento)
                            <tr>
                                <td>{{ $seguimiento->NOMBRES_APRENDIZ}}</td>
                                <td>{{ $seguimiento->NUMERO_DOCUMENTO}}</td>
                                <td>{{ $seguimiento->MOTIVO_REMISION}}</td>
                                <td>{{ $seguimiento->IDENTIFICADOR_FICHA}}</td>
                                <td>{{ $seguimiento->NOMBRE_PROGRAMA_FORMACION}}</td>
                                <td>{{ $seguimiento->NOMBRES_INSTRUCTOR}}</td>
                                <td> 
                                    <!--<i [routerLink]="['/editarRemision',REMISION._id]" class="fas fa-editxt-primary" te></i>-->
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-5">
                                            <a class="btn btn-warning" href="{{url('/seguimiento/'.$seguimiento->id.'/edit')}}"> 
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-5">
                                            
                                            <form action="{{url('/seguimiento/'.$seguimiento->id)}}" method="post" id="formEliminar">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                
                                                <a href="#" class="btn btn-danger" onClick="confirmar()">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
            
        </div>
    </div>
</main>

<div class="container">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Aprendices</h1>
        <!--
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> Crear sede
         </button>-->
    </div>
    <div class="scrollable">
        <h3  style="color:#4e8e37" class="box-title m-b-20 text-center"> <strong> Listado de aprendices </strong> </h3>
    </div>

        <table class="table table-hover">
           <thead>
              <tr class="text-center">
                <th>Tipo Documento</th>
                <th>Identificación</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Ficha</th>
              </tr>
           </thead>
      </table>
</div>
@endsection
