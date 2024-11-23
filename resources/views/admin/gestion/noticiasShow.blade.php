@extends('layouts.detalle-inf')

@section('title', 'Detalle de la Noticia')

@section('detalle')
<div class="mt-6">
    <h3 class="text-lg font-medium text-gray-900">Detalles de la Noticia</h3>
    <div class="mt-4">
        <div class="mb-4 p-4 bg-white rounded-lg shadow">
            <h4 class="text-md font-semibold text-gray-800">Título: {{ $noticia->titulo }}</h4>
            <p class="text-sm text-gray-600">Contenido: {{ $noticia->contenido }}</p>
            <div class="mt-2">
                <h5 class="text-md font-semibold text-gray-800">Portada</h5>
                <img src="{{ asset('storage/' . $noticia->portada) }}" alt="Portada" class="mt-2 w-32 h-32">
            </div>
            <div class="mt-2">
                <h5 class="text-md font-semibold text-gray-800">Imagen 1</h5>
                <img src="{{ asset('storage/' . $noticia->imagen1) }}" alt="Imagen 1" class="mt-2 w-32 h-32">
            </div>
            <div class="mt-2">
                <h5 class="text-md font-semibold text-gray-800">Imagen 2</h5>
                <img src="{{ asset('storage/' . $noticia->imagen2) }}" alt="Imagen 2" class="mt-2 w-32 h-32">
            </div>
            <p class="text-sm text-gray-600">Temática: {{ $noticia->tematica->nombre }}</p>
            <p class="text-sm text-gray-600">Última Modificación: {{ $noticia->updated_at }}</p>
            <div class="flex mt-2">
                <a href="{{ route('admin.gestion.noticias-edit', $noticia->id) }}" class="btn btn-warning mr-2">
                    Editar
                </a>
                <form action="{{ route('admin.gestion.destroyNoticias', $noticia->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta noticia?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Borrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
