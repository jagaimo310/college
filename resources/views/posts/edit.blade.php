<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog create</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="content">
        
        
        <div class="form">
            <form action="/posts/{{$post->id}}" method="POST" >
                
                @csrf
                @method('PUT')
                <div class="title">
                    <h2>Title</h2>
                    <input name="post[title]"  value="{{$post->title}}">
               </div>
               
               <div class="body">
                    <h2>Body</h2>
                    <textarea type="text" name="post[body]">{{$post->body}}</textarea>
               </div>
               
               <input type="submit" value="保存">
            </form>
            <div class="footer">
                <a href="/posts/{{$post->id}}">戻る</a>
            </div>
        </div>
        
    </body>
</html>