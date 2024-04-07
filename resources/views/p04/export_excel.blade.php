
<table>
    <thead>
        <tr>
           <th style="background-color: #f2f2f2;word-wrap: break-word;"><strong>Regional</strong> </th>
           <th style="background-color: #f2f2f2;word-wrap: break-word;"><strong>Nombre del centro</strong> </th>
           <th style="background-color: #f2f2f2;word-wrap: break-word;"><strong>Numero de ficha</strong> </th>
           <th style="background-color: #f2f2f2;word-wrap: break-word;"><strong>Nivel de formacion</strong> </th> 
           <th style="background-color: #f2f2f2;word-wrap: break-word;"><strong>Programa Formacion</strong> </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="word-wrap: break-word;width: 250px;">{{$P04->REGIONAL}}</td>
            <td style="word-wrap: break-word;width: 250px;">{{$P04->NOMBRE_CENTRO}}</td>
            <td style="word-wrap: break-word;width: 100px;">{{$P04->NUM_FICHA}}</td>
            <td style="word-wrap: break-word;width: 120px;">{{$P04->NIVEL_FORMACION}}</td>
            <td style="word-wrap: break-word;width: 350px;">{{$P04->PROGRAMA_FORMACION}}</td>
        </tr>
    </tbody>
</table>
{{-- <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        word-wrap: break-word;
    }

    /* Esto hará que las columnas se ajusten automáticamente al contenido */
    td {
        color : blue;
        word-wrap: break-word;
        max-width: 300px; /* Define un ancho máximo para las celdas */
    }
</style> --}}