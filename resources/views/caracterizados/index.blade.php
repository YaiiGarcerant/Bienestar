@extends('layouts.layout')
@section('content')
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    {{-- script de sweet alert --}}
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <main class="container mb-4" style="padding-top: 3rem;background-color:white;">
        <div class="card border-0 shadow">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-3" style="color:#206695">LISTADO RESULTADOS DE ENCUESTA</h2>
                <div class="d-sm-flex justify-content-center p-3">
                    <div class="me-2 mb-3 mb-sm-0">
                        <a href="{{ route('encuesta.export') }}" class="btn btn-warning shadow-sm fw-semibold">Descargar
                            Resultados De La Encuesta <i class="fa fa-download" aria-hidden="true"></i></a>
                    </div>
                    <div class="ms-4 me-4 mb-3 mb-sm-0">
                        <button type="button" data-toggle="modal" data-target="#coordinacionModal"
                            class="btn btn-warning shadow-sm fw-semibold">Descargar Resultados Por Coordinacion <i
                                class="fa fa-download" aria-hidden="true"></i></button>
                    </div>
                    <div class="ms-2">
                        <button type="button" data-toggle="modal" data-target="#fichaModal"
                            class="btn btn-warning shadow-sm fw-semibold">Descargar Resultados Por Ficha <i
                                class="fa fa-download" aria-hidden="true"></i></button>
                    </div>
                </div>


                <section class="table-responsive mt-3 px-md-3">
                    <table class="table table-striped dt-responsive wrap table-datatable" style="width:100%"
                        id="Encuesta">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">APRENDIZ </th>
                                <th scope="col">IDENTIFICACIÓN</th>
                                <th scope="col">PROGRAMA DE FORMACIÓN</th>
                                <th scope="col">FICHA</th>
                                <th scope="col">DETALLES</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Caracterizacion as $ficha)
                                <tr>
                                    <td>{{ $ficha->NOMBRES_APRENDIZ }}</td>
                                    <td>{{ $ficha->NUMERO_DOCUMENTO }}</td>
                                    <td>{{ $ficha->PROGRAMA_FORMACION }}</td>
                                    <td>{{ $ficha->FICHA }}</td>
                                    <td class="text-center"><a href="{{ url('/caracterizados/' . $ficha->id . '/edit') }}"> <i
                                                class="fas fa-solid fa-eye" style="color:#206695;"></i></a></td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </section>
                <!-- Modal por coordinacion-->
                <div class="modal fade" id="coordinacionModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Descarga por coordinacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('encuesta.coor') }}" method="get">
                                <div class="modal-body">
                                <h6 class="modal-text my-2" id="exampleModalLabel">Seleccione el coordinador</h6>
                                    <select class="form-select" name="coordinador" required>
                                        <option selected disabled value="">Seleccione: </option>
                                        @forelse ($Coordinaciones as $coordinacion)
                                            <option value="{{ $coordinacion }}">{{ $coordinacion }}</option>
                                        @empty
                                        @endforelse
                                        <option value="">NINGUNO</option>
                                    </select>
                                    <h6 class="modal-text my-2" id="exampleModalLabel">Seleccione el tipo de descarga</h6>
                                    <select name="extension" class="form-select" required>
                                       <option selected disabled value="">Seleccione: </option>
                                       <option value="pdf">PDF</option>
                                       <option value="excel">Excel</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Descargar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Fin modal por coordinacion -->
                <!-- Modal por ficha-->
                <div class="modal fade" id="fichaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Descarga por ficha</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('encuesta.ficha') }}" method="get">
                                <div class="modal-body">
                                    <h5 class="modal-title my-2" id="exampleModalLabel">Escriba el N° de la ficha</h5>
                                    <input type="number" name="ficha" class="form-control"
                                        placeholder="Ingrese el numero de la ficha" required>
                                    <h5 class="modal-title my-2" id="exampleModalLabel">Seleccione el tipo de descarga</h5>
                                    <select name="extension" class="form-select" required>
                                       <option selected disabled value="">Seleccione: </option>
                                       <option value="pdf">PDF</option>
                                       <option value="excel">Excel</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Descargar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Fin modal por ficha -->
            </div>
        </div>
    </main>
    
@endsection
