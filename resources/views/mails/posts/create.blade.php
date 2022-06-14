<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <h2>Hai creato correttamente il post {{$post->title}}</h2>
    <p>Categoria: {{$post->category->label}}</p>

    @forelse ($post->tags as $tag)
        <li>{{$tag->label}}</li>

    @empty

   @endforelse 
</body>
</html>