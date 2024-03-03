<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .curso-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 200px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
        }
        .curso-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .curso-card h2 {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Listado de Cursos</h1>

    @foreach($datos_curso as $curso)
        <div class="curso-card">
            <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
            <h2>{{ $curso->Curso }}</h2>
            <p>Duración: {{ $curso->Duracion }}</p>
            <p>Capacitador: {{ $curso->apep_cap }} {{ $curso->apem_cap }}</p>
        </div>
    @endforeach
</body>
</html>
