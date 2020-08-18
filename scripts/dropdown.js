const burger = document.querySelector('.burger')
const nav = document.querySelector('nav')
const exit = document.querySelector('.exit')
const dropdown = document.querySelector('.fa-chevron-down');
const menu = document.querySelector('.fa-bars')


let click =0;
burger.addEventListener('click', ()=>{
    click++;
    if(click == 1){
nav.classList = 'nav show';
menu.classList = 'fa fa-close';
    }
    else if(click ==2){
    nav.classList = 'nav hide';
    menu.classList = 'fa fa-bars';
    click = 0;
    }
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

