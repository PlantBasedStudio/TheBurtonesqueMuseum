let imgs = document.querySelectorAll('.resPos');
let fullPage = document.querySelector('.fullpage');


imgs.forEach(img => {
    img.addEventListener('click', function() {
    fullPage.style.backgroundImage = 'url(' + img.src + ')';
    fullPage.style.display = 'block';
    });
});
