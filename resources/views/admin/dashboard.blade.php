
<html>
    @vite('resources/css/app.css')
<body class="bg-purple-600">
    @include('layouts.header')
    <x-card class="m-2">
        <section class="bg-gray-500 flex  justify-center ">
            <!-- Aqui el formulario de Eventos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer" onclick="openModalEventos()">
            </div>
            
            <!-- Modal -->
            <dialog id="modal-eventos" class="p-0 rounded-lg">
                <form method="dialog" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                    <h2 class="text-xl font-bold mb-4">EVENTOS - GAMETEX</h2>
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                    </div>
                    <div class="mb-4">
                        <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                        <input type="text" id="categoria" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                    </div>
                    <div class="mb-4">
                        <label for="descricion" class="block text-sm font-medium text-gray-700">Descripción</label>
                        <textarea id="description" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" id="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300 min="{{ date('Y-m-d') }}" required ">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalEventos()">Cancelar</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
                    </div>
                </form>
            </dialog> 
            
            <!-- aqui el formulario de torneos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer" onclick="openModalTorneos()">
            </div>
            
            <!-- Modal -->
            <dialog id="modal-torneos" class="p-0 rounded-lg">
                <form method="dialog" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                    <h2 class="text-xl font-bold mb-4">TORNEOS - GAMETEX</h2>
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                    </div>
                    <div class="mb-4">
                        <label for="categoria" class="block text-sm font-medium text-gray-700">Creador</label>
                        <input type="text" id="categoria" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                    </div>
                    <div class="mb-4">
                        <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha</label>
                        <input type="date" id="fecha_fin" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300 min="{{ date('Y-m-d') }}" required ">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalTorneos()">Cancelar</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
                    </div>
                </form>
            </dialog>


            <!-- aqui el formulario de recompensas -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer" onclick="openModalRecompensas()">
            </div>
            
            <!-- Modal -->
            <dialog id="modal-recompensas" class="p-0 rounded-lg">
                <form method="dialog" class="bg-white p-8 rounded shadow-lg max-w-md w-full">
                    <h2 class="text-xl font-bold mb-4">RECOMPENSAS - GAMETEX</h2>
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombre" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring focus:border-blue-300">
                    </div>
                    <div class="mb-4">
                        <label for="categoria" class="block text-sm font-medium text-gray-700">cantidad</label>
                        @for ($i = 1; $i <= 10; $i++) 
                            <option value="{{ $i }}">{{ $i }}
                            </option> 
                            @endfor
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-red-600 text-white px-4 py-2 rounded mr-2 hover:bg-red-700" onclick="closeModalRecompensas()">Cancelar</button>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
                    </div>
                </form>
            </dialog>
            
        </section>
        <section class="flex  flex-wrap justify-center">
            <div class="bg-gray-100 m-2">
                <p>Reportes</p>
            </div>
            <div class="bg-gray-100 m-2">
                <p>Contenido</p>
            </div>
        </section>
        <section class="flex   justify-center" >
            <figure class="bg-gray-100 flex-wrap justify-center my-4 m-2 p-2 rounded ">
                <img src="https://i.pinimg.com/736x/f9/e0/9d/f9e09d33315a8d7e77104832d7d40fb3.jpg" class="w-72 h-35 ">
                
            </figure>
            <figure class="bg-gray-100 m2-p2 flex justify-center my-4 m-2 p-2 rounded"> 
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/378648/capsule_616x353.jpg?t=1670976511" class="w-72 h-35" > 
            </figure>
        </section>

    </x-card>

    @vite('resources/js/app.js')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const modalEventos = document.getElementById('modal-eventos');
            const openModalEventos = () => { modalEventos.showModal(); }
            const closeModalEventos = () => { modalEventos.close(); }
            window.openModalEventos = openModalEventos;
            window.closeModalEventos = closeModalEventos;
        });
    
        document.addEventListener('DOMContentLoaded', (event) => {
            const modalTorneos = document.getElementById('modal-torneos');
            const openModalTorneos = () => { modalTorneos.showModal(); }
            const closeModalTorneos = () => { modalTorneos.close(); }
            window.openModalTorneos = openModalTorneos;
            window.closeModalTorneos = closeModalTorneos;
        });
    
        document.addEventListener('DOMContentLoaded', (event) => {
            const modalRecompensas = document.getElementById('modal-recompensas');
            const openModalRecompensas = () => { modalRecompensas.showModal(); }
            const closeModalRecompensas = () => { modalRecompensas.close(); }
            window.openModalRecompensas = openModalRecompensas;
            window.closeModalRecompensas = closeModalRecompensas;
        });
    </script>
    
</body>
</html>




