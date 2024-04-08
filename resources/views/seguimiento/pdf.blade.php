<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2{
        text-align: center;
    }
</style>
<body>
<h2 style="color:#39A900">SEGUIMIENTO N°{{$remision->id}}</h2>
<table style="width:100%" >
    <thead>
        <tr class="text-center">
            <th scope="col">APRENDIZ</th>
            <th scope="col">IDENTIFICACIÓN</th>
            <th scope="col">MOTIVO DE REMISIÓN</th>
            <th scope="col">FICHA</th>
            <th scope="col">PROGRAMA</th>
            <th scope="col">INSTRUCTOR</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $remision->NOMBRES_APRENDIZ}}</td>
                <td>{{ $remision->NUMERO_DOCUMENTO}}</td>
                <td>{{ $remision->MOTIVO_REMISION}}</td>
                <td>{{ $remision->IDENTIFICADOR_FICHA}}</td>
                <td>{{ $remision->NOMBRE_PROGRAMA_FORMACION}}</td>
                <td>{{ $remision->NOMBRES_INSTRUCTOR}}</td>
            </tr>
    </tbody>
</table>
</body>
</html>