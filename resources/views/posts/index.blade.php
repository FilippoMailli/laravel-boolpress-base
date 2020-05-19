<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Titolo</title>
    </head>
    <body>
        <h1>TITOLO</h1>
            @foreach ($posts as $post)
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <small>{{$post->created_at}}</small>
            @endforeach
    </body>
</html>
