<dialog id="modal-eventos" class="p-0 rounded-lg">
    <form action="{{ route('admin.dinamicas.store') }}" method="POST" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
        @csrf
        <h2 class="text-xl font-bold mb-4">EVENTOS - GAMETEX</h2>
        
        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Evento</label>
            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        
        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        
        <div class="mb-4">
            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
            <input type="text" name="categoria" id="categoria" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        
        <div class="mb-4">
            <label for="reglas" class="block text-sm font-medium text-gray-700">Reglas</label>
            <textarea name="reglas" id="reglas" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required maxlength="255"></textarea>
        </div>
        
        <div class="mb-4">
            <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>
        
        <div class="mb-4">
            <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" min="{{ date('Y-m-d') }}" required>
        </div>
        
        <div class="mb-4">
            <label for="evento_tipo_nombre" class="block text-sm font-medium text-gray-700">Nombre del Tipo de Evento</label>
            <input type="text" name="evento_tipo_nombre" id="evento_tipo_nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required maxlength="50">
        </div>
        
        <div class="mb-4">
            <label for="moderador_id" class="block text-sm font-medium text-gray-700">Moderador</label>
            <select name="moderador_id" id="moderador_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                @foreach ($moderadores as $moderador)
                    <option value="{{ $moderador->id }}">{{ $moderador->name }}</option>
                @endforeach
            </select>
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
