let submenu = document.querySelector('.submenu');
let navMobile = document.querySelector('#navMobile');
let listesub = document.querySelector('.list');




function menuDeroulantTablette(){
    if (window.matchMedia("(max-width: 1023px)").matches) {
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
        } else {
            submenu.style.display = "block";
        }
    }
    else {
        submenu.style.display = "block";
    }
}


function menuMobile(){
    let header = document.querySelector("#theHeader");
    let logo = document.querySelector("#theLogo");
    if (header.style.display === "block") {
        header.style.display = "none";
        logo.style.display = "block";
    } else {
        header.style.display = "block";
        logo.style.display = "none";

    }
}


listesub.addEventListener('click', () => {
    menuDeroulantTablette();
});

navMobile.addEventListener('click', () => {
    menuMobile();
});