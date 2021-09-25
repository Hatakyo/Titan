// slider sp
let nextS1 = document.querySelector('.leftS1');
let preS1 = document.querySelector('.rightS1');
let carouselSlideS1 = document.querySelector('.carouselPreS1');
let carouselS1 = document.querySelectorAll('.itemsS1');
let counters1 = 0;
const sizeS1 = carouselS1[0].clientWidth + 20;

function renderSlides1() {
    carouselSlideS1.style.transform = 'translateX(' + (-sizeS1 * counters1) + 'px)';
    carouselSlideS1.style.transition = "transform .75s ease";
    if (counters1 === 0) {
        preS1.style.display = 'none';
    } else {
        preS1.style.display = 'block';
    }
    if (counters1 === (carouselS1.length - 4)) {
        nextS1.style.display = 'none';
    } else {
        nextS1.style.display = 'block';
    }

}
nextS1.addEventListener('click', function() {
    ++counters1;
    renderSlides1();
    preS1.style.opacity = '1'
});
preS1.addEventListener('click', function() {
    --counters1;
    renderSlides1();
});