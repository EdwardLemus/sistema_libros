<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de libros</title>
</head>
<body>
    <h1>Listado de libros</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Género</th>
                <th>Fecha de publicación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->editorial }}</td>
                    <td>{{ $libro->genero }}</td>
                    <td>{{ $libro->fecha_publicacion}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
