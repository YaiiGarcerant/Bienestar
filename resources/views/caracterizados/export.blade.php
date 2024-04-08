<table>
    <thead>
        <tr>
            <th>COORDINACION</th>
            <th>FICHA</th>
            <th>PROGRAMA DE FORMACION</th>
            <th>JORNADA</th>
            <th>NOMBRE DEL APRENDIZ</th>
            <th>TIPO DE DOCUMENTO</th>
            <th>CORREO APRENDIZ</th>
            <th>NUMERO DE CONTACTO</th>
            <th>GENERO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>LUGAR DE NACIMIENTO</th>
            <th>DIRECCION DE RESIDENCIA</th>
            <th>CLASE DE VIVIENDA</th>
            <th>ESTRATO SOCIAL</th>
            <th>ESTADO CIVIL</th>
            <th>CUENTA CON SISBEN</th>
            <th>AFILIACION A SALUD</th>
            <th>NOMBRE DE EPS</th>
            <th>RANGO DE INGRESOS</th>
            <th>CUANTAS COMIDAS AL DIA</th>
            <th>TIENE HIJOS</th>
            <th>CUANTOS HIJOS</th>
            <th>PERSONAS QUE DEPENDEN</th>
            <th>CUANTAS PERSONAS</th>
            <th>TRABAJA ACTUALMENTE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fichacaracterizacion as $aprendiz)
            <tr>
                <td>{{$aprendiz->COORDINACION}}</td> 
                <td>{{$aprendiz->FICHA}}</td>
                <td>{{$aprendiz->PROGRAMA_FORMACION}}</td>
                <td>{{$aprendiz->JORNADA}}</td> 
                <td>{{$aprendiz->NOMBRES_APRENDIZ}}</td>
                <td>{{$aprendiz->TIPO_DOCUMENTO}}</td>
                <td>{{$aprendiz->CORREO_APRENDIZ}}</td>
                <td>{{$aprendiz->NUMERO_CONTACTO}}</td>
                <td>{{$aprendiz->GENERO_APRENDIZ}}</td> 
                <td>{{$aprendiz->FECHA_NACIMIENTO}}</td>
                <td>{{$aprendiz->LUGAR_NACIMIENTO}}</td> 
                <td>{{$aprendiz->DIREC_RESIDENCIA}}</td>
                <td>{{$aprendiz->CLASE_VIVIENDA}}</td> 
                <td>{{$aprendiz->ESTRATO_SOCIAL}}</td> 
                <td>{{$aprendiz->ESTADO_CIVIL}}</td>
                <td>{{$aprendiz->CUENTA_CON_SISBEN}}</td> 
                <td>{{$aprendiz->AFILIACION_SALUD}}</td> 
                <td>{{$aprendiz->NOMBRE_EPS}}</td>
                <td>{{$aprendiz->RANGO_INGRESOS}}</td> 
                <td>{{$aprendiz->CUANTAS_COMIDAS}}</td>
                <td>{{$aprendiz->HIJOS }}</td>
                <td>{{$aprendiz->NUM_HIJOS }}</td>
                <td>{{$aprendiz->PER_QUEDEPENDAN }}</td>
                <td>{{$aprendiz->CUANTAS_PER }}</td>
                <td>{{$aprendiz->TRABAJA_ACTUALMENTE }}</td>
            </tr>
        @endforeach               
    </tbody>
</table>