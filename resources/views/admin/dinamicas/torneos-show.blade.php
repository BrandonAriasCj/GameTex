@extends('layouts.detalle-inf')

@section('title', 'Detalle del Torneo')

@section('detalle')
<div class="mt-6">
    <h3 class="text-lg font-medium text-gray-900">Detalles del Torneo</h3>
    <div class="mt-4">
        <div class="mb-4 p-4 bg-white rounded-lg shadow">
            <h4 class="text-md font-semibold text-gray-800">Nombre del Torneo: {{ $torneo->nombrej }}</h4>
            <p class="text-sm text-gray-600">Creador: {{ $torneo->creador }}</p>
            <p class="text-sm text-gray-600">Fecha Inicio: {{ $torneo->fecha_inicio }}</p>
            <p class="text-sm text-gray-600">Fecha Fin: {{ $torneo->fecha_fin }}</p>
            <p class="text-sm text-gray-600">Experiencia: {{ $torneo->exp }}</p>
            <p class="text-sm text-gray-600">Juego del Torneo: {{ $torneo->juego->nombre }}</p>
            <p class="text-sm text-gray-600">Tipo de Evento: {{ $torneo->eventoTipo->nombre }}</p>
            <p class="text-sm text-gray-600">Moderador: {{ $torneo->moderador->name }}</p>
            <p class="text-sm text-gray-600">Administrador: {{ $torneo->administrador->name }}</p>
            <p class="text-sm text-gray-600">Última Modificación: {{ $torneo->updated_at }}</p>
            <div class="flex mt-2">
                <a href="{{ route('admin.dinamicas.torneos-edit', $torneo->id) }}" class="btn btn-warning mr-2">
                    Editar
                </a>
                <form action="{{ route('admin.dinamicas.delete', $torneo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este torneo?');">
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
