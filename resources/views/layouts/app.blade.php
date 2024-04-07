<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="d-flex conteiner w-100 h-100 position-absolute">
        <header class="h-100  d-grid" >
            <div class="container position-relative w-auto h-25 align-content-center d-flex flex-column mt-4 gap-5">
                <img src="/senalogo.svg" alt="" class="" >
                <div class="w-100 d-flex flex-column gap-4  justify-center align-items-center">
                     <a href=""><i class="bi bi-person-fill"></i> Administrador</a>
                    <a href="">Reporte</a>
                    <hr>
                    <a href="">PE-04</a>
                    <a href="">Encuesta</a>
                    <a href="">CRUD</a>
                    <a href="">Seguimiento</a>
                    <hr>
                    <a href="">Cerrar sesion</a>
                </div>


            </div>


        </header>
        <main class=" main h-100  rounded-3 d-grid">

            @yield('content')
            {{-- <section class="d-inline-flex p-2">

            </section>
            <section>

            </section> --}}
        </main>
    </div>


</body>
</html>
