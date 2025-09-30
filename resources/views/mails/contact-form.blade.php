<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Form</title>
</head>
<body>
    <h2>Nuevo mensaje desde la web</h2>

    <p><strong>Nombre:</strong> {{ $name }}</p>
    <p><strong>Teléfono:</strong> {{ $phone ?: 'No proporcionado' }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>

    <p><strong>Mensaje:</strong></p>
    <p>{{ $content }}</p>
</body>
</html>