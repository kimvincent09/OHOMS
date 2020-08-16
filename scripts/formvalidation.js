class Committee{
    constructor(name, email, password, property, address){
        this.name = name;
        this.email = email;
        this.password = password;
        this.property = property;
        this.address = address;
    }
}



document.querySelector('#signup').addEventListener('submit', (e)=>{
// var xhr = new XMLHttpRequest();
// xhr.open('POST', 'includes/signup.inc.php', true);
// xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
// let params = "name="+name+"&email="+email+"&password="+password+"&property="+property+"&address="+address;
// xhr.onload = function(){
//         console.log(this.responseText)

//     }
// xhr.send(params);
const name = document.querySelector('#name').value,
email = document.querySelector('#email').value,
password = document.querySelector('#password').value,
property = document.querySelector('#property').value,
address = document.querySelector('#address').value;

const committee = new Committee(name, email, password, property, address)

if(name=='' || email == '' || password == '' || property == '' || address == ''){
    setTimeout(function(){
        document.querySelector('.alert').remove();
        },3000)
    


}
    e.preventDefault
})
