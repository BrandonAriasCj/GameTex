<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Detalle')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-900">

    <x-card class="flex w-full mx-auto mt-4">
        <main class="bg-gray-100 p-4 rounded-lg shadow-lg">

            @yield('detalle')
        </main>

        <a href="{{ url()->previous() }}" class="bg-gray-100 btn btn-secondary mt-4">Volver</a>
    </x-card>

    @vite('resources/js/app.js')
</body>
</html>
