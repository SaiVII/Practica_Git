<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje recivido</title>
</head>
<body>
   <p>Reciviste un correo: {{ $msg['name']}} - {{$msg['email']}}</p>
   <p><strong>Asunto:</strong>{{ $msg['subject'] }}</p>
   <p><strong>contenido:</strong>{{ $msg['content'] }}</p>
</body>
</html>