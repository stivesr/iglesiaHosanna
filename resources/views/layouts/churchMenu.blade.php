<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body>

        <div class="flex bg-blue-900 text-white p-4 text-center items-center justify-center">
            <a href="{{ route('church.index') }}"
                class="rounded-md px-6 py-2 m-2 hover:bg-white hover:text-blue-900">Inicio</a>
        </div>

        <div class="p-4">
            @yield('content')
        </div>

    <footer class="text-gray-400 text-center p-4">
        <p>&copy; {{ date('Y') }} Hosanna Liberia. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
