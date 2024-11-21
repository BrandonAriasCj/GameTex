<dialog id="modal-torneos" class="p-0 rounded-lg">
    <form action="{{ route('admin.dinamicas.storeTorneos') }}" method="POST" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
        @csrf
        <h2 class="text-xl font-bold mb-4">TORNEOS - GAMETEX</h2>

        <div class="mb-4">
            <label for="nombrej" class="block text-sm font-medium text-gray-700">Nombre del Torneo</label>
            <input type="text" name="nombrej" id="nombrej" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="exp" class="block text-sm font-medium text-gray-700">Experiencia</label>
            <input type="text" name="exp" id="exp" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="juego_id" class="block text-sm font-medium text-gray-700">Juego del Torneo</label>
            <select name="juego_id" id="juego_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                @foreach ($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="evento_tipo_id" class="block text-sm font-medium text-gray-700">Tipo de Evento</label>
            <select name="evento_tipo_id" id="evento_tipo_id" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300" required>
                @foreach ($eventosTipos as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
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
            <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalTorneos()">Cancelar</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const modalTorneos = document.getElementById('modal-torneos');
        const openModalTorneos = () => { modalTorneos.showModal(); }
        const closeModalTorneos = () => { modalTorneos.close(); }
        window.openModalTorneos = openModalTorneos;
        window.closeModalTorneos = closeModalTorneos;
    });
</script>
