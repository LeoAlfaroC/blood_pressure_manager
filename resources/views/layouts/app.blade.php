<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Blood Pressure Manager</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="h-screen">
    <div class="container mx-auto">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
