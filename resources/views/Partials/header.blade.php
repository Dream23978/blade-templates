<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light gap-1">
        <div class="container">
            <a class="navbar-brand" >Myapp</a>
            <a class="navbar-brand" href="{{ route('about') }}">About</a>
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <a class="navbar-brand" href="{{ route('contact')}}">Contact</a>
            <a class="navbar-brand" href="{{ route('galeri')}}">Galeri</a>
        </div>
    </nav>
</body>
</html>