<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL 11 | POST</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1>WELCOME TO THE POST</h1>

    <a href="{{route('posts.create')}}"> NUEVO POST</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}" class="block p-4 bg-blue-500 hover:bg-blue-700 rounded-md">
                    <h2 class="text-white text-lg font-bold">{{ $post->title }}</h2>
                </a>
            </li>
        @endforeach
    </ul>

    {{$posts->links()}}

</body>

</html>
