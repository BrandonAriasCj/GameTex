<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Noticia</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-500">
    <x-card class="flex justify-center">
        <form id="form-editar-noticia" action="{{ route('admin.gestion.updateNoticias', ['id' => $noticia->id]) }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
            @csrf
            @method('PUT')
            <h2 class="text-xl font-bold mb-4">Editar Noticia</h2>
            <div class="mb-4">
                <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="titulo" id="titulo-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" value="{{ $noticia->titulo }}" required>
            </div>
            <div class="mb-4">
                <label for="contenido" class="block text-sm font-medium text-gray-700">Contenido</label>
                <textarea name="contenido" id="contenido-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>{{ $noticia->contenido }}</textarea>
            </div>
            <div class="mb-4">
                <label for="portada" class="block text-sm font-medium text-gray-700">Portada</label>
                <input type="file" name="portada" id="portada-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                <img src="{{ asset('storage/' . $noticia->portada) }}" alt="Portada actual" class="mt-2 w-32 h-32">
            </div>
            <div class="mb-4">
                <label for="imagen1" class="block text-sm font-medium text-gray-700">Imagen 1</label>
                <input type="file" name="imagen1" id="imagen1-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                <img src="{{ asset('storage/' . $noticia->imagen1) }}" alt="Imagen 1 actual" class="mt-2 w-32 h-32">
            </div>
            <div class="mb-4">
                <label for="imagen2" class="block text-sm font-medium text-gray-700">Imagen 2</label>
                <input type="file" name="imagen2" id="imagen2-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                <img src="{{ asset('storage/' . $noticia->imagen2) }}" alt="Imagen 2 actual" class="mt-2 w-32 h-32">
            </div>
            <div class="mb-4">
                <label for="noticias_tematica_id" class="block text-sm font-medium text-gray-700">Temática</label>
                <select name="noticias_tematica_id" id="noticias_tematica_id-editar" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    @foreach ($tematicas as $tematica)
                        <option value="{{ $tematica->id }}" {{ $noticia->noticias_tematica_id == $tematica->id ? 'selected' : '' }}>{{ $tematica->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('admin.gestion.noticias') }}" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700">Cancelar</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar Cambios</button>
            </div>
        </form>
    </x-card>
    @vite('resources/js/app.js')
</body>
</html>
