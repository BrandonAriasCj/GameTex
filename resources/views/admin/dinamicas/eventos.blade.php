<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-500">

    <x-card class="flex w-500px">
        <section class="bg-green-600 justify-center m-2 p-2 align-top">
            <div class="">
                <input></input>
            </div>
            <div>
                <a alt="Abrir Modal" class="w-34 h-34 cursor-pointer" onclick="openModalEventos()">Crear</a>
            </div>
            <x-eventos-modal :eventosTipos="$eventosTipos" :moderadores="$moderadores" />
        </section>
        <main class="row bg-gray-100 justify-center">
            <div class="card-body flex m-2 p-2">
                <table class="bg-gray-100 table table-sm table-bordered w-full table-fixed">
                    <thead>
                        <tr>
                            <th class="w-1/7 p-2">Nombre del Evento</th>
                            <th class="w-1/7 p-2">Descripción</th>
                            <th class="w-1/7 p-2">Reglas</th>
                            <th class="w-1/7 p-2">Fecha Inicio</th>
                            <th class="w-1/7 p-2">Fecha Fin</th>
                            <th class="w-1/7 p-2">Moderador</th>
                            <th class="w-1/7 p-2">Última Modificación</th>
                            <th class="w-1/12 p-2"></th>
                        </tr>
                    </thead>
                    <tbody class="justify-content-center w-full">
                        @forelse ($items as $item)
                            <tr>
                                <td class="truncate m-2">{{ $item->eventosTipo->nombre }}</td>
                                <td class="truncate m-2">{{ $item->eventosTipo->descripcion }}</td>
                                <td class="truncate m-2">{{ $item->eventosTipo->reglas }}</td>
                                <td class="truncate m-2">{{ $item->fecha_inicio }}</td>
                                <td class="truncate m-2">{{ $item->fecha_fin }}</td>
                                <td class="truncate m-2">{{ $item->moderador->name }}</td>
                                <td class="truncate m-2">{{ $item->updated_at }}</td>
                                <td class="m-2 p-2">
                                    <form action="{{ route('admin.dinamicas.delete', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.dinamicas.show', $item->id) }}" class="btn btn-info">
                                            <i class="fa-sharp-duotone fa-solid fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('admin.dinamicas.eventos-edit', $item->id) }}" class="btn btn-warning">
                                            <i class="fa-sharp-duotone fa-solid fa-feather"></i> Editar
                                        </a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este evento?');">
                                            <i class="fa-sharp fa-solid fa-trash-can-xmark"></i> Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">No se encontraron datos</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">{{ $items->links() }}</div>
            </div>
        </main>
        <a href="{{ route('admin.dashboard') }}" class="bg-gray-100 btn btn-secondary mt-4">Volver</a>
    </x-card>

    @vite('resources/js/app.js')
</body>
</html>
