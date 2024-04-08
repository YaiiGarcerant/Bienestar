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
    <div class="d-flex conteiner w-100  position-absolute">
        <header id="header" class="h-100 ocultar" >
            <div class="container-header  w-auto h-25 align-content-center d-flex flex-column gap-5">
                <img src="/senalogo.svg" class="logosena"  alt="" class="" >
                <div class="container-link d-flex flex-column gap-4  justify-center align-items-center">
                     <a href=""><i class="bi bi-person-fill"></i> Administrador</a>
                    <a href=""> <i class="bi bi-bar-chart-fill"></i>Reporte</a>
                    <hr>
                   
                    <a href=""><i class="bi bi-file-earmark"></i>PE-04</a>
                    <a href=""><i class="bi bi-person-square"></i>Encuesta</a>
                    <a href=""><i class="bi bi-display"></i>CRUD</a>
                    <a href=""><i class="bi bi-stack"></i>Seguimiento</a>
                    <hr>
                    <a href=""><i class="bi bi-door-closed"></i>Cerrar sesion</a>
                </div>


            </div>


        </header>
        <main class=" main h-100  rounded-3 ">

            <nav>
                <p>Bienestar</p>
                <i id="abrir" class="bi bi-list"></i>
            </nav>

            <div class="contenido">
                @yield('content')
            </div>
          
            {{-- <section class="d-inline-flex p-2">

            </section>
            <section>

            </section> --}}
        </main>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
    
</body>
</html>
