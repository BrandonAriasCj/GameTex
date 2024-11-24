import './bootstrap';
import '../css/app.css';

document.addEventListener('DOMContentLoaded', () => {
    const openModalButton = document.getElementById('openModal');
    const closeModalButtons = document.querySelectorAll('#closeModal, #closeModalFooter');
    const modal = document.getElementById('myModal');

    // Función para mostrar el modal
    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    // Función para ocultar el modal
    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
});


// Model
document.onkeydown = function (event) {
    event = event || window.event;
    if (event.keyCode === 27) {
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
        let modals = document.getElementsByClassName('modal');
        Array.prototype.slice.call(modals).forEach(i => {
            i.style.display = 'none'
        })
    }
};


// Filtro lógica:
document.addEventListener('DOMContentLoaded', function () {
    // Añadir evento de clic a cada imagen en el carrusel
    const images = document.querySelectorAll('[data-juego]');
    
    images.forEach(function (image) {
        image.addEventListener('click', function () {
            // Obtener el nombre del juego desde el atributo data-juego
            const juego = image.getAttribute('data-juego');
            
            // Redireccionar a la página de torneos con el parámetro game en la URL
            window.location.href = '/torneos?game=' + encodeURIComponent(juego);
        });
    });

    // Obtener el filtro del URL si existe
    const urlParams = new URLSearchParams(window.location.search);
    const selectedGame = urlParams.get('game');

    // Si hay un juego seleccionado en la URL, aplica el filtro
    if (selectedGame) {
        document.getElementById('game-filter').value = selectedGame;
        filterTorneos(selectedGame);
    }

    // Manejar el evento de cambio en el filtro manualmente
    document.getElementById('game-filter').addEventListener('change', function () {
        const selectedValue = this.value;
        
        // Actualizar la URL con el parámetro game
        updateURLParameter('game', selectedValue);
        
        // Aplicar el filtro a la lista de torneos
        filterTorneos(selectedValue);
    });

    // Función para filtrar los torneos según el juego seleccionado
    function filterTorneos(game) {
        var selectedGame = game.toLowerCase();
        var torneos = document.querySelectorAll('[data-juego]');

        torneos.forEach(function (torneo) {
            var juego = torneo.getAttribute('data-juego').toLowerCase();

            if (selectedGame === "" || juego === selectedGame) {
                torneo.style.display = 'block';
            } else {
                torneo.style.display = 'none';
            }
        });
    }

    // Función para actualizar el parámetro de la URL
    function updateURLParameter(param, value) {
        const currentUrl = window.location.href;
        const url = new URL(currentUrl);
        
        if (value) {
            url.searchParams.set(param, value);
        } else {
            url.searchParams.delete(param);
        }
        
        // Cambiar la URL sin recargar la página
        window.history.replaceState(null, '', url.toString());
    }
});



document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('torneoModal');
    const closeModal = document.getElementById('close-modal');
    const modalContent = document.getElementById('modal-content');

    // Cerrar el modal al hacer clic en el botón de cierre
    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Delegación para abrir el modal al hacer clic en un elemento con "data-id"
    document.addEventListener('click', (e) => {
        const target = e.target.closest('[data-id]');
        if (target) {
            const torneoId = target.getAttribute('data-id'); // Identificador del torneo

            // Muestra el modal con contenido dinámico
            /* /modalPar?id=${torneoId} */
            fetch(`/modalPar`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error al obtener el contenido del modal');
                    }
                    return response.text();
                })
                .then(html => {
                    modal.classList.remove('hidden'); // Muestra el modal
                })
                .catch(error => {
                    console.error('Error fetching modal content:', error);
                    modalContent.innerHTML = `<p class="text-red-500">Error al cargar el contenido del modal.</p>`;
                    modal.classList.remove('hidden');
                });
        }
    });

    // Cerrar el modal si se hace clic fuera del contenido
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
});
