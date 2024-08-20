<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-4xl ">
        <h1>BIENVENIDO A LA PAGINA PRINCIPAL BRO</h1>
    </div>
    
    <x-alert type="success" class="mb-4">
        Titulo de la alerta
        <x-slot name="descrip">
            <p>Este es un mensaje de alerta</p>
        </x-slot>
    </x-alert>

    <p>HOLA MUNDILLO JEJE</p>

</body>

</html>
