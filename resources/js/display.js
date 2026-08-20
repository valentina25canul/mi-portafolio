const carrusel = document.querySelector('.order');
const intervalTime = 3000; // Tiempo en milisegundos (3000ms = 3 segundos)
let autoplayTimer = null;

function startAutoplay() {
  autoplayTimer = setInterval(() => {
    // Calculamos si ya llegamos al final del scroll
    const maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
    
    // Si llegamos al final, regresa al inicio; de lo contrario, avanza el ancho de una tarjeta
    if (carrusel.scrollLeft >= maxScrollLeft - 10) {
      carrusel.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      // Avanza hacia la derecha el equivalente a 1 tarjeta + el espacio (gap)
      carrusel.scrollBy({ left: 340, behavior: 'smooth' });
    }
  }, intervalTime);
}

function stopAutoplay() {
  clearInterval(autoplayTimer);
}

// Iniciar el carrusel automático
startAutoplay();

// Pausar si el usuario pasa el mouse por encima o toca el carrusel en móvil
carrusel.addEventListener('mouseenter', stopAutoplay);
carrusel.addEventListener('mouseleave', startAutoplay);
carrusel.addEventListener('touchstart', stopAutoplay, { passive: true });
carrusel.addEventListener('touchend', startAutoplay);