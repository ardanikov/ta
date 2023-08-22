<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Buku Induk Siswa</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body,html {
            background: #EEEEEE; 
            height:100%;
        }
        .bg2 {
            height: 100%;
        }
        .cardform {
            position: absolute;
            left: 19.08%;
            right: 54.45%;
            top: 15.56%;
            bottom: 9.44%;
            background: #FFFFFF;
            border-radius: 18px;
            width: 40rem;
        }
    </style>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
