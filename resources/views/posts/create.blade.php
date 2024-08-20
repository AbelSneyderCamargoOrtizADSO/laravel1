<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL 11 | POST</title>
</head>

<body>
    <h1>FORMULARIO PARA CREAR POST</h1>

    <form action="/posts" method="POST">

        {{-- CREAR TOKEN PARA UATENTICAR FORMULARIO --}}

        @csrf

        <label for="title">
            Título:
            <input type="text" id="title" name="title" value="{{old('title')}}">
        </label>

        @error('title')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label for="title">
            Contenido:
            <textarea type="text" name="content">{{old('content')}}</textarea>
        </label>

        <br>
        <br>

        <label for="title">
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}"></input>
        </label>
        @error('slug')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>


        <button type="submit">CREAR POST</button>
    </form>
</body>

</html>
