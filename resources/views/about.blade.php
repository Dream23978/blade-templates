<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('Layouts.app')

    
    @section('title', 'Beranda')

    @section('content')
        <h1 class="text-center mt-4">Ini halaman tentang saya</h1>
        <p class="text-center mt-4 font-light text-[3rem]">Seorang mahasiswa universitas muhammadiyah pontianak <br>sedang semester 4</p>
    @endsection
</body>
</html>