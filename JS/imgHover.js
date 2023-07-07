const imgs = document.querySelectorAll('.resPos');
const fullPage = document.querySelector('#fullpage');


imgs.forEach(img => {
    img.addEventListener('click', function() {
    fullPage.style.backgroundImage = 'url(' + img.src + ')';
    fullPage.style.display = 'block';
    });
});
