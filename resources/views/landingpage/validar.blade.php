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
<body class="bg-light d-flex flex-column h-100">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background: #39A900">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="encuesta logo">
                <h1><a href="#">Encuesta Psicosocial Bienestar Sena CNCA</a></h1>
            </div>
        </div>
    </header><!-- End Header -->

    <main class="container my-5">
        <section class="row justify-content-center">
            <div class="col-lg-8 col-xxl-7 p-0">

                <div class="card border-0 rounded-4 shadow">

                    <div class="card-header text-center text-white" style="background: #39A900">
                        <h3 class="mb-0">Ficha de Caracterización</h3>
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-3 d-none d-md-flex align-items-center justify-content-center">
                                <img src="{!! asset('img/sena_logo.svg') !!}" alt="Logo Sena" class="img-fluid">
                            </div>

                            <div class="col-md-8 pt-md-2">
                                <h4 class="card-title" style="color: #39A900">{{$ficha->NUM_FICHA}} - {{$ficha->PROGRAMA_FORMACION}}</h4>
                                <p class="card-text text-secondary fw-semibold">
                                    Aprendiz Sena del programa de formación
                                    <span class="color-sena">{{$ficha->NIVEL_FORMACION}} EN {{$ficha->PROGRAMA_FORMACION}}</span>
                                    con número de ficha <span class="color-sena">{{$ficha->NUM_FICHA}}</span>,
                                    para continuar con la encuesta psicosocial deberas ingresar tu número de identificación:
                                </p>
                            </div>
                        </div>


                        <form action="{{ route('validarAprendiz') }}" method="post" class="form-datos-aprendiz row justify-content-center px-5 needs-validation" novalidate>
                            @csrf
                            <div class="form-group col-md-6 mb-3">
                                <label for="tipoDocumento" class="form-label fw-semibold">Tipo de Documento:</label>
                                <select  class="form-select border border-2 shadow" id="tipoDocumento" name="tipoDocumento" required>
                                    <option selected disabled value="">Seleccione.. </option>
                                    <option value="Cedula Ciudadania"> Cedula de Ciudadanía </option>
                                    <option value="Cedula Extranjeria"> Cedula de Extranjería </option>
                                    <option value="Tarjeta Identidad"> Tarjeta de Identidad </option>
                                    <option value="Pasaporte"> Pasaporte </option>
                                    <option value="Identificacion personal"> Número de Identificación Personal </option>
                                    <option value="Identificacion Tributaria"> Número de Identificación Tributaría </option>
                                    <option value="Permiso de Protección Personal"> Permiso de Protección Personal </option>
                                </select>
                                <div class="invalid-feedback fw-semibold mt-2 ps-1">
                                    <i class="bi bi-exclamation-circle-fill"></i> Por favor selecciona una opción.
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-3">
                                <label for="numeroDocumento" class="form-label fw-semibold">Número Documento:</label>
                                <input type="number" class="form-control border border-2 shadow" name="numeroDocumento" id="numeroDocumento" placeholder="Ingresa tu número de documento" required>
                                <div class="invalid-feedback fw-semibold mt-2 ps-1">
                                    <i class="bi bi-exclamation-circle-fill"></i> Por favor ingresa tu número de identificación.
                                </div>
                            </div>

                            <input type="hidden" name="ficha" value="{{$ficha->NUM_FICHA}}">

                            <div class="text-center my-3">
                                <button type="submit" class="btn btn-lg shadow">Enviar Datos <i class="bi bi-send-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer container-fluid p-3 text-white text-center" style="">
        <small class="fw-semibold">Copyright © Fabrica TIC - Sena CNCA 2023</small>
    </footer>

    <!-- Vendor JS Files -->
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/validarForm.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.js') !!}"></script>
    <script src="{!! asset('assets/js/validarForm.js') !!}"></script>
</body>
</html>
