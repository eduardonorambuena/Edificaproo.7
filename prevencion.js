let currentIndex = 0;

function showNextImage() {
    const images = document.querySelectorAll('.carousel-images');
    const totalImages = images.length;
    currentIndex = (currentIndex + 1) % totalImages;
    updateCarousel();
}

function updateCarousel() {
    const slide = document.querySelector('.carousel-slide');
    const offset = -currentIndex * 100; // Mueve las imágenes al siguiente índice
    slide.style.transform = `translateX(${offset}%)`;
}

// Cambiar imagen automáticamente cada 3 segundos
setInterval(showNextImage, 3000);

// Si también quieres que las imágenes cambien al hacer clic en algún control, podrías agregar algo como esto:
document.querySelector('.carousel-container').addEventListener('click', showNextImage);
