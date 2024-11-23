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


//Logica modal de tienda - comprar

window.openModal = function (modalId) {
    document.getElementById(modalId).style.display = 'block'
    document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
}

window.closeModal = function (modalId) {
    document.getElementById(modalId).style.display = 'none'
    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
}

// Close all modals when pressing ESC
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

