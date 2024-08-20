<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL 11 | POST</title>
</head>
<body>

    <a href="/posts">Volver a post</a>

    <h1>TITULO: {{$post->title}}</h1>
    <p>CONTENIDO: {{$post->content}}</p>

    <a href="{{route('posts.edit', $post)}}">EDITAR POST</a>

    <form action="{{route('posts.destroy', $post)}}" method="POST">

        @csrf

        @method("delete")

        <button type="submit">ELIMINAR POST</button>
    </form>


    {{-- @if (true)
        <h2>SI</h2>
    @endif --}}
</body>
</html>