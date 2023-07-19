const email= document.getElementById('email')
const password= document.getElementById('password')
const form= document.getElementById('form')

form.addEventListener('submit',(e) => {
    let messages=[]
    if(email.value === '' || email.value == null){
        messages.push('Email is required')
    }
    if(password.value.length <= 3){
        messages.push('password must be longer than 3 characters')
    }
    
})
