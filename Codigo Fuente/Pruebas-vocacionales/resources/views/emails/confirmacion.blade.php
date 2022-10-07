<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Hola {{ $nombre }}, te has registrado en <strong>Pruebas Vocacionales UCA</strong> !</h2>
    <p>Por favor confirma tú correo electrónico.</p>
    <p>Para ello haz click en el siguiente enlace:</p>

    <a href={{ env('APP_URL') }}crearPrueba/verificar/{{$codigo_verificacion}}>
        Clic para confirmar tú email
    </a>
</body>
</html>