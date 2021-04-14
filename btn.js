'use strict';
const buttons = document.querySelectorAll('.button');
const btn2 = document.querySelector('.btn2');
const btn3 = document.querySelector('.btn3');
const btn4 = document.querySelector('.btn4');



buttons.forEach((button,key)=>(button.addEventListener('click', function(e){
    //console.log(e.target, key);
    document.querySelector(`#pre${key + 1}`).classList.toggle('d-none');

})))

btn2.addEventListener('click', (e) =>{

    btn2.classList.toggle('btn2--active');
})

btn3.addEventListener('click', (e) =>{

    btn3.classList.toggle('btn3--active');
})

btn4.addEventListener('click', (e) =>{

    btn4.classList.toggle('btn4--active');
})

