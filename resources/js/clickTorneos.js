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
