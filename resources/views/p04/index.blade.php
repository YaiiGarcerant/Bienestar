@extends('layouts.layout')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('assets/css/sweetalert2.min.css') }}" rel="stylesheet">
    {{-- script de sweet alert --}}
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <main class="container" style="padding-top: 3rem; background-color:white;">
        <div class="card border-0 shadow">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-3" style="color:#206695;">Listado de Registros PE-04</h2>
                <form action="{{ route('EnviarPE04') }}" method="post" enctype="multipart/form-data"
                    class="row justify-content-center needs-validation" novalidate>
                    @csrf
                    <div class="col-md-11">
                        <label for="PE_04" class="form-label text-dark fs-5 fw-semibold">Importar registros archivo excel
                            de nuevas fichas:</label>
                        <div class="col-12 d-flex mb-2 mb-xl-0 justify-content-between">
                            <input type="file" accept=".xlsx , .xls" class="form-control shadow-sm col-7" id="PE_04"
                                name="PE_04" aria-label="file example" required>
                            <div class="invalid-feedback fw-semibold fs-6">
                                Por favor seleccione el archivo excel(Fichas_CNCA).
                            </div>

                            <button type="submit" class="btn btn-success shadow-sm fw-semibold mb-2 mb-xl-0">Importar <span
                                    class="d-none d-md-inline">Archivo <i class="fa fa-upload"
                                        aria-hidden="true"></i></span></button>
                            <a class="btn btn-warning shadow-sm fw-semibold me-3 mb-2 mb-xl-0"
                                href="{{ asset('Fichas_CNCA.xls') }}" download>Descargar <span
                                    class="d-none d-md-inline">Plantilla <i class="fa fa-download"
                                        aria-hidden="true"></i></span></a>
                        </div>
                    </div>

                </form>

                <section class="table-responsive mt-5 px-md-3">
                    <table class="table table-striped dt-responsive wrap" style="width:100%" id="tablaFiltro">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Ficha</th>
                                <th scope="col">Nombre del programa</th>
                                <th scope="col">Nivel de formacion</th>
                                <th scope="col">Fecha inicial</th>
                                <th scope="col">Fecha final</th>
                                <th scope="col">Ver</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($P04 as $p04)
                                <tr>
                                    <td>{{ $p04->NUM_FICHA }}</td>
                                    <td>{{ $p04->PROGRAMA_FORMACION }}</td>
                                    <td>{{ $p04->NIVEL_FORMACION }}</td>
                                    <td>{{ $p04->FECHA_INICIO_FICHA }}</td>
                                    <td>{{ $p04->FECHA_TERMINACION_FICHA }}</td>
                                    <td><a href="{{ url('/p04/' . $p04->id . '/edit') }}"> <i class="fas fa-solid fa-eye"
                                                style="color:#206695;"></i></a></td>

                                </tr>
                            @empty
                                <script>
                                    Swal.fire({
                                        title: "Donde estan los datos?",
                                        text: "No hay datos cargados aun, ",
                                        icon: "question"
                                    });
                                </script>
                                <tr>
                                    <td>Sin Datos</td>
                                    <td>Sin Datos</td>
                                    <td>Sin Datos</td>
                                    <td>Sin Datos</td>
                                    <td>Sin Datos</td>
                                    <td>Sin Datos</td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </section>

            </div>
        </div>
        <div class="col-md-12 bg-white p-3 mb-4 shadow-sm">
            <div class="">

            </div>
        </div>

    </main>

    <script>
        $(document).ready(function() {
            $('#tablaFiltro').DataTable();
        });
    </script>

    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    @if (isset($errors) && $errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error en la Importación',
                text: 'Las columnas o datos del archivo excel no son validos!',
            })
        </script>
    @endif
@endsection
