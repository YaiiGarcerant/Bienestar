<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style>
        * {
            scroll-behavior: smooth;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        .swiper-button-prev,
        .swiper-button-next {
            color: #72c55b;
            margin: 0 10px;
        }

        .swiper-pagination-bullet {
            background-color: #72c55b;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: float 2s ease-in-out infinite;
        }
    </style>
    <link rel="shortcut icon" href="./public/logo-sena.svg" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <title>Bienestar SENA CNCA | Bienestar al aprendiz</title>

    <title>Bienestar al Aprendiz Sena</title>

    <meta
        content="Portal oficial de bienestar al aprendiz Sena del Centro
  Nacional Colombo Alemán, podrá observar las diferentes actividades que
  se han realizado y podrá realizar la encuesta psicosocial."
        name="description">

    <meta content="Sena, Centro Nacional Colombo Aleman, Bienestar, Aprendiz Sena" name="keywords">

    <!-- Favicons -->
    <link href="{!! asset('img/sena_logo.svg') !!}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/boxicons/css/boxicons.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/glightbox/css/glightbox.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/remixicon/remixicon.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendor/swiper/swiper-bundle.min.css') !!}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">

    <!-- Sweetalert CSS -->
    <link href="{!! asset('assets/css/sweetalert2.min.css') !!}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins relative p-4 text-white-500 overflow-hidden">
    <!-- Menu Mobile -->
    <section
        class="absolute top-0 left-0 w-full h-screen z-[100] bg-black-500 flex items-center justify-center flex-col lg:hidden -translate-y-full duration-300"
        id="section-menu">
        <div class="w-24 mb-8">
            <svg viewBox="0 0 100 98">
                <path fill="white" id="path47-5" inkscape:connector-curvature="0" d="M50.3,1c-5.9,0-10.6,4.8-10.6,10.6c0,5.9,4.8,10.6,10.6,10.6
    c5.9,0,10.6-4.8,10.6-10.6v0C60.9,5.8,56.2,1,50.3,1z M15.3,25.6c-1.9,0-3.8,0.1-5.5,0.6c-1.2,0.3-2.3,0.8-3,1.5
    c-0.9,1-1,2.2-0.6,3.3c0.4,1,1.5,1.7,2.7,2.1c2.6,0.9,5.5,1.1,8.2,1.6c0.5,0.1,1.1,0.3,1.4,0.6c0.3,0.4,0.1,1-0.4,1.2
    c-0.9,0.5-2,0.5-3.1,0.4c-0.9,0-2-0.1-2.7-0.6c-0.6-0.3-0.6-0.9-0.5-1.4l-6.1,0c0,0.9,0.2,1.9,0.8,2.7c0.6,0.7,1.5,1.2,2.5,1.4
    c1.6,0.5,3.3,0.6,5,0.6c2.3,0,4.6,0,6.8-0.5c1.3-0.3,2.6-0.8,3.4-1.7c1.5-1.5,1.1-3.9-0.8-5c-1-0.6-2.2-0.9-3.4-1.2
    c-1.8-0.4-3.5-0.6-5.3-0.9c-0.6-0.1-1.3-0.2-1.8-0.5c-0.5-0.3-0.6-1,0-1.3c0.7-0.4,1.7-0.4,2.6-0.4c0.9,0,1.9,0.1,2.7,0.5
    c0.4,0.2,0.6,0.6,0.6,1l5.8,0c0-0.7-0.2-1.5-0.7-2.1c-0.6-0.8-1.7-1.3-2.8-1.6C19,25.7,17.1,25.6,15.3,25.6L15.3,25.6z M27.8,26
    l0,13.8l16.9,0l0-3H34v-2.7h9.5v-2.9H34l0-2.2l10.3,0l0-3L27.8,26z M55.7,26c0,0-5.2,0-7.8,0l0,13.8l5.9,0l0-9.3l8.1,9.3l8.1,0
    L70,26l-5.9,0l0,9.2L55.7,26z M80.6,26c0,0-6.4,9.2-9.6,13.8l6.2,0l1.5-2.5h9.6l1.4,2.5l6.9,0L87.5,26L80.6,26z M83.7,29.3l3,5
    l-6.1,0L83.7,29.3z M0.7,43.8l0.1,7.5l28.2-0.1c1.4,0.3,2.3,1.2,2,3.4L13.6,84.9l5.6,5.3L46,43.8L0.7,43.8z M54.4,43.8L80.8,90
    l5.8-5.2L69.1,54.5c-0.3-2.1,0.5-3.1,2-3.4l28.2,0.1l0-7.4L54.4,43.8z M50,51.5L25.2,93.9l6.6,3.2l16.5-27.9
    c0.6-0.5,1.1-0.7,1.7-0.7c0.6,0,1.2,0.2,1.8,0.7l16.5,28l6.8-3.5L50,51.5z"></path>
            </svg>
        </div>

        <div class="flex flex-col gap-4 text-center text-white-600">
            <a class="menu-item px-4 py-2 text-lg hover:bg-white-500 hover:text-black-600 rounded-md duration-150"
                href="#inicio">Inicio</a>
            <a class="menu-item px-4 py-2 text-lg hover:bg-white-500 hover:text-black-600 rounded-md duration-150"
                href="#conocenos">Conócenos</a>
            <a class="menu-item px-4 py-2 text-lg hover:bg-white-500 hover:text-black-600 rounded-md duration-150"
                href="#encuesta">Encuesta</a>
            <a class="menu-item px-4 py-2 text-lg hover:bg-white-500 hover:text-black-600 rounded-md duration-150"
                href="#galería">Galería</a>
            <a class="menu-item px-4 py-2 text-lg hover:bg-white-500 hover:text-black-600 rounded-md duration-150"
                href="#contacto">Contacto</a>
        </div>

        <div class="w-max absolute top-0 right-0 -translate-x-10 translate-y-10 cursor-pointer" id="btn-close-menu">
            <img class="p-1" src="{!! asset('assets/img/close.svg') !!}" alt="close menu navbar" />
        </div>
    </section>

    <header class="mb-8 layout">
        <nav class="flex items-center justify-between px-8 py-4 gradient rounded-xl mb-6">
            <h1 class="uppercase text-2xl">
                Bienestar <span class="font-bold">SENA</span>
            </h1>

            <div class="hidden lg:flex text-white-500 gap-2">
                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="#inicio">Inicio</a>

                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="https://bienestaralaprendizcnca.blogspot.com/">Blog</a>

                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="#conocenos">Conócenos</a>

                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="#encuesta">Encuesta</a>

                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="#galería">Galería</a>

                <a class="py-2 px-4 rounded-md hover:bg-white-500 hover:text-gradient-500 duration-150"
                    href="#contacto">Contacto</a>
            </div>

            <div class="w-max lg:hidden cursor-pointer" id="btn-open-menu">
                <img class="p-1" src="{!! asset('assets/img/menu.svg') !!}" alt="open menu navbar" />
            </div>
        </nav>

        <!-- Section inicio -->
        <section class="flex flex-col p-8 items-center justify-center gradient rounded-xl lg:flex-row" id="inicio">
            <!-- Logo del sena -->
            <article class="flex items-center flex-col lg:basis-2/4">
                <div class="w-44 md:w-64">
                    <svg class="animate-float" viewBox="0 0 100 98">
                        <path fill="white" id="path47-5" inkscape:connector-curvature="0" d="M50.3,1c-5.9,0-10.6,4.8-10.6,10.6c0,5.9,4.8,10.6,10.6,10.6
              c5.9,0,10.6-4.8,10.6-10.6v0C60.9,5.8,56.2,1,50.3,1z M15.3,25.6c-1.9,0-3.8,0.1-5.5,0.6c-1.2,0.3-2.3,0.8-3,1.5
              c-0.9,1-1,2.2-0.6,3.3c0.4,1,1.5,1.7,2.7,2.1c2.6,0.9,5.5,1.1,8.2,1.6c0.5,0.1,1.1,0.3,1.4,0.6c0.3,0.4,0.1,1-0.4,1.2
              c-0.9,0.5-2,0.5-3.1,0.4c-0.9,0-2-0.1-2.7-0.6c-0.6-0.3-0.6-0.9-0.5-1.4l-6.1,0c0,0.9,0.2,1.9,0.8,2.7c0.6,0.7,1.5,1.2,2.5,1.4
              c1.6,0.5,3.3,0.6,5,0.6c2.3,0,4.6,0,6.8-0.5c1.3-0.3,2.6-0.8,3.4-1.7c1.5-1.5,1.1-3.9-0.8-5c-1-0.6-2.2-0.9-3.4-1.2
              c-1.8-0.4-3.5-0.6-5.3-0.9c-0.6-0.1-1.3-0.2-1.8-0.5c-0.5-0.3-0.6-1,0-1.3c0.7-0.4,1.7-0.4,2.6-0.4c0.9,0,1.9,0.1,2.7,0.5
              c0.4,0.2,0.6,0.6,0.6,1l5.8,0c0-0.7-0.2-1.5-0.7-2.1c-0.6-0.8-1.7-1.3-2.8-1.6C19,25.7,17.1,25.6,15.3,25.6L15.3,25.6z M27.8,26
              l0,13.8l16.9,0l0-3H34v-2.7h9.5v-2.9H34l0-2.2l10.3,0l0-3L27.8,26z M55.7,26c0,0-5.2,0-7.8,0l0,13.8l5.9,0l0-9.3l8.1,9.3l8.1,0
              L70,26l-5.9,0l0,9.2L55.7,26z M80.6,26c0,0-6.4,9.2-9.6,13.8l6.2,0l1.5-2.5h9.6l1.4,2.5l6.9,0L87.5,26L80.6,26z M83.7,29.3l3,5
              l-6.1,0L83.7,29.3z M0.7,43.8l0.1,7.5l28.2-0.1c1.4,0.3,2.3,1.2,2,3.4L13.6,84.9l5.6,5.3L46,43.8L0.7,43.8z M54.4,43.8L80.8,90
              l5.8-5.2L69.1,54.5c-0.3-2.1,0.5-3.1,2-3.4l28.2,0.1l0-7.4L54.4,43.8z M50,51.5L25.2,93.9l6.6,3.2l16.5-27.9
              c0.6-0.5,1.1-0.7,1.7-0.7c0.6,0,1.2,0.2,1.8,0.7l16.5,28l6.8-3.5L50,51.5z"></path>
                    </svg>
                </div>

                <div class="flex flex-col items-center justify-center text-white-500 text-center my-8">
                    <h1 class="text-4xl font-semibold mb-2">Bienestar al aprendiz</h1>
                    <p class="max-w-[510px]">
                        Bienvenido aprendiz SENA CNCA, esta es nuestra plataforma de
                        Bienestar al aprendiz. Aquí podrás encontrar varios recursos que
                        te facilitarán tu aprendizaje.
                    </p>

                    <button
                        class="mt-8 py-4 px-6 border-2 border-white-500 rounded-xl text-lg font-medium duration-200 text-balance hover:bg-white-500 hover:text-green-500 hover:shadow-md"
                        type="button">
                        ¿Qué es el Bienestar CNCA?
                    </button>
                </div>
            </article>

            <div class="pointer-events-none lg:basis-2/4">
                <img class="block w-full" src="{!! asset('assets/img/card-hero.svg') !!}" alt="Fotos de Bienestar SENA" />
            </div>
        </section>
    </header>

    <main class="layout">
        <!-- Sección conocenos -->
        <section class="flex flex-col items-center justify-center text-center mb-8" id="conocenos">
            <h1 class="text-3xl font-semibold text-gradient-600 mb-4">
                Bienestar al Aprendiz Sena CNCA
            </h1>

            <article class="w-full grid grid-cols-1 auto-rows-18 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <div class="grid-item lg:row-span-4">
                    <h1 class="text-xl font-semibold uppercase">
                        Estrategia de servicios para aprendices en formación
                    </h1>
                    <img class="w-32 absolute bottom-0 right-0 rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-1.svg') !!}" alt="rey ajedrez" />
                </div>

                <div class="grid-item lg:col-span-2">
                    <h1 class="text-xl font-semibold uppercase">
                        Fortalecimiento de competencias y habilidades
                    </h1>
                    <img class="w-40 absolute bottom-0 left-0 -rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-2.svg') !!}" alt="rey ajedrez" />
                </div>

                <div class="grid-item lg:row-span-4">
                    <h1 class="text-xl font-semibold uppercase">
                        Promoción de salud y prevención de enfermedades
                    </h1>
                    <img class="w-40 absolute bottom-0 right-0 rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-3.svg') !!}" alt="rey ajedrez" />
                </div>

                <div class="grid-item lg:col-span-2">
                    <h1 class="text-xl font-semibold uppercase">
                        Potenciando el bienestar del aprendiz: nuetra identidad
                    </h1>
                    <img class="w-40 absolute bottom-0 left-0 -rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-4.svg') !!}" alt="rey ajedrez" />
                </div>

                <div class="grid-item lg:row-span-2">
                    <h1 class="text-xl font-semibold uppercase">
                        Apoyos socioeconómicos para calidad de vida
                    </h1>
                    <img class="w-40 absolute bottom-0 right-0 rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-5.svg') !!}" alt="rey ajedrez" />
                </div>

                <div class="grid-item lg:row-span-2">
                    <h1 class="text-xl font-semibold uppercase">
                        Apoyos socioeconómicos para calidad de vida
                    </h1>
                    <img class="w-40 absolute bottom-0 left-0 -rotate-12 opacity-30 pointer-events-none z-[-1]"
                        src="{!! asset('assets/img/grid-6.svg') !!}" alt="rey ajedrez" />
                </div>
            </article>
        </section>

        <!-- Sección encuesta -->
        <section class="flex flex-col items-center justify-between py-12 sm:py-24 px-12 gradient rounded-xl mb-8"
            id="encuesta">
            <h1 class="text-3xl font-semibold mb-4 text-center">
                Encuesta de Bienestar
            </h1>
            <p class="sm:text-xl w-11/12 max-w-[768px] text-center text-balance">
                Bienestar al Aprendiz te invita ha realizar la siguiente encuesta con
                el fin de conocer más acerca de nuestros aprendices, por favor
                ingresar la ficha de caracterización de tu programa de formación:
            </p>

            <div class="w-full max-w-[620px] rounded-md overflow-hidden mt-4 sm:mt-10">
                <form action="{{ route('buscarFicha') }}" method="POST" class="needs-validation flex sm:flex-row items-center justify-center  h-full" novalidate>
                  
                        @csrf
                       
                            <input type="number" class="w-full border-0 outline-none bg-[#f2f2f2] text-gradient-500 flex-grow p-4 focus:bg-[#fffefb] duration-150 rounded-md sm:rounded-none"
                                placeholder="Ingresar Número de Ficha" name="ficha" required>
                            <div class="invalid-feedback fw-semibold">
                                *Debes Ingresar el número de Ficha!
                            </div>
                       
                       
                            <button type="submit" class="hidden bg-[#188f00] h-full py-4 px-6 font-medium sm:flex items-center justify-center">BUSCAR <i
                                    class="bi bi-search"></i>
                            </button>
                        
                   
                </form>
            </div>
        </section>

        <!-- Sección galería -->
        <section class="flex flex-col items-center justify-between text-center rounded-xl mb-8" id="galería">
            <h1 class="text-3xl text-gradient-500 font-semibold mb-2">Galería</h1>
            <p class="text-lg w-full max-w-[600px] text-[#137300] text-balance mb-4">
                Dale un vistazo a nuestra Galería de momentos compartidos con nuestros
                queridos aprendices Sena CNCA
            </p>

            <!-- Galería -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-1.webp') !!}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-2.webp') !!}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-3.webp') !!}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-4.webp') !!}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-5.webp') !!}" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{!! asset('assets/img/swiper-6.webp') !!}" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Sección mapa -->
        <section class="flex flex-col text-center items-center mb-8">
            <h1 class="text-3xl text-gradient-500 font-semibold mb-2">Visítanos</h1>
            <p class="text-lg w-full max-w-[720px] text-[#137300] mb-4">
                Para nosotros es un gusto escucharte, puedes encontrarnos en las
                oficinas o ambientes de bienestar de tu sede o nodo siempre habrá
                personal capacitado y dispuesto a atenderte!
            </p>

            <article class="w-full h-[420px]">
                <div id="map" class="w-full h-full rounded-xl"></div>
            </article>
        </section>

        <!-- Sección Comunicación -->
        <section class="flex flex-col items-center" id="contacto">
            <h1 class="text-3xl text-gradient-500 font-semibold mb-2 text-center">
                Canales de comunicación
            </h1>

            <article class="layout grid lg:grid-cols-3 p-8 gradient rounded-xl mb-4">
                <div class="flex flex-col items-center justify-center text-center mb-4 lg:mb-0">
                    <div class="flex items-center justify-center mb-2">
                        <img src="{!! asset('assets/img/location.svg') !!}" alt="icon location" />
                        <h3 class="text-[#fffefb] font-semibold text-xl ml-1">
                            Localización:
                        </h3>
                    </div>

                    <div class="flex flex-col">
                        <h3 class="text-white-500">Oficinas principales</h3>
                        <p class="text-white-500">Centro Colombo Alemán</p>
                        <p class="text-white-500">Calle 30</p>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center text-center mb-4 lg:mb-0">
                    <div class="flex items-center justify-center mb-2">
                        <img src="{!! asset('assets/img/mail.svg') !!}" alt="icon mail" />
                        <h3 class="text-white-500 font-semibold text-xl ml-1">Email:</h3>
                    </div>

                    <div class="flex flex-col">
                        <a href="#" class="text-white-500 hover:underline">SenaCNCA@example.es</a>
                        <a href="#" class="text-white-500 hover:underline">SenaColomboCNCA@example.es</a>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center text-center mb-4 lg:mb-0">
                    <div class="flex items-center justify-center mb-2">
                        <img src="{!! asset('assets/img/phone.svg') !!}" alt="icon phone" />
                        <h3 class="text-white-500 font-semibold text-xl ml-1">
                            Teléfonos:
                        </h3>
                    </div>

                    <div class="flex flex-col">
                        <a href="#" class="text-white-500 hover:underline">+57 324 7791</a>
                        <a href="#" class="text-white-500 hover:underline">+57 315 0001220</a>
                        <a href="#" class="text-white-500 hover:underline">+57 321 1235421</a>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <!-- Footer -->
    <footer class="gradient layout p-4 rounded-xl flex items-center justify-center flex-col text-center">
        <h1 class="text-sm">Copyright © Fabrica TIC - SENA CNCA - 2024</h1>
    </footer>

    <div id="btn-go-top"
        class="flex items-center justify-center bottom-0 right-0 w-12 h-12 bg-green-700 -translate-x-8 -translate-y-8 cursor-pointer rounded-full z-50 hover:bg-green-600 duration-100 fixed">
        <img src="{!! asset('assets/img/up.svg') !!}" alt="icon up">
    </div>

    <section id="loader"
        class="fixed top-0 left-0 w-full h-screen duration-100 bg-[#fffefb] z-[1000] flex items-center justify-center">
        <div class="w-32 block animate-pulse">
            <!--?xml version="1.0" encoding="utf-8"?-->
            <!-- Generator: Adobe Illustrator 26.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" id="svg12" sodipodi:docname="SENA logo.svg"
                xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 98"
                style="enable-background: new 0 0 100 98" xml:space="preserve">
                <sodipodi:namedview bordercolor="#666666" borderopacity="1" gridtolerance="1" guidetolerance="1"
                    id="namedview14" inkscape:current-layer="svg12" inkscape:cx="96.265104" inkscape:cy="56.747294"
                    inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:showpageshadow="false"
                    inkscape:window-height="705" inkscape:window-maximized="1" inkscape:window-width="1366"
                    inkscape:window-x="-8" inkscape:window-y="-8" inkscape:zoom="1" objecttolerance="1"
                    pagecolor="#ffffff" showgrid="false" units="px">
                    <inkscape:grid id="grid58" type="xygrid"></inkscape:grid>
                </sodipodi:namedview>
                <g id="_x23_ffffffff" transform="translate(0,-130.5)"></g>
                <path fill="#4da93a" id="path47-5" inkscape:connector-curvature="0" d="M50.3,1c-5.9,0-10.6,4.8-10.6,10.6c0,5.9,4.8,10.6,10.6,10.6
  c5.9,0,10.6-4.8,10.6-10.6v0C60.9,5.8,56.2,1,50.3,1z M15.3,25.6c-1.9,0-3.8,0.1-5.5,0.6c-1.2,0.3-2.3,0.8-3,1.5
  c-0.9,1-1,2.2-0.6,3.3c0.4,1,1.5,1.7,2.7,2.1c2.6,0.9,5.5,1.1,8.2,1.6c0.5,0.1,1.1,0.3,1.4,0.6c0.3,0.4,0.1,1-0.4,1.2
  c-0.9,0.5-2,0.5-3.1,0.4c-0.9,0-2-0.1-2.7-0.6c-0.6-0.3-0.6-0.9-0.5-1.4l-6.1,0c0,0.9,0.2,1.9,0.8,2.7c0.6,0.7,1.5,1.2,2.5,1.4
  c1.6,0.5,3.3,0.6,5,0.6c2.3,0,4.6,0,6.8-0.5c1.3-0.3,2.6-0.8,3.4-1.7c1.5-1.5,1.1-3.9-0.8-5c-1-0.6-2.2-0.9-3.4-1.2
  c-1.8-0.4-3.5-0.6-5.3-0.9c-0.6-0.1-1.3-0.2-1.8-0.5c-0.5-0.3-0.6-1,0-1.3c0.7-0.4,1.7-0.4,2.6-0.4c0.9,0,1.9,0.1,2.7,0.5
  c0.4,0.2,0.6,0.6,0.6,1l5.8,0c0-0.7-0.2-1.5-0.7-2.1c-0.6-0.8-1.7-1.3-2.8-1.6C19,25.7,17.1,25.6,15.3,25.6L15.3,25.6z M27.8,26
  l0,13.8l16.9,0l0-3H34v-2.7h9.5v-2.9H34l0-2.2l10.3,0l0-3L27.8,26z M55.7,26c0,0-5.2,0-7.8,0l0,13.8l5.9,0l0-9.3l8.1,9.3l8.1,0
  L70,26l-5.9,0l0,9.2L55.7,26z M80.6,26c0,0-6.4,9.2-9.6,13.8l6.2,0l1.5-2.5h9.6l1.4,2.5l6.9,0L87.5,26L80.6,26z M83.7,29.3l3,5
  l-6.1,0L83.7,29.3z M0.7,43.8l0.1,7.5l28.2-0.1c1.4,0.3,2.3,1.2,2,3.4L13.6,84.9l5.6,5.3L46,43.8L0.7,43.8z M54.4,43.8L80.8,90
  l5.8-5.2L69.1,54.5c-0.3-2.1,0.5-3.1,2-3.4l28.2,0.1l0-7.4L54.4,43.8z M50,51.5L25.2,93.9l6.6,3.2l16.5-27.9
  c0.6-0.5,1.1-0.7,1.7-0.7c0.6,0,1.2,0.2,1.8,0.7l16.5,28l6.8-3.5L50,51.5z"></path>
                <g id="_x23_000000ff-2" transform="matrix(0.31570611,0,0,0.23560774,-391.49698,-10.601126)"></g>
            </svg>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

<!-- Vendor JS Files -->
<script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
<script src="{!! asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') !!}"></script>
<script src="{!! asset('assets/js/sweetalert2.min.js') !!}"></script>

<!-- Template Main JS File -->
<script src="{!! asset('assets/js/main.js') !!}"></script>
<script src="{!! asset('assets/js/validarForm.js') !!}"></script>
<script src="{!! asset('assets/js/jquery.js') !!}"></script>
<script src="{!! asset('assets/js/main2.js') !!}"></script>


@if (session('error1'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Número de Ficha no Válido',
            text: 'Aprendiz el número de ficha que has ingresado es incorrecto!',
        })
    </script>
@elseif(session('error2'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Ya te Encuentras Registrado',
            text: 'Aprendiz Sena te recordamos que la encuesta psicosocial solo la puedes realizar una única vez!',
        })
    </script>
@elseif(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Aprendiz Gracias por tu Tiempo',
            text: 'La encuesta fue enviada exitosamente!',
        })
    </script>
@endif
</body>

</html>
