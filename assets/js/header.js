const menu = document.getElementById("menu");
const closemenu = document.getElementById("closemenu")
const sidebar = document.getElementById("sidebar");
const header = document.getElementById("header");
const logo = document.getElementById("logo-header")

menu.addEventListener("click", () => {
    sidebar.style.left = 0;
    document.body.style.overflowY = "hidden"
})

closemenu.addEventListener("click", () => {
    sidebar.style.left = "-100%";
    document.body.style.overflowY = "visible"
})

window.addEventListener("scroll", function () {
    if (window.scrollY > 60) {
        header.classList.add("header-scrolled");
        logo.src = "./assets/img/logo.png"
    } else {
        header.classList.remove("header-scrolled");
        logo.src = "./assets/img/logo-white.png"
    }
});