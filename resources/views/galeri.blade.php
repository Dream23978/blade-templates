<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>galeri</title>
</head>
<body>
    
    @extends('Layouts.app')

    @section('content')
    <h1>Ini adalah gambar yang saya  buat</h1>

    <img src="{{ url('img/weirddd.png') }} " width="280" height="280" >
    <img src="{{ url('img/w.png') }}" width="280" height="280">
    <img src="{{ url('img/1.jpg') }}" width="280" height="280">


    @endsection
</body>
</html>