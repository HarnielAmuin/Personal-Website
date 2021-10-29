
// Output
const output = document.querySelector('#output');
// butttons list
const decrease = document.querySelector('#decrease');
const reser = document.querySelector('#reset');
const increase = document.querySelector('#increase');

// increase eventlistener
var record = JSON.parse(window.localStorage.getItem('Value'));
var d = record;

increase.addEventListener('click', () => {
    output.innerHTML = d += 1;
});

decrease.addEventListener('click', () => {
    output.innerHTML = d -= 1;
})

reset.addEventListener('click', () => {
    output.innerHTML = d = 0;
})

// Automatically save data to localStorage
const btns = document.querySelectorAll('#decrease, #reset, #increase');
btns.forEach(buttons => {
    buttons.addEventListener('click', () => {
        window.localStorage.setItem('Value', JSON.stringify(d))
    })
});

// Get the latest value in localStorage
const def = () => {
    output.innerHTML = record;
}