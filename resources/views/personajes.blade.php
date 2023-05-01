<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Rick and Morti</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/personajes">Personajes</a></li>
        <li><a href="">API Cpanel</a></li>
        <li><a href="">Otra Prueba</a></li>
    </ul>
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
  
                <div class="card">
                    <img src="{{ $personaje->image }}" alt="Imagen de la tarjeta">
                    <h2>{{ $personaje->name }}</h2>
                    <p>{{ $personaje->species }}</p>
                    <p>{{-- $personaje->next --}} </p>
                    <p>{{ $personaje->gender }}</p>
                  </div>
                  <br>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>