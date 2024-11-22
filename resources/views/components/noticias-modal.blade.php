@props(['tematicas'])

<dialog id="modal-noticias" class="p-0 rounded-lg">
    <form action="{{ route('admin.gestion.storeNoticias') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
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
            <input type="file" name="imagen1" id="imagen1" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="imagen2" class="block text-sm font-medium text-gray-700">Imagen 2</label>
            <input type="file" name="imagen2" id="imagen2" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="noticias_tematica_id" class="block text-sm font-medium text-gray-700">Temática</label>
            <select name="noticias_tematica_id" id="noticias_tematica_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                @foreach ($tematicas as $tematica)
                    <option value="{{ $tematica->id }}">{{ $tematica->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end">
            <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalNoticias()">Cancelar</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const modalNoticias = document.getElementById('modal-noticias');
        const openModalNoticias = () => { modalNoticias.showModal(); }
        const closeModalNoticias = () => { modalNoticias.close(); }
        window.openModalNoticias = openModalNoticias;
        window.closeModalNoticias = closeModalNoticias;
    });
</script>
