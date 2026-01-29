
document.addEventListener("DOMContentLoaded", () => {

    document.body.classList.add("loaded");

    let MENU = document.getElementById("menu");
    let NAV = document.getElementById("nav");
    let CLOSE = document.getElementById("close");

    // État initial
    

    // Ouvrir le menu
    MENU.addEventListener("click", () => {
        MENU.style.display = "none";
        NAV.style.display = "block";
    });

    // Fermer le menu
    CLOSE.addEventListener("click", () => {
        NAV.style.display = "none";
        MENU.style.display = "block";
    });

});

