<dialog id="modal-eventos" class="p-0 rounded-lg">
    <form action="{{ route('admin.dinamicas.store') }}" method="POST" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
        @csrf
        <h2 class="text-xl font-bold mb-4">EVENTOS - GAMETEX</h2>
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        <div class="mb-4">
            <label for="reglas" class="block text-sm font-medium text-gray-700">Reglas</label>
            <textarea name="reglas" id="reglas" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required></textarea>
        </div>
        <div class="mb-4">
            <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" min="{{ date('Y-m-d') }}" required>
        </div>
        <div class="flex justify-end">
            <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalEventos()">Cancelar</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const modalEventos = document.getElementById('modal-eventos');
        const openModalEventos = () => { modalEventos.showModal(); }
        const closeModalEventos = () => { modalEventos.close(); }
        window.openModalEventos = openModalEventos;
        window.closeModalEventos = closeModalEventos;
    });
</script>
