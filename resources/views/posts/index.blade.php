<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="antialiased">
        <h1>Blog name</h1>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post' >
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            @endforeach
            </div>
        </div>
        <div class='paginate'> {{ $posts -> links() }}  </div>
    </body>
</html>
