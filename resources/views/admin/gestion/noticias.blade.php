<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-500">

    <x-card class="flex w-500px">
        <section class="bg-green-600 justify-center m-2 p-2 align-top">
            <div class="">
                <form action="{{ route('admin.gestion.noticias') }}" method="GET">
                    <input type="text" name="search" placeholder="Buscar noticias..." class="border border-gray-300 rounded-md p-2">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buscar</button>
                </form>
            </div>
            
    
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 cursor-pointer" onclick="openModalNoticias()">Crear</button>
            <x-noticias-modal :tematicas="$tematicas" />
        </section>
        
        <main class="row bg-gray-100 justify-center">
            <div class="card-body flex m-2 p-2">
                <table class="bg-gray-100 table table-sm table-bordered w-full table-fixed">
                    <thead>
                        <tr>
                            <th class="w-1/8 p-2">Título</th>
                            <th class="w-1/8 p-2">Contenido</th>
                            <th class="w-1/8 p-2">Portada</th>
                            <th class="w-1/8 p-2">Imagen 1</th>
                            <th class="w-1/8 p-2">Imagen 2</th>
                            <th class="w-1/8 p-2">Fecha de Publicación</th>
                            <th class="w-1/8 p-2">Creador</th>
                            <th class="w-1/8 p-2">Temática</th> <!-- Agregar columna de temática -->
                            <th class="w-1/12 p-2"></th>
                        </tr>
                    </thead>
                    <tbody class="justify-content-center w-full">
                        @forelse ($noticias as $noticia)
                            <tr>
                                <td class="truncate m-2">{{ $noticia->titulo }}</td>
                                <td class="truncate m-2">{{ $noticia->contenido }}</td>
                                <td class="truncate m-2"><img src="{{ asset('storage/' . $noticia->portada) }}" alt="Portada" class="w-16 h-16"></td>
                                <td class="truncate m-2"><img src="{{ asset('storage/' . $noticia->imagen1) }}" alt="Imagen 1" class="w-16 h-16"></td>
                                <td class="truncate m-2"><img src="{{ asset('storage/' . $noticia->imagen2) }}" alt="Imagen 2" class="w-16 h-16"></td>
                                <td class="truncate m-2">{{ $noticia->fecha_publicacion }}</td>
                                <td class="truncate m-2">{{ $noticia->administrador->name }}</td>
                                <td class="truncate m-2">{{ $noticia->tematica->nombre }}</td> 
                                <td class="m-2 p-2">
                                    <form action="{{ route('admin.gestion.destroyNoticias', ['id' => $noticia->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.gestion.noticias-edit', ['id' => $noticia->id]) }}" class="btn btn-warning">
                                            <i class="fa-sharp-duotone fa-solid fa-feather"></i> Editar
                                        </a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta noticia?');">
                                            <i class="fa-sharp fa-solid fa-trash-can-xmark"></i> Borrar
                                        </button>
                                    </form>
                                </td>                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No se encontraron datos</td> <!-- Ajustado el colspan -->
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">{{ $noticias->links() }}</div>
            </div>
        </main>
        <a href="{{ route('admin.dashboard') }}" class="bg-gray-100 btn btn-secondary mt-4">Volver</a>
    </x-card>

    @vite('resources/js/app.js')
</body>
</html>
