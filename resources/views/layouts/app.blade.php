<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base-url" content="{{ url('') }}" />

    <title>@yield('title', config('app.title', 'Laravel'))</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Taviraj:wght@100;200;300;400;500;600;700&display=swap" />

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="@yield('bodyClass')">
    <main class="container mx-auto">
        @yield('content')
    </main>

    @stack('js')
</body>

</html>
