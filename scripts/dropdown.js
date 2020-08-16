const burger = document.querySelector('.burger')
const nav = document.querySelector('nav')
const exit = document.querySelector('.exit')
const dropdown = document.querySelector('.fa-chevron-down');


let click =0;
burger.addEventListener('click', ()=>{
nav.classList = 'nav show';


})
exit.addEventListener('click', ()=>{
    nav.classList = 'nav hide';
})

document.querySelector('.members').addEventListener('click', ()=>{
    click++;
    if (click ==1){
document.querySelector('ol').classList.remove('conceal');
dropdown.classList = 'fa fa-chevron-right'
    }
    if (click == 2){
        document.querySelector('ol').classList.add('conceal')
        dropdown.classList = 'fa fa-chevron-down'
        click = 0;
    }
})

