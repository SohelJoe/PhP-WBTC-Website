const username = document.getElementById('userName')
const email = document.getElementById('email')
const password = document.getElementById('password')
const conPassword = document.getElementById('conPassword')
const form = document.getElementById('form')
const userNameError = document.getElementById('userNameError')
const emailError = document.getElementById('emailError')
const passwordError = document.getElementById('passwordError')
const conPassError = document.getElementById('conPassError')

form.addEventListener('submit',(e) => {
    let formError = 'false'
    
    if(username.value.length > 30){
        formError = 'true'
        userNameError.innerText = 'Username is Too Long, Please Check it.'
    }
    if(username.value.length < 2){
        formError = 'true'
        userNameError.innerText = 'Username is Too Short, Please Check it.'
    }
    if(password.value.length < 6){
        formError = 'true'
        passwordError.innerText = 'Password is Too Short, Please Check it.'
    }
    if(password.value != conPassword.value){
        formError = 'true'
        conPassError.innerText = "Password Doesn't Matching, Please Check it"
    }

    if(formError == 'true'){
        e.preventDefault()
    }
})