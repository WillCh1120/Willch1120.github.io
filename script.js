let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function moveToNextSlide() {
  currentIndex = (currentIndex + 1) % totalItems; // Asegura que vuelva al primer slide
  updateCarouselPosition();
}

function moveToPreviousSlide() {
  currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Asegura que retroceda correctamente
  updateCarouselPosition();
}

function updateCarouselPosition() {
  const carousel = document.querySelector('.carousel');
  carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Configuramos los botones de navegación
document.querySelector('.next-btn').addEventListener('click', moveToNextSlide);
document.querySelector('.prev-btn').addEventListener('click', moveToPreviousSlide);

// Iniciar el carrusel automáticamente (opcional)
setInterval(moveToNextSlide, 5000);