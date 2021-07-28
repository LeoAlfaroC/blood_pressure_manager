<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Blood Pressure Manager</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="h-screen" x-data="data">
    @yield('container')

    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
</body>
</html>
