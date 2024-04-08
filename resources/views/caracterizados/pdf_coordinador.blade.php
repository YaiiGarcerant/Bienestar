<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas por coordinador</title>
</head>

<body>
    <table class="table" style="width:100%" id="tablaFiltro">
        <thead>
            <tr class="text-center">
                <th scope="col">APRENDIZ </th>
                <th scope="col">IDENTIFICACIÓN</th>
                <th scope="col">PROGRAMA DE FORMACIÓN</th>
                <th scope="col">FICHA</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($fichas as $ficha)
                <tr>
                    <td>{{ $ficha->NOMBRES_APRENDIZ }}</td>
                    <td>{{ $ficha->NUMERO_DOCUMENTO }}</td>
                    <td>{{ $ficha->PROGRAMA_FORMACION }}</td>
                    <td>{{ $ficha->FICHA }}</td>
                </tr>
            @empty
                <tr>
                    <th>Sin Datos </th>
                    <th>Sin Datos </th>
                    <th>Sin Datos </th>
                    <th>Sin Datos </th>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
