<nav class="bg-white p-4 shadow-md rounded flex-wrap items-center justify-between">
    <div class="flex items-center">
        <input type="text" name="search" id="search" placeholder="Buscar..." class="border border-gray-300 rounded-md p-2 mr-2 focus:ring focus:border-blue-300">
        <select name="search_type" id="search_type" class="border border-gray-300 rounded-md p-2 focus:ring focus:border-blue-300">
            <option value="titulo">Título</option>
            <option value="tematica">Temática</option>
        </select>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buscar</button>
    </div>
    <div>
        <button type="button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 cursor-pointer" onclick="openModalNoticias()">Crear</button>
    </div>
</nav>
