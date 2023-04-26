<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Especie</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personajes->results as $personaje)
                <tr>
                    <td>{{ $personaje->name }}</td>
                    <td>{{ $personaje->status }}</td>
                    <td>{{ $personaje->species }}</td>
                    <td> <img src="{{ $personaje->image }}" alt=""> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>