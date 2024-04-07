<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Sistema de Control, Inventario, Programación y Ejecución SENA Regional Atlántico" name="description">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienestar|ADMIN  </title>
    <link rel="shortcut icon" href="{{ asset('img/logo_blanco.svg') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <main class="h-100 gradient-form" style="background-color: #F7F9F9;">
        <div class="container py-5 h-100">

            <section class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">

                    <article class="card rounded-3 text-black">
                        <div class="row g-0 shadow">

                            <div class="col-lg-6">
                                <div class="card-body p-md-4 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{ asset('img/CIPELogo.svg') }}" width="150px" alt="logo">
                                    </div>

                                    <form method="POST" action="{{ route('login') }}"
                                        class="mt-3 login needs-validation" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label for="identificacion" class="form-label fw-semibold">Número de
                                                Identificación:</label>
                                            <input type="number" class="form-control form-control-lg shadow-sm"
                                                id="identificacion" name="email"
                                                placeholder="Ingrese su identificación" required>
                                            <div class="invalid-feedback fw-medium" style="font-size:16px;">
                                                <i class="bi bi-exclamation-circle"></i> Este campo es obligatorio!
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label fw-semibold">Clave de
                                                Usuario:</label>
                                            <input type="password" class="form-control form-control-lg shadow-sm"
                                                id="password" name="password" placeholder="Ingrese su clave" required>
                                            <div class="invalid-feedback fw-medium" style="font-size:16px;">
                                                <i class="bi bi-exclamation-circle"></i> Este campo es obligatorio!
                                            </div>
                                        </div>

                                        <div class="text-center pt-3">
                                            <button
                                                class="btn text-white btn-lg rounded-3 shadow btn-block fw-smibold gradient-custom-2 mb-3 "
                                                type="submit">
                                                INGRESAR
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white p-3 p-md-4 mx-md-4">
                                    <div class="text-center">
                                        <img src="{{ asset('img/logo_blanco.svg') }}" width="150px" alt="logo Sena">
                                    </div>
                                    <h4 class="mt-3 text-center">
                                        Sistema de Control, Inventario, Programación y Ejecución
                                    </h4>
                                    <h5 class="text-center">
                                        SENA Regional Atlántico
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </article>

                </div>
            </section>

        </div>
    </main>

    @if (isset($errors) && $errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Usuario no Encontrado',
                text: 'Número de identificación o clave incorrectos!',
            });
        </script>
    @endif

    <!--Script-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
