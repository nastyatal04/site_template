var slides = document.querySelectorAll(".slide");
var currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove("active");
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add("active");
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

setInterval(nextSlide, 5000);
