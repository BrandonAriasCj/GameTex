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
                <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->fecha_inicio }}" required>
            </div>
            <div class="mb-4">
                <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
                <input type="date" name="fecha_fin" id="fecha_fin-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->fecha_fin }}" min="{{ date('Y-m-d') }}" required>
            </div>
            <div class="mb-4">
                <label for="moderador_id" class="block text-sm font-medium text-gray-700">Moderador</label>
                <select name="moderador_id" id="moderador_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($moderadores as $moderador)
                        <option value="{{ $moderador->id }}" {{ $evento->moderador_id == $moderador->id ? 'selected' : '' }}>{{ $moderador->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <h3 class="text-lg font-medium text-gray-700">Tipo de Evento</h3>
                <label for="evento_tipo_nombre" class="block text-sm font-medium text-gray-700 mt-4">Nombre del Tipo de Evento</label>
                <input type="text" name="evento_tipo_nombre" id="evento_tipo_nombre-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->eventosTipo->nombre }}" required maxlength="50">
            </div>
            <div class="mb-4">
                <label for="descripcion_tipo" class="block text-sm font-medium text-gray-700">Descripción del Tipo de Evento</label>
                <input type="text" name="descripcion_tipo" id="descripcion_tipo-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->eventosTipo->descripcion }}" required>
            </div>
            <div class="mb-4">
                <label for="categoria_tipo" class="block text-sm font-medium text-gray-700">Categoría del Tipo de Evento</label>
                <input type="text" name="categoria_tipo" id="categoria_tipo-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $evento->eventosTipo->categoria }}" required>
            </div>
            <div class="mb-4">
                <label for="reglas_tipo" class="block text-sm font-medium text-gray-700">Reglas del Tipo de Evento</label>
                <textarea name="reglas_tipo" id="reglas_tipo-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required maxlength="255">{{ $evento->eventosTipo->reglas }}</textarea>
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
