<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL 11 | POST</title>
</head>
<body>
    <h1>FORMULARIO PARA ACTUALIZAR POST</h1>

    <form action="{{route('posts.update', $post)}}" method="POST">

        {{-- CREAR TOKEN PARA UATENTICAR FORMULARIO --}}

        @csrf

        @method('PUT')

        <label for="title">
            Título:
            <input type="text" id="title" name="title" value="{{old('title', $post -> title)}}">
        </label>
        @error('title')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <label for="title">
            Contenido:
            <textarea type="text" name="content">{{old('title', $post -> content)}}</textarea>
        </label>

        <br>
        <br>

        <label for="title">
            Slug:
            <input type="text" name="slug" value="{{old('title', $post -> slug)}}"></input>
        </label>
        @error('slug')
            <p>{{$message}}</p>
        @enderror

        <br>
        <br>

        <button type="submit">ACTUALIZAR POST</button>
    </form>
</body>
</html>