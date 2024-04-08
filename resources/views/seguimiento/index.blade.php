@extends('layouts.layout')
@section('content')
<main class="container" style="padding-top: 3rem;background-color:white;">
    <div class="card border-0 shadow">
        <div class="card-body p-5">
            <div class="d-sm-flex justify-content-end mb-3 mb-md-0">
                <a href="seguimiento/create" class="fw-semibold d-none d-sm-inline-block btn btn-success shadow-sm">
                    <i class="fas fa-solid fa-plus text-white-50"></i> Generar Remisión
                </a>
            </div>
            <h2 class="card-title text-center mb-3" style="color:#206695">LISTADO DE SEGUIMIENTOS</h2>
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
                                            <a class="btn btn-info" href="{{url('/seguimiento/'.$seguimiento->id.'/edit')}}"> 
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-5">
                                            
                                            <form action="{{url('/seguimiento/'.$seguimiento->id)}}" method="post" id="formEliminar">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                
                                                <a href="#" class="btn btn-warning" onClick="confirmar()">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="col-5">
                                            <a class="btn btn-danger" href="{{route('seguimiento.pdf',['id'=>$seguimiento->id])}}"> 
                                                <i class="fas fa-file-pdf"></i>
                                            </a>
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

<script src="{{asset('assets/js/sweetalert2.min.js')}}"></script>
<script>
    function confirmar(){
        Swal.fire({
            title: 'Seguro que quieres eliminar este registro de seguimiento?',
            showDenyButton: true,
            showCancelButton: true,
            showConfirmButton: false,
            denyButtonText: `Eliminar`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                $('#formEliminar').submit();
            }
        })
    }
</script>
@endsection

