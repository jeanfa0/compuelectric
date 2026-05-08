let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');

function mostrarSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) {
      slide.classList.add('active');
    }
  });
}

function moverSlide(n) {
  slideIndex += n;
  if (slideIndex >= slides.length) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  mostrarSlide(slideIndex);
}

document.addEventListener("DOMContentLoaded", () => {
  mostrarSlide(slideIndex);
});