// script.js
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;
const intervalTime = 3000; // Tiempo en milisegundos (3 segundos en este caso)

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

function startCarousel() {
    setInterval(nextSlide, intervalTime);
}

// Mostrar la primera imagen cuando se carga la página
showSlide(currentIndex);

// Iniciar el carrusel automático
startCarousel();
