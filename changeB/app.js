
// const p = document.querySelector("#num");

// const item = JSON.parse(window.localStorage.getItem('user'));
// console.log(`Hello: ${item.name}`);
// console.log(`Location: ${item.location}`);

// var it = item.name;
// var ti = item.location;
// const letters = new String(it, ti);

// Change Body Color using Math.random
const btn = document.querySelector('#btn');
const body = document.querySelector('#body');

const colors = () => {
    var red = Math.round(Math.random() * 256);
    var green = Math.round(Math.random() * 256);
    var blue = Math.round(Math.random() * 256);
    var opacity = Math.round(Math.random() * 256);

    var color = "rgb(" + red + "," + green + "," + blue + ")"; 
    body.style.backgroundColor = color;
    btn.style.borderColor = color;
}

const col = setInterval('colors()', 3000);