<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Evento</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-500">
    <x-card class="flex justify-center">
        <form id="form-editar-evento" action="{{ route('admin.dinamicas.update', ['id' => $evento->id]) }}" method="POST" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
            @csrf
            @method('PUT')
            <h2 class="text-xl font-bold mb-4">Editar Evento</h2>
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->nombre }}" required>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="descripcion" id="descripcion-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>{{ $evento->descripcion }}</textarea>
            </div>
            <div class="mb-4">
                <label for="reglas" class="block text-sm font-medium text-gray-700">Reglas</label>
                <textarea name="reglas" id="reglas-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>{{ $evento->reglas }}</textarea>
            </div>
            <div class="mb-4">
                <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
                <input type="date" name="fecha_fin" id="fecha_fin-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->fecha_fin }}" min="{{ date('Y-m-d') }}" required>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('admin.dinamicas.eventos') }}" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
            </div>
        </form>
    </x-card>
    @vite('resources/js/app.js')
</body>
</html>
