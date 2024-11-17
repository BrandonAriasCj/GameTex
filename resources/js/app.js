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

