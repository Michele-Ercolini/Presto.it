<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    
    <x-navbar />
    
    
    {{$slot}}
    
    <x-footer />
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>