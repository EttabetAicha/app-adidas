const menu = document.querySelector('.uil-bars ')
const nav = document.querySelector('nav ul')
const closeNav = document.querySelector('ul .uil-times-circle')
const searchBtn = document.querySelector('.uil-search')
const closeSearch = document.querySelector('.search .uil-times-circle')
const search = document.querySelector('.search')

menu.addEventListener('click', ()=> {
    nav.classList.toggle('active')
})

closeNav.addEventListener('click',() => {
    nav.classList.remove('active')
})

searchBtn.addEventListener('click' , () => {
    search.classList.toggle('active')
})

closeSearch.addEventListener('click',() => {
    search.classList.remove('active')
})


// slider

const slider = document.querySelector(".arrivals-slider");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
const slides = document.querySelectorAll(".slider-item");
const slideCount = slides.length;
const slideWidth = slides[0].offsetWidth;
const slidesInView = 4;
const totalSlides = Math.ceil(slideCount / slidesInView);
let currentSlide = 1;

slider.style.width = `${slideWidth * slideCount}px`;

prevBtn.addEventListener("click", function () {
    console.log(currentSlide)
  if (currentSlide > 1) {
    nextBtn.style.display = 'block'
    currentSlide--;
    slider.style.transform = `translateX(-${(currentSlide - 1) * slideWidth * slidesInView}px)`;
  }
  if(currentSlide == 1) {
    prevBtn.style.display = 'none'
}
});

nextBtn.addEventListener("click", function () {
    console.log(currentSlide)
    if (currentSlide < totalSlides) {
        prevBtn.style.display = 'block'
        currentSlide++;
        slider.style.transform = `translateX(-${(currentSlide - 1) * slideWidth * slidesInView}px)`;
    }
    if(currentSlide == totalSlides) {
        nextBtn.style.display = 'none'
    }
});

