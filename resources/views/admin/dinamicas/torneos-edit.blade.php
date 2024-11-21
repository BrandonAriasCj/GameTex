<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Torneo</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-500">
    <x-card class="flex justify-center">
        <form id="form-editar-torneo" action="{{ route('admin.dinamicas.updateTorneos', ['id' => $torneo->id]) }}" method="POST" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
            @csrf
            @method('PUT')
            <h2 class="text-xl font-bold mb-4">Editar Torneo</h2>
            
            <div class="mb-4">
                <label for="nombrej" class="block text-sm font-medium text-gray-700">Nombre del Torneo</label>
                <input type="text" name="nombrej" id="nombrej-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $torneo->nombrej }}" required>
            </div>

            <div class="mb-4">
                <label for="creador" class="block text-sm font-medium text-gray-700">Creador</label>
                <input type="text" name="creador" id="creador-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $torneo->creador }}" required>
            </div>

            <div class="mb-4">
                <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $torneo->fecha_inicio }}" required>
            </div>

            <div class="mb-4">
                <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
                <input type="date" name="fecha_fin" id="fecha_fin-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $torneo->fecha_fin }}" min="{{ date('Y-m-d') }}" required>
            </div>

            <div class="mb-4">
                <label for="exp" class="block text-sm font-medium text-gray-700">Experiencia</label>
                <input type="text" name="exp" id="exp-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $torneo->exp }}" required>
            </div>

            <div class="mb-4">
                <label for="torneo_juego_id" class="block text-sm font-medium text-gray-700">Juego del Torneo</label>
                <select name="torneo_juego_id" id="torneo_juego_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($juegos as $juego)
                        <option value="{{ $juego->id }}" {{ $torneo->torneo_juego_id == $juego->id ? 'selected' : '' }}>{{ $juego->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="evento_tipo_id" class="block text-sm font-medium text-gray-700">Tipo de Evento</label>
                <select name="evento_tipo_id" id="evento_tipo_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($eventosTipos as $tipo)
                        <option value="{{ $tipo->id }}" {{ $torneo->evento_tipo_id == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="moderador_id" class="block text-sm font-medium text-gray-700">Moderador</label>
                <select name="moderador_id" id="moderador_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($moderadores as $moderador)
                        <option value="{{ $moderador->id }}" {{ $torneo->moderador_id == $moderador->id ? 'selected' : '' }}>{{ $moderador->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="administrador_id" class="block text-sm font-medium text-gray-700">Administrador</label>
                <select name="administrador_id" id="administrador_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($administradores as $administrador)
                        <option value="{{ $administrador->id }}" {{ $torneo->administrador_id == $administrador->id ? 'selected' : '' }}>{{ $administrador->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('admin.dinamicas.torneos') }}" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
            </div>
        </form>
    </x-card>
    @vite('resources/js/app.js')
</body>
</html>
