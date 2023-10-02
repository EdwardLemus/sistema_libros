<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar libro</title>
</head>
<body>
    <h1>Agregar libro</h1>

    <form action="{{ route('libros.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" name="editorial" id="editorial" class="form-control">
        </div>

        <div class="form-group">
            <label for="genre">Género</label>
            <input type="text" name="genre" id="genre" class="form-control">
        </div>

        <div class="form-group">
            <label for="publication_date">Fecha de publicación</label>
            <input type="date" name="publication_date" id="publication_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>
