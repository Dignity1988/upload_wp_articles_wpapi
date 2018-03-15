var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;

var slideInterval = setInterval(nextSlide, 5000);


  slides[currentSlide].className = 'slide__showing';
function nextSlide() {
  slides[currentSlide].className = 'slide';
  currentSlide = (currentSlide + 1) % slides.length;

  slides[currentSlide].className = 'slide__showing';
}
