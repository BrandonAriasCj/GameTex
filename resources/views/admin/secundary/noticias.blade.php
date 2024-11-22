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
                <form action="{{ route('admin.noticias.index') }}" method="GET">
                    <input type="text" name="search" placeholder="Buscar noticias..." class="border border-gray-300 rounded-md p-2">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buscar</button>
                </form>
            </div>
            
            <!-- Modal para crear noticias -->
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 cursor-pointer" onclick="openModalNoticias()">Crear</button>
            <dialog id="modal-noticias" class="p-0 rounded-lg">
                <form action="{{ route('admin.noticias.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">Crear Noticia</h2>
                    
                    <div class="mb-4">
                        <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                        <input type="text" name="titulo" id="titulo" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    </div>

                    <div class="mb-4">
                        <label for="contenido" class="block text-sm font-medium text-gray-700">Contenido</label>
                        <textarea name="contenido" id="contenido" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="portada" class="block text-sm font-medium text-gray-700">Portada</label>
                        <input type="file" name="portada" id="portada" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    </div>

                    <div class="mb-4">
                        <label for="imagen1" class="block text-sm font-medium text-gray-700">Imagen 1</label>
                        <input type="file" name="imagen1" id="imagen1" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    </div>

                    <div class="mb-4">
                        <label for="imagen2" class="block text-sm font-medium text-gray-700">Imagen 2</label>
                        <input type="file" name="imagen2" id="imagen2" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalNoticias()">Cancelar</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
                    </div>
                </form>
            </dialog>
        </section>
        
        <main class="row bg-gray-100 justify-center">
            <div class="card-body flex m-2 p-2">
                <table class="bg-gray-100 table table-sm table-bordered w-full table-fixed">
                    <thead>
                        <tr>
                            <th class="w-1/7 p-2">Título</th>
                            <th class="w-1/7 p-2">Contenido</th>
                            <th class="w-1/7 p-2">Portada</th>
                            <th class="w-1/7 p-2">Imagen 1</th>
                            <th class="w-1/7 p-2">Imagen 2</th>
                            <th class="w-1/7 p-2">Fecha de Publicación</th>
                            <th class="w-1/7 p-2">Creador</th>
                            <th class="w-1/12 p-2"></th>
                        </tr>
                    </thead>
                    <tbody class="justify-content-center w-full">
                        @forelse ($noticias as $noticia)
                            <tr>
                                <td class="truncate m-2">{{ $noticia->titulo }}</td>
                                <td class="truncate m-2">{{ $noticia->contenido }}</td>
                                <td class="truncate m-2">{{ $noticia->portada }}</td>
                                <td class="truncate m-2">{{ $noticia->imagen1 }}</td>
                                <td class="truncate m-2">{{ $noticia->imagen2 }}</td>
                                <td class="truncate m-2">{{ $noticia->fecha_publicacion }}</td>
                                <td class="truncate m-2">{{ $noticia->administrador->name }}</td>
                                <td class="m-2 p-2">
                                    <form action="{{ route('admin.noticias.destroy', $noticia->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.noticias.show', $noticia->id) }}" class="btn btn-info">
                                            <i class="fa-sharp-duotone fa-solid fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('admin.noticias.edit', $noticia->id) }}" class="btn btn-warning">
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
                                <td colspan="8">No se encontraron datos</td>
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const modalNoticias = document.getElementById('modal-noticias');
            const openModalNoticias = () => { modalNoticias.showModal(); }
            const closeModalNoticias = () => { modalNoticias.close(); }
            window.openModalNoticias = openModalNoticias;
            window.closeModalNoticias = closeModalNoticias;
        });
    </script>
</body>
</html>
