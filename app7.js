const btns = document.querySelectorAll('#collaps');
const answers = document.querySelectorAll('#answer1, #answer2')



btns.forEach((buttons, index) => {
    const target1 = document.querySelector('#ans-cont1');
    const target2 = document.querySelector('#ans-cont2'); 
    const target3 = document.querySelector('#ans-cont3');
    const target4 = document.querySelector('#ans-cont4');

    buttons.addEventListener('click', () => {
   
    if(index == 0) {
        target1.classList.toggle('ans')
        buttons.classList.toggle('tg')
    }
    if(index == 1) {
        target2.classList.toggle('ans')
        buttons.classList.toggle('tg')
    }
    if(index == 2) {
        target3.classList.toggle('ans')
        buttons.classList.toggle('tg')
    }
    if(index == 3) {
        target4.classList.toggle('ans')
        buttons.classList.toggle('tg')
    }
})
})
