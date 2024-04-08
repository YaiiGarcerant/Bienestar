

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIBA-Centro-Nacional-Colombo-Alemán</title>
    <link rel="icon" href="{{asset("img/logoverde.png")}}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{asset('libs/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>

    <div class="container">
        <form action="{{ url('/caracterizados') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card m-b-12 bg-light" >
                <div class="card-body">

            <div class="scrollable">
                <h3 class="box-title m-b-20 text-center"> <strong> Ficha de Caracterizacion </strong> </h3>
            </div>

            <div aling="left">
                <h3 style="color:#4e8e37" class="box-title m-b-20 text-left"> <strong> A.Informacion Personal </strong> </h3>
            </div>

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Nombre y Apellidos</b><code>*</code></label>
                    <input class="form-control" type="text" formControlName="NOMBRES_APRENDIZ" name="NOMBRES_APRENDIZ"
                        id="NOMBRES_APRENDIZ" placeholder="Nombre Completo " required>

                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Genero</b><code>*</code></label>
                    <input class="form-control" type="text" formControlName="GENERO_APRENDIZ"
                        placeholder="Digite su genero" name="GENERO_APRENDIZ" id="GENERO_APRENDIZ" required>

                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Correo Electronico</b><code>*</code></label>
                    <input class="form-control" type="email" formControlName="CORREO_APRENDIZ" placeholder="E-Mail"
                        name="CORREO_APRENDIZ" id="CORREO_APRENDIZ" required>

                </div>
            </div>

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Numero de Contacto</b><code>*</code></label>
                    <input type="number" class="form-control"formControlName="NUMERO_CONTACTO" name="NUMERO_CONTACTO"
                        placeholder="No. Telefono/Celular" id="NUMERO_CONTACTO" required>

                </div>

                <div class="form-group col-md-4">
                    <label for="example"><b>Fecha de Nacimiento </b><code>*</code></label>
                    <input placeholder="Select date" type="Date" formControlName="FECHA_NACIMIENTO"
                        name="FECHA_NACIMIENTO" class="form-control" id="FECHA_NACIMIENTO" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Lugar de nacimiento</b><code>*</code></label>
                    <input class="form-control" type="text" id="LUGAR_NACIMIENTO" formControlName="LUGAR_NACIMIENTO"
                        name="LUGAR_NACIMIENTO" placeholder="Digite " required>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="inputEmail2"><b>Tipo de Documento</b><code>*</code></label>
                    <select formControlName="TIPO_DOCUMENTO" id="TIPO_DOCUMENTO" required class="form-select form-control"
                        id="floatingSelectCargo" name="TIPO_DOCUMENTO" aria-label="Floating label select example">
                        <option selected disabled value=""> Elige </option>
                        <option value="Cedula Ciudadania"> Cedula de Ciudadania </option>
                        <option value="Cedula Extranjeria"> Cedula de Extranjeria </option>
                        <option value="Identificacion personal"> Numero de identificacion personal </option>
                        <option value="Identificacion Tributaria"> Numero de Identificacion Tributaria </option>
                        <option value="Tarjeta Identidad"> Tarjeta de Identidad </option>
                        <option value="Pasaporte"> Pasaporte </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Numero de Documento de Identidad</b><code>*</code></label>
                    <input class="form-control" type="number" id="NUMERO_DOCUMENTO" name="NUMERO_DOCUMENTO"
                        formControlName="NUMERO_DOCUMENTO" placeholder="No. de Documento" required>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Departamento donde reside</b><code>*</code></label>
                    <select formControl id="DEPART_RESIDENCIA" name="DEPART_RESIDENCIA"
                        required class="form-select form-control" id="floatingSelectCargo"
                        aria-label="Floating label select example" >
                        <option selected disabled value=""> SLECCIONE </option>

                    </select>
                </div>

            </div>

            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Municipio donde reside</b><code>*</code></label>
                    <select name="MUNI_RESIDENCIA" id="MUNI_RESIDENCIA" required
                        class="form-select form-control" id="floatingSelectCargo1"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Direccion de Residencia</b><code>*</code></label>
                    <input class="form-control" type="text" id="DIREC_RESIDENCIA" name="DIREC_RESIDENCIA"
                        placeholder="Digite" required>

                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Numero de Hermanos</b><code>*</code></label>
                    <input class="form-control" type="number" id="NUM_HERMANOS" Name="NUM_HERMANOS"
                        placeholder="No. de Hermanos" required>

                </div>

            </div>


            <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Estado civil</b><code>*</code></label>
                    <select Name="ESTADO_CIVIL" id="ESTADO_CIVIL" required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Soltero"> Soltero </option>
                        <option value="Casado"> Casado </option>
                        <option value="Union libre"> Union libre </option>
                        <option value="Separado/divorciado"> Separado/divorciado </option>
                        <option value="Viudo"> Viudo </option>
                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Tiene hijos</b><code>*</code></label>
                    <select Name="HIJOS" id="HIJOS" required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Si" id="Hijos"> Si </option>
                        <option value="No" id="Hijos"> No </option>

                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="inputEmail5"><b>Cuantos?</b><code>*</code></label>
                    <input type="number" class="form-control" Name="NUM_HIJOS" id="NUM_HIJOS" name="NUM_HIJOS"
                        placeholder="Digite">
                </div>

            </div>

            <hr color="black">

            <div aling="left">
                <h3 style="color:#4e8e37" class="box-title m-b-20 text-left"> <strong> B. Informacion Academica </strong>
                </h3>
            </div>

            <div class="row justify-content-center">
                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Programa de formacion</b><code>*</code></label>
                    <input type="text" class="form-control" value="{{ $ficha->PROGRAMA_FORMACION }}"
                        id="PROGRAMA_FORMACION" name="PROGRAMA_FORMACION" placeholder="Digite" readonly>

                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Numero de ficha</b><code>*</code></label>
                    <input type="number" class="form-control" value="{{ $ficha->NUM_FICHA }}" id="FICHA"
                        name="FICHA" placeholder="Digite" readonly>

                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Jornada de su programa de formacion</b><code>*</code></label>
                    <input type="text" class="form-control" value="{{ $ficha->TIPO_JORNADA }}" id="JORNADA"
                        name="JORNADA" placeholder="Digite" readonly>

                </div>

            </div>

            <div class="row justify">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>A que coordinacion academica pertenece</b><code>*</code></label>
                    <input type="text" class="form-control" value="{{ $ficha->NOMBRE_CENTRO }}" id="COORDINACION"
                        name="COORDINACION" placeholder="Digite" readonly>

                </div>
            </div>

            <hr color="black">

            <div aling="left">
                <h3 style="color:#4e8e37" class="box-title m-b-20 text-left"> <strong> C. Informacion Familiar, Informacion
                        Socieconomica y de Salud </strong> </h3>
            </div>

            <div class="row justify-content-center col-md-12">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Numero de personas que viven con usted</b><code>*</code></label>
                    <input type="number" class="form-control" Name="NUM_PER_VIVE" id="NUM_PER_VIVE"
                        placeholder="Digite" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Parentesco con quienes vivo</b><code>*</code></label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Hermano" Name="Hermano"value="Hermano">
                        <label class="form-check-label" for="Hermano">Hermanos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Padres" Name="Padres" value="Padres">
                        <label class="form-check-label" for="Padres">Padres</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Abuelo" Name="Abuelo" value="Abuelo">
                        <label class="form-check-label" for="Abuelo">Abuelos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Tios" Name="Tios" value="Tios">
                        <label class="form-check-label" for="Tios">Tios</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Amigos" Name="Amigos" value="Amigos">
                        <label class="form-check-label" for="Amigos">Amigos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Otro_Vive" Name="Otro_Vive"
                            value="Otro_Vive">
                        <label class="form-check-label" for="Otro_Vive">Otros</label>
                    </div>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo12"><b>Tiene Personas que dependan economicamente de
                            usted?</b><code>*</code></label>
                    <select Name="PER_QUEDEPENDAN" id="PER_QUEDEPENDAN" required class="form-select form-control"
                        id="floatingSelectCargo12" aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Si" id="perdependen"> Si </option>
                        <option value="No" id="perdependen"> No </option>

                    </select>
                </div>

            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cuantas personas dependen economicamente de usted</b><code>*</code></label>
                    <input type="number" class="form-control"Name="CUANTAS_PER" id="CUANTAS_PER" placeholder="Digite">

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Padece de alguna enfermedad que requiera cuidados medicos
                            especiales?</b><code>*</code></label>
                    <select Name="PADECE_ENFERMEDAD" required class="form-select form-control" id="PADECE_ENFERMEDAD"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Si" id="padece"> Si </option>
                        <option value="No" id="padece"> No </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cual?</b><code>*</code></label>
                    <input class="form-control" type="text" id="CUAL_ENFERMEDAD" Name="CUAL_ENFERMEDAD"
                        placeholder="Digite" required>

                </div>


            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Requiere de algun medicamento permanente?</b><code></code></label>
                    <select Name="REQ_MEDICAMENTO" required class="form-select form-control" id="REQ_MEDICAMENTO"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Si" id="MEDICAMENTO"> Si </option>
                        <option value="No" id="MEDICAMENTO"> No </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cual?</b><code>*</code></label>
                    <input class="form-control" type="text" Name="CUAL_MEDICAMENTO" id="CUAL_MEDICAMENTO"
                        placeholder="Digite" required>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Usted se encuentra en condicion de
                            discapacidad?</b><code>*</code></label>
                    <select Name="TIENE_DISCAPACIDAD" required class="form-select form-control" id="TIENE_DISCAPACIDAD"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Si" id="DISCAPACIDAD"> Si </option>
                        <option value="No" id="DISCAPACIDAD"> No </option>

                    </select>
                </div>
            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Tipo de discapacidad</b><code>*</code></label>
                    <select Name="TIPO_DISCAPACIDAD" required class="form-select form-control" id="TIPO_DISCAPACIDAD"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Visual"> Visual </option>
                        <option value="Auditiva"> Auditiva </option>
                        <option value="Sordo/Ceguera"> Sordo - Ceguera </option>
                        <option value="Fisica"> Fisica </option>
                        <option value="Cognitiva"> Cognitiva </option>
                        <option value="Psicosocial"> Psicosocial </option>
                        <option value="Multiple"> Multiple </option>
                        <option value="No Aplica"> No Aplica </option>


                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Se encuentra ubicado en una de las siguientes
                            poblaciones</b><code>*</code></label>
                    <select Name="ENCUENTRA_POBLACIONES" required class="form-select form-control"
                        id="ENCUENTRA_POBLACIONES" aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Comunidad LGBTI"> Comunidad LGBTI </option>
                        <option value="Indigenas"> Indigenas </option>
                        <option value="Jovenes Vulnerables"> Jovenes Vulnerables </option>
                        <option value="Adolescentes-Conflicto"> Adolescentes en conflicto con la Ley </option>
                        <option value="Mujer Cabeza Hogar"> Mujer Cabeza de Hogar </option>
                        <option value="Poblacion Afro"> Poblacion Afro </option>
                        <option value="Raizales"> Raizales </option>
                        <option value="Palenquera"> Palenquera </option>
                        <option value="Ninguna Poblacion"> Ninguna </option>
                        <option value="Otra Poblacion"> Otras </option>



                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Clase de Vivienda</b><code>*</code></label>
                    <select Name="CLASE_VIVIENDA" required class="form-select form-control" id="CLASE_VIVIENDA"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Urbana"> Urbana </option>
                        <option value="Rural"> Rural </option>

                    </select>
                </div>


            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Estrato social de su vivienda</b><code>*</code></label>
                    <select Name="ESTRATO_SOCIAL" required class="form-select form-control" id="ESTRATO_SOCIAL"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Estrato 1"> 1 </option>
                        <option value="Estrato 2"> 2 </option>
                        <option value="Estrato 3"> 3 </option>
                        <option value="Estrato 4"> 4 </option>
                        <option value="Estrato 5"> 5 </option>
                        <option value="Estrato 6"> 6 </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Con que servicios publicos cuenta en su
                            vivienda</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Acueducto"id="Acueducto"
                            value="Acueducto">
                        <label class="form-check-label" for="Acueducto">Acueducto y Alcantarillado</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="EnergiaElectrica"id="EnergiaElectrica"
                            value="EnergiaElectrica">
                        <label class="form-check-label" for="EnergiaElectrica">Energia Electrica</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="SerTelefonico" id="SerTelefonico"
                            value="SerTelefonico">
                        <label class="form-check-label" for="SerTelefonico">Servicio Telefonico</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Gas" id="Gas" value="Gas">
                        <label class="form-check-label" for="Gas">Gas natural</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Internet" id="Internet" value="Internet">
                        <label class="form-check-label" for="Internet">Internet</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="OtroSer"id="OtroSer" value="OtroSer">
                        <label class="form-check-label" for="OtroSer">Otros</label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Que tipo de herramientas tecnologicas tiene en su
                            casa</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Computador" id="Computador"
                            value="Computador">
                        <label class="form-check-label" for="Computador">Computador</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Tablet" id="Tablet" value="Tablet">
                        <label class="form-check-label" for="Tablet">Tablet</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Celular" id="Celular" value="Celular">
                        <label class="form-check-label" for="Celular">Celular</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="NingunoTec"id="NingunoTec"
                            value="NingunoTec">
                        <label class="form-check-label" for="NingunoTec">Ninguno</label>
                    </div>

                </div>


            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Como se moviliza de su cada al centro de
                            formacion?</b><code>*</code></label>
                    <select Name="COMO_MOVILIZA" required class="form-select form-control" id="COMO_MOVILIZA"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Transporte"> Transporte Publico </option>
                        <option value="Moto"> Moto Propia </option>
                        <option value="Moto Taxi"> Moto Taxi </option>
                        <option value="Bicicleta"> Bicicleta </option>
                        <option value="Caminando"> Caminando </option>
                        <option value="Vehiculo"> Vehiculo Familiar/Propio </option>
                        <option value="Ninguno"> Ninguno (formacion virtual) </option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Si hay conflictos en su familia, como los
                            resuelven?</b><code>*</code></label>
                    <select Name="CONFLICTOS" required class="form-select form-control" id="CONFLICTOS"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Dialogo"> Dialogo </option>
                        <option value="Silencio"> Silencio </option>
                        <option value="Agresion Fisica"> Agresion Fisica </option>
                        <option value="Agresion Verbal"> Agresion Verbal </option>
                        <option value="Huida"> Huida </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Como es su relacion con los miembros de su
                            familia</b><code>*</code></label>
                    <select Name="RELACION_CON_FAMILIA" required class="form-select form-control"
                        id="RELACION_CON_FAMILIA" aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Buena"> Buena </option>
                        <option value="Distante"> Distante </option>
                        <option value="Agresiva"> Agresiva</option>
                        <option value="No tengo Relacion"> No tengo Relacion con ellos </option>


                    </select>
                </div>



            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>De los siguientes eventos cuales se han presentado en su
                            hogar?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="ViolenciaIntrafamiliar"
                            id="ViolenciaIntrafamiliar" value="ViolenciaIntrafamiliar">
                        <label class="form-check-label" for="ViolenciaIntrafamiliar">Violencia Intrafamiliar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="AbusoSexual" id="AbusoSexual"
                            value="AbusoSexual">
                        <label class="form-check-label" for="AbusoSexual">Abuso Sexual</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Alcoholismo"id="Alcoholismo"
                            value="Alcoholismo">
                        <label class="form-check-label" for="Alcoholismo">Alcoholismo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Drogadiccion"id="Drogadiccion"
                            value="Drogadiccion">
                        <label class="form-check-label" for="Drogadiccion">Drogadiccion</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="NingunEvento"id="NingunEvento"
                            value="NingunEvento">
                        <label class="form-check-label" for="NingunEvento">Ninguno</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="OtroEvento"id="OtroEvento"
                            value="OtroEvento">
                        <label class="form-check-label" for="OtroEvento">Otras</label>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cual de las siguientes problematicas afecta el sector en el cual
                            esta ubicada su vivienda?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Delincuencia" id="Delincuencia"
                            value="Delincuencia">
                        <label class="form-check-label" for="Delincuencia">Delincuencia Comun</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="VentaSustancias" id="VentaSustancias"
                            value="VentaSustancias">
                        <label class="form-check-label" for="VentaSustancias">Venta Y/O Consumo de Sustancias
                            Psicoactivas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="PobrezaExtrema" id="PobrezaExtrema"
                            value="PobrezaExtrema">
                        <label class="form-check-label" for="PobrezaExtrema">Pobreza Extrema</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="NingunaPro"id="NingunaPro"
                            value="NingunaPro">
                        <label class="form-check-label" for="NingunaPro">Ninguno</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="OtraPro" id="OtraPro" value="OtraPro">
                        <label class="form-check-label" for="OtraPro">otras</label>
                    </div>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cuenta con Sisben?</b><code>*</code></label>
                    <select Name="CUENTA_CON_SISBEN" required class="form-select form-control" id="CUENTA_CON_SISBEN"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="SI" id="SISBEN"> Si </option>
                        <option value="NO" id="SISBEN"> No </option>

                    </select>
                </div>


            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="inputEmail5"><b>Nombre de la Eps a la que se Encuentra Afliado</b><code>*</code></label>
                    <input type="text" class="form-control"Name="NOMBRE_EPS" id="NOMBRE_EPS" placeholder="Digite"
                        required>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cual es su Regimen de Afiliacion a Salud</b><code>*</code></label>
                    <select Name="AFILIACION_SALUD" required class="form-select form-control" id="AFILIACION_SALUD"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Subsidiado"> Subsidiado </option>
                        <option value="Contributivo"> Contributivo </option>
                        <option value="Ninguno_Afi"> Ninguno </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>De los Siguientes Programas de Gobierno, a Cual
                            Pertenece?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="FamiliasAccion"id="FamiliasAccion"
                            value="FamiliasAccion">
                        <label class="form-check-label" for="FamiliasAccion">Familias en Accion</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="JovenesAccion"id="JovenesAccion"
                            value="JovenesAccion">
                        <label class="form-check-label" for="JovenesAccion">Jovenes en Accion </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="IngresoSolidario" id="IngresoSolidario"
                            value="IngresoSolidario">
                        <label class="form-check-label" for="IngresoSolidario">Ingreso Solidario</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="ColombiaMayor"id="ColombiaMayor"
                            value="ColombiaMayor">
                        <label class="form-check-label" for="ColombiaMayor">Colombia Mayor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="OtroPrograma" id="OtroPrograma"
                            value="OtroPrograma">
                        <label class="form-check-label" for="OtroPrograma">Otro</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="NingunPrograma" id="NingunPrograma"
                            value="NingunPrograma">
                        <label class="form-check-label" for="NingunPrograma">Ninguno</label>
                    </div>

                </div>




            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Trabaja actualmente?</b><code>*</code></label>
                    <select Name="TRABAJA_ACTUALMENTE" required class="form-select form-control" id="TRABAJA_ACTUALMENTE"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="SI" id="TRABAJA"> Si </option>
                        <option value="NO" id="TRABAJA"> No </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Tipo de Trabajo</b><code>*</code></label>
                    <select Name="TIPO_TRABAJO" required class="form-select form-control" id="TIPO_TRABAJO"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="Independiente"> Independiente (Por su cuenta) </option>
                        <option value="Dependiente"> Dependiente (Vinculo con una empresa) </option>
                        <option value="Por Jornales"> Por Jornales (Por dias) </option>
                        <option value="Otro Trabajo"> Otras </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Teniendo en cuenta el SMMLV Actual ($1.160.000), Calcule el Rango
                            Toral de Ingresos de su Hogar (Tenga en cuenta el ingreso de otros miembros de la familia con
                            los que convie)</b><code>*</code></label>
                    <select Name="RANGO_INGRESOS" required class="form-select form-control" id="RANGO_INGRESOS"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="UN SALARIO"> Hasta un Salario Minimo </option>
                        <option value="2 Y 3 SALARIOS">Entre 2 y 3 Salarios Minimos </option>
                        <option value="MAS 3 SALARIOS">Mas de 3 Salarios Minimos </option>
                        <option value="NO TENGO INGRESOS"> No tengo Ingresos </option>

                    </select>
                </div>



            </div>

            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cuantas comidas consume habitualmente durante el
                            dia?</b><code>*</code></label>
                    <select Name="CUANTAS_COMIDAS" required class="form-select form-control" id="CUANTAS_COMIDAS"
                        aria-label="Floating label select example">
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="1 Y 2 COMIDAS"> Entre 1 y 2 </option>
                        <option value="3 COMIDAS"> 3 comidas </option>
                        <option value="MAS DE 3 COMIDAS"> Mas de 3 </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cual de las siguientes actividades ocupa su tiempo
                            libre?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Deporte"id="Deporte" value="Deporte">
                        <label class="form-check-label" for="Deporte">Deporte </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Musica" id="Musica" value="Musica">
                        <label class="form-check-label" for="Musica">Musica </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Danza" id="Danza" value="Danza">
                        <label class="form-check-label" for="Danza">Danza</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Cine_Radio_Tv" id="Cine_Radio_Tv"
                            value="Cine_Radio_Tv">
                        <label class="form-check-label" for="Cine_Radio_Tv">Cine, Radio y Tv</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="caminatas" id="caminatas"
                            value="caminatas">
                        <label class="form-check-label" for="caminatas">Caminatas al Aire Libre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Dormir"id="Dormir" value="Dormir">
                        <label class="form-check-label" for="Dormir">Dormir</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Juegos" id="Juegos" value="Juegos">
                        <label class="form-check-label" for="Juegos">Juegos en Linea</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Lectura" id="Lectura" value="Lectura">
                        <label class="form-check-label" for="Lectura">Lectura</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Otras_Actividades" id="Otras_Actividades"
                            value="Otras_Actividades">
                        <label class="form-check-label" for="Otras_Actividades">Otras</label>
                    </div>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Cuales de los siguientes medios utiliza para comunicarse con los
                            demas?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="MedioEscritoFisico" id="MedioEscritoFisico"
                            value="MedioEscritoFisico">
                        <label class="form-check-label" for="MedioEscritoFisico">Medio Escrito Fisico </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Correo" id="Correo" value="Correo">
                        <label class="form-check-label" for="Correo">Correos Electronicos </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="RedesSociales"id="RedesSociales"
                            value="RedesSociales">
                        <label class="form-check-label" for="RedesSociales">Redes Sociales</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Llamadas" id="Llamadas" value="Llamadas">
                        <label class="form-check-label" for="Llamadas">Llamadas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="LenguajeSeñas" id="LenguajeSeñas"
                            value="LenguajeSeñas">
                        <label class="form-check-label" for="LenguajeSeñas">Lenguaje de Señas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Otra_Comunicacion"id="Otra_Comunicacion"
                            value="Otra_Comunicacion">
                        <label class="form-check-label" for="Otra_Comunicacion">Otros</label>
                    </div>

                </div>




            </div>
            <div class="row justify-content-center col-md-12">
                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Usted se considera una persona:</b><code>*</code></label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Alegre" id="Alegre" value="Alegre">
                        <label class="form-check-label" for="Alegre">Alegre </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Sociable" id="Sociable" value="Sociable">
                        <label class="form-check-label" for="Sociable">Sociable </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Conflictiva"id="Conflictiva"
                            value="Conflictiva">
                        <label class="form-check-label" for="Conflictiva">Conflictiva</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Depresiva"id="Depresiva"
                            value="Depresiva">
                        <label class="form-check-label" for="Depresiva">Depresiva</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Introvertida" id="Introvertida"
                            value="Introvertida">
                        <label class="form-check-label" for="Introvertida">Introvertida</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Extrovertida"id="Extrovertida"
                            value="Extrovertida">
                        <label class="form-check-label" for="Extrovertida">Extrovertida</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Otra_Persona"id="Otra_Persona"
                            value="Otra_Persona">
                        <label class="form-check-label" for="Otra_Persona">Otra</label>
                    </div>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Le gustan las actividades: </b><code>*</code></label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Grupales" id="Grupales" value="Grupales">
                        <label class="form-check-label" for="Grupales">Grupales </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Individuales" id="Individuales"
                            value="Individuales">
                        <label class="form-check-label" for="Individuales">Individuales </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="AireLibre"id="AireLibre"
                            value="AireLibre">
                        <label class="form-check-label" for="AireLibre">Al Aire Libre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="EspaciosCerrados" id="EspaciosCerrados"
                            value="EspaciosCerrados">
                        <label class="form-check-label" for="EspaciosCerrados">En Espacios Cerrados</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Competitivas" id="Competitivas"
                            value="Competitivas">
                        <label class="form-check-label" for="Competitivas">Competitivas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="NingunaEspecial" id="NingunaEspecial"
                            value="NingunaEspecial">
                        <label class="form-check-label" for="NingunaEspecial">Ninguna en Especial</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Otra_Actividad" id="Otra_Actividad"
                            value="Otra_Actividad">
                        <label class="form-check-label" for="Otra_Actividad">Otras</label>
                    </div>

                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Usted consume con alguna regularidad una o varias de las siguientes
                            sustancias psicoactivas?</b><code>*</code></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Alcohol"id="Alcohol" value="Alcohol">
                        <label class="form-check-label" for="Alcohol">Alcohol </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" Name="Tabaco"id="Tabaco" value="Tabaco">
                        <label class="form-check-label" for="Tabaco">Tabaco </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Opiaceos"id="Opiaceos" value="Opiaceos">
                        <label class="form-check-label" for="Opiaceos">Opiaceos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Anfetaminas" id="Anfetaminas"
                            value="Anfetaminas">
                        <label class="form-check-label" for="Anfetaminas">Anfetaminas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Cocaina" id="Cocaina"
                            value="Cocaina">
                        <label class="form-check-label" for="Cocaina">Cocaina</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Marihuana" id="Marihuana"
                            value="Marihuana">
                        <label class="form-check-label" for="Marihuana">Marihuana</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Sedantes" id="Sedantes"
                            value="Sedantes">
                        <label class="form-check-label" for="Sedantes">Sedantes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Extasis" id="Extasis"
                            value="Extasis">
                        <label class="form-check-label" for="Extasis">Extasis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Otra_Droga" id="Otra_Droga"
                            value="Otra_Droga">
                        <label class="form-check-label" for="Otra_Droga">otras</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"Name="Noconsume" id="Noconsume"
                            value="Noconsume">
                        <label class="form-check-label" for="Noconsume">No Consumo Sustancias Psicoactivas</label>
                    </div>

                </div>

            </div>


            <div class="row justify-content-center">

                <div class="form-group col-md-4">

                    <input class="btn btn-success" type="submit" value="Enviar Información">

                </div>

            </div>
        </div>
    </div>

        </form>

    </div>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/habilitar.js') }}"></script>
    <script src="{{ asset('js/departamentos.js') }}"></script>
    <script src="{{ asset('js/municipios.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"> </script>
    <script src="{{ asset('js/habilitar.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</html>



