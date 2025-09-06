<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola, {{ $username }}</title>
</head>
<body>
    <p>por ejemplo en el titulo de la pagina existe una varaiable: "{{ $username }}" .mira cambia la url</p>
    <h1>Hola, estoy en la vista home.blade.php</h1>
    <h2>Contenido de la variable: {{ $variable }}</h2>
    <h3>País: {{ $pais }}</h3>
</body>
</html>