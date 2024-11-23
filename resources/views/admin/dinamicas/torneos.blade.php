<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Torneos</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <x-card class="flex w-500px">
        <section class="bg-gray-500 justify-center m-2 p-2 align-top">
            <div class="">
                <form action="{{ route('admin.dinamicas.torneos') }}" method="GET">
                    <x-torneos-busq />
                </form>
            </div>
            
            <!-- Modal para crear torneos -->
            <x-torneos-modal :juegos="$juegos" :eventosTipos="$eventosTipos" :moderadores="$moderadores" />
        </section>
        
        <main class="row bg-gray-100 justify-center">
            <div class="card-body flex m-2 p-2">
                <table class="bg-gray-100 table table-sm table-bordered w-full table-fixed">
                    <thead>
                        <tr>
                            <th class="w-1/7 p-2">Nombre del Torneo</th>
                            <th class="w-1/7 p-2">Creador</th>
                            <th class="w-1/7 p-2">Fecha Inicio</th>
                            <th class="w-1/7 p-2">Fecha Fin</th>
                            <th class="w-1/7 p-2">Experiencia</th>
                            <th class="w-1/7 p-2">Moderador</th>
                            <th class="w-1/7 p-2">Última Modificación</th>
                            <th class="w-1/12 p-2"></th>
                        </tr>
                    </thead>
                    <tbody class="justify-content-center w-full">
                        @forelse ($torneos as $torneo)
                            <tr>
                                <td class="truncate m-2">{{ $torneo->nombrej }}</td>
                                <td class="truncate m-2">{{ $torneo->creador }}</td>
                                <td class="truncate m-2">{{ $torneo->fecha_inicio }}</td>
                                <td class="truncate m-2">{{ $torneo->fecha_fin }}</td>
                                <td class="truncate m-2">{{ $torneo->exp }}</td>
                                <td class="truncate m-2">{{ $torneo->moderador->name }}</td>
                                <td class="truncate m-2">{{ $torneo->updated_at }}</td>
                                <td class="m-2 p-2">
                                    <form action="{{ route('admin.dinamicas.destroyTorneos', $torneo->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.dinamicas.showTorneos', $torneo->id) }}" class="btn btn-info">
                                            <i class="fa-sharp-duotone fa-solid fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('admin.dinamicas.torneos-edit', $torneo->id) }}" class="btn btn-warning">
                                            <i class="fa-sharp-duotone fa-solid fa-feather"></i> Editar
                                        </a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este torneo?');">
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
                <div class="d-flex justify-content-end">{{ $torneos->links() }}</div>
            </div>
        </main>
        <a href="{{ route('admin.dashboard') }}" class=" btn btn-secondary mt-4">Volver</a>
    </x-card>

    @vite('resources/js/app.js')
</body>
</html>
