<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Detail</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="antialiased">
        <div class='post' >
            <P class ="title">{{$post->title}}</P>
            <p class='body'>{{$post->body}}</p>
            </div>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>