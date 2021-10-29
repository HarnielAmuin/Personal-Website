const btn = document.querySelector(".navigation-btn");
const nav = document.querySelector(".nav-list");

btn.addEventListener("click", () => {
    nav.classList.toggle("addNav")
})

// About navigation event handler
const about = document.querySelector('.modal-about');
const body = document.querySelector('.container');


const showAbout = () => {
    about.classList.add('showAbout');
    body.classList.add('bodyOpacity');
}

const remove = () => {
    about.classList.remove('showAbout');
    body.classList.remove('bodyOpacity');
}