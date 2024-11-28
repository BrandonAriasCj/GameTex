import './bootstrap';


//////////////////Lógica Torneos/////////////////
document.addEventListener("DOMContentLoaded", function () {
    const gameFilter = document.getElementById('game-filter');
    const torneoContainers = document.querySelectorAll('[data-game]');
    const searchInput = document.getElementById('search-dropdown');

    // Filtrar torneos por el tipo de juego seleccionado en el dropdown
    gameFilter.addEventListener('change', function () {
        const selectedGame = gameFilter.value;

        torneoContainers.forEach(function (container) {
            const gameType = container.getAttribute('data-game');
            if (selectedGame === 'all' || gameType === selectedGame) {
                container.style.display = "block"; // Mostrar el contenedor
            } else {
                container.style.display = "none"; // Ocultar el contenedor
            }
        });
    });


    // Filtrar los torneos por búsqueda
    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();
        torneoContainers.forEach(function (container) {
            const title = container.querySelector('h3').textContent.toLowerCase();
            if (title.includes(searchTerm)) {
                container.style.display = "block"; // Mostrar el contenedor
            } else {
                container.style.display = "none"; // Ocultar el contenedor
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const recompensasFilter = document.getElementById('recompensa-filter'); // Renombrado a recompensasFilter
    const recompensaContainers = document.querySelectorAll('[data-recompensa]'); // Renombrado a recompensaContainers
    const searchInput = document.getElementById('search-dropdown');

    // Filtrar recompensas por el tipo de juego seleccionado en el dropdown
    recompensasFilter.addEventListener('change', function () {
        const selectedRecompensa = recompensasFilter.value; // Renombrado a selectedRecompensa

        recompensaContainers.forEach(function (container) {
            const recompensaType = container.getAttribute('data-recompensa'); // Renombrado a recompensaType
            if (selectedRecompensa === 'all' || recompensaType === selectedRecompensa) {
                container.style.display = "";  // Muestra el contenedor, mantiene su espacio en el layout
            } else {
                container.style.display = "none";  // Oculta el contenedor sin mover los demás
            }
        });
    });


    const rows = document.querySelectorAll('#recompensas-table tr'); // Seleccionamos todas las filas dentro del tbody

    // Función que filtra las filas según el texto de búsqueda
    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase(); // Convertimos el término de búsqueda a minúsculas

        rows.forEach(function (row) {
            // Buscar el contenido del nombre del producto en el slot "producto"
            const productoCell = row.querySelector('td'); // La primera celda es donde se encuentra el nombre del producto
            const productoText = productoCell ? productoCell.textContent.toLowerCase() : '';

            if (productoText.includes(searchTerm)) {
                row.style.display = ''; // Muestra la fila si el nombre del producto coincide
            } else {
                row.style.display = 'none'; // Oculta la fila si no coincide
            }
        });
    });

});



document.addEventListener('DOMContentLoaded', function () {
    // Obtener el botón que abre el modal
    const openModalButton = document.getElementById('createProductButton');
    // Obtener el modal
    const modal = document.getElementById('createProductModal');
    // Obtener el botón de cerrar modal (ícono de la X)
    const closeModalButton = modal.querySelector('[data-modal-toggle="createProductModal"]');
    // Obtener el botón de descartar
    const discardButton = modal.querySelector('button[data-modal-toggle="createProductModal"]');

    // Función para abrir el modal
    openModalButton.addEventListener('click', function () {
        modal.classList.remove('hidden'); // Mostrar el modal
    });

    // Función para cerrar el modal
    function closeModal() {
        modal.classList.add('hidden'); // Ocultar el modal
    }

    // Cerrar el modal cuando se haga clic en el botón de cerrar (X)
    closeModalButton.addEventListener('click', closeModal);

    // Cerrar el modal cuando se haga clic en el botón de descartar
    discardButton.addEventListener('click', closeModal);

    // Cerrar el modal si se hace clic fuera de él
    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeModal();
        }
    });
});


document.getElementById("filterDropdownButton").addEventListener("click", function () {
    const filterDropdown = document.getElementById("filterDropdown");
    // Toggling visibility of the filter dropdown
    filterDropdown.classList.toggle("hidden");
});

