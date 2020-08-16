const eye = document.querySelector('.fa-eye-slash'),
password = document.querySelector('#password');
let clicks = 0;
document.querySelector('.fa-eye-slash').addEventListener('click', ()=>{
clicks++
    if(clicks == 1){
eye.className = 'fa fa-eye'
password.type = 'name'
}
else if(clicks == 2){
    eye.className='fa fa-eye-slash'
    clicks = 0;
    password.type = 'password'
}
})
