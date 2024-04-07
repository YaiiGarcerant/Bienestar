@extends('layouts.layout')
@section('content')
<div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="../p04" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-share-square text-white-50"></i> Volver</a>
        </div>
        <div class="scrollable">
            <h3 style="color:#4e8e37" class="box-title m-b-20 text-center" > <strong> PE-04 </strong> </h3>
        </div>


        <div class="row justify-content-center">

            <div class="form-group col-md-4">
                <label for="inputEmail4"><b>Identificador de la ficha</b><code>*</code></label>
                      <input type="number"  class="form-control" value="{{ $PE04->NUM_FICHA}}" id="NUM_FICHA" name="NUM_FICHA" placeholder="Numero de la ficha" required>

            </div>

            <div class="form-group col-md-4">
                <label for="inputEmail4"><b>Nombre del programa de Formacion</b><code>*</code></label>

                    <select formControlName="PROGRAMA_FORMACION"  required class="form-select form-control "
                        id="PROGRAMA_FORMACION" name="PROGRAMA_FORMACION" aria-label="Floating label select example"  >
                        <option selected disabled value=""> SELECCIONE </option>
                        <option value="ADSI"> Analisis y desorrollo de sistemas de informacion </option>

                    </select>

            </div>

            <div class="form-group col-md-4">
                <!-- Esta es la variable NOMBRE_EMPRESA -->
                <label for="inputEmail4"><b>Nombre del programa de Formacion</b><code>*</code></label>
                <input  class="form-control" type="text" placeholder="NOMBRE DEL PROGRAMA"  >

            </div>
        </div>

        <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Nivel de Formacion</b><code>*</code></label>
                    <select formControlName="NIVEL_FORMACION"required class="form-select form-control"
                        id="NIVEL_FORMACION" name="NIVEL_FORMACION" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> Curso Especial </option>
                            <option> Especializacion Tecnologica </option>
                            <option> Evento </option>
                            <option> Tecnico </option>
                            <option> Tecnologo </option>

                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Nodo o sede</b><code>*</code></label>
                    <select formControlName="NODO" required class="form-select form-control"
                        id="NODO" name="NODO" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> Sede Tic </option>
                            <option> Lipaya </option>
                            <option> Calle 30</option>
                            <option> Malambo </option>
                            <option> Sede Energia </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Estado del programa</b><code>*</code></label>
                    <select formControlName="ESTADO_PROGRAMA"  required class="form-select form-control"
                        id="ESTADO_PROGRAMA" name="ESTADO_PROGRAMA aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> En Ejecucion </option>
                            <option> Terminada </option>
                            <option> Terminada por Fecha </option>
                            <option> Terminado </option>

                    </select>
                </div>

        </div>

        <div  class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Jornada</b><code>*</code></label>
                    <select formControlName="TIPO_JORNADA"  required class="form-select form-control"
                        id="TIPO_JORNADA" name="TIPO_JORNADA" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> Diurna</option>
                            <option> Madrugada </option>
                            <option> Mixta </option>
                            <option > Nocturna </option>
                    </select>
                </div>


                <div class="form-group col-md-4"  >
                    <label for="example"><b>Fecha de inicio</b><code>*</code></label>
                    <input placeholder="Select date" type="date" formControlName="FECHA_INICIO_FICHA" name="AfchNac" class="form-control" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="example"><b>Fecha de terminacion</b><code>*</code></label>
                    <input placeholder="Select date" type="date" formControlName="FECHA_TERMINACION_FICHA" name="AfchNac" class="form-control" required>
                </div>

        </div>

        <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Etapa de la ficha</b><code>*</code></label>
                    <select formControlName="ETAPA_FICHA"  required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> Lectiva </option>
                            <option> Productiva</option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Modalidad de formacion</b><code>*</code></label>
                    <select formControlName="MODALIDAD_FORMACION"  required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> A Distancia </option>
                            <option> Presencial  </option>
                            <option> Virtual </option>

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Nombre de la empresa</b><code>*</code></label>
                    <select formControlName="NOMBRE_EMPRESA_1" required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option> Enfermera/Enfermero </option>
                            <option> Psicólogo/Psicóloga </option>
                            <option> Apoyo administrativo </option>
                            <option> Apoyo socioeconómico </option>
                            <option> Capellán </option>
                            <option> Instructor de Danza </option>
                            <option> Instructor de música </option>
                            <option> Instructor de deportes </option>
                            <option> Abogado/Abogada </option>
                            <option> Desarrollador/Desarrolladora </option>
                    </select>
                </div>

        </div>

        <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <!-- Esta es la variable NOMBRE_EMPRESA_2 -->
                    <label for="inputEmail4"><b>Nombre de la empresa</b><code>*</code></label>
                    <i  (click)="mostrarOcultar()" class="fa-solid fa-circle-plus text-primary"></i>
                    <input [disabled]="show" class="form-control" type="text"   placeholder="INGRESE AQUI EL NOMBRE DE LA EMPRESA" disabled  >
                </div>

                <div class="form-group col-md-4">
                    <label for="floatingSelectCargo"><b>Municipio</b><code>*</code></label>
                    <select formControlName="NOMBRE_MUNICIPIO_CURSO" required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option value="Barranquilla"> Barranquilla </option>
                            <option value="Baranoa"> Baranoa </option>
                            <option value="Galapa"> Galapa</option>
                            <option value="Malambo"> Malambo </option>
                            <option value="Puerto_Colombia"> Puerto Colombia </option>
                            <option value="Repelon"> Repelon </option>
                            <option value="Sabanalarga"> Sabanalarga </option>
                            <option value="Soledad"> Soledad </option>
                            <option value="Santo_Tomas"> Santo Tomas </option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label  for="inputEmail4"><b>Cantidad de aprendices masculinos</b><code>*</code></label>
                      <input type="number" class="form-control"formControlName="TOTAL_APRENDICES_MASCULINOS" name="numFicha" placeholder="INGRESE LA CANTIDAD DE APRENDICES MASCULINOS" required>
                </div>

        </div>

        <div class="row justify-content-center">

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cantidad de aprendices femeninos</b><code>*</code></label>
                      <input type="number" class="form-control" formControlName="TOTAL_APRENDICES_FEMENINOS" name="numFicha" placeholder="INGRESE LA CANTIDAD DE APRENDICES FEMENINOS" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cantidad total de aprendices</b><code>*</code></label>
                      <input type="number" class="form-control"formControlName="TOTAL_APRENDICES" name="numFicha" placeholder="INGRESE LA CANTIDAD DE APRENDICES " required>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputEmail4"><b>Cantidad total de aprendices activos</b><code>*</code></label>
                      <input type="number" class="form-control"formControlName="TOTAL_APRENDICES_ACTIVOS" name="numFicha" placeholder="INGRESE LA CANTIDAD DE APRENDICES ACTIVOS" required>
                </div>

        </div>

        <div class="row justify">
            <div class="form-group col-md-4">
                <label for="floatingSelectCargo"><b>Profesional asignado de la ficha</b><code>*</code></label>
                    <select formControlName="PROFESIONAL_ASIGNADO" name="PROFESIONAL_ASIGNADO" id="PROFESIONAL_ASIGNADO"  required class="form-select form-control"
                        id="floatingSelectCargo" aria-label="Floating label select example">
                            <option selected disabled value=""> SELECCIONE </option>
                            <option value="MARIO_JOSE_HERNANDEZ_HUERTAS"> MARIO JOSE HERNANDEZ HUERTAS </option>
                            <option value="NATALIA_MILENA_DÍAZ_ZÁRATE"> NATALIA MILENA DÍAZ ZÁRATE </option>
                            <option value="NORA_MILENA_BENAVIDES"> NORA MILENA BENAVIDES </option>
                            <option value="JANER_ALBERTO_SERPA_PACHECO"> JANER ALBERTO SERPA PACHECO </option>
                            <option value="MILADIS_ISABEL_DE_LA_HOZ_TORREGOZA"> MILADIS ISABEL DE LA HOZ TORREGOZA </option>
                            <option value="JENNYS_ALCIRA_FERRER_AHUMADA"> JENNYS ALCIRA FERRER AHUMADA</option>
                            <option value="LIA_PATRICIA_GARCÍA_SOBRINO"> LIA PATRICIA GARCÍA SOBRINO </option>
                            <option value="YISSELA_MARÍA_OTERO_DE_LA_OSSA"> YISSELA MARÍA OTERO DE LA OSSA </option>
                            <option value="ANUAR_EDUARDO_CONTRERAS_VANEGAS"> ANUAR EDUARDO CONTRERAS VANEGAS </option>
                            <option value="LUIS_ALFONSO_DE_LA_ROSA_MERCADO"> LUIS ALFONSO DE LA ROSA MERCADO </option>
                            <option value="GRACE_PAOLA_SERJE_ARIAS"> GRACE PAOLA SERJE ARIAS  </option>
                            <option value="OSIRIS_DEL_CARMEN_GONZÁLEZ_MORENO"> OSIRIS DEL CARMEN GONZÁLEZ MORENO  </option>
                            <option value="SELENA_MARIA_PELUFO_CAMACHO"> SELENA MARIA PELUFO CAMACHO  </option>
                            <option value="MAYOLIS_ZENITH_RODRÍGUEZ_SALCEDO"> MAYOLIS ZENITH RODRÍGUEZ SALCEDO </option>
                            <option value="DILSON_ENRIQUE_ORTEGA_FRANCO"> DILSON ENRIQUE ORTEGA FRANCO  </option>
                            <option value="LEYDER_APALZA"> LEYDER APALZA  </option>
                            <option value="NATIVIDAD_MARIA_CABRERA_MELENDEZ"> NATIVIDAD MARIA CABRERA MELENDEZ  </option>
                            <option value="LINA_PAOLA_COBA_DE_LA_CRUZ"> LINA PAOLA COBA DE LA CRUZ  </option>
                            <option value="ARMANDO_MANUEL_LOPEZ_BARRIOS"> ARMANDO MANUEL LOPEZ BARRIOS  </option>
                            <option value="ADRIANA_MATILDE_MELENDEZ_REDONDO"> ADRIANA MATILDE MELENDEZ REDONDO  </option>


                    </select>
            </div>


        </div>

</div>


@endsection







