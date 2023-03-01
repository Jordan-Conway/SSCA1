const emailRegex =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

let nameError = true
let emailError = true
let dateError = true
let messageError = true

window.onload = () =>{
    document.getElementById("date").valueAsDate = new Date()
    disableSubmit()
}

function canSubmit(){
    if(nameError || emailError || dateError || messageError){
        disableSubmit()
    }
    else{
        enableSubmit()
    }
}

function validateName()
{
    let name = document.getElementById("name").value
    if(name === "")
    {
        document.getElementById("nameError").innerText = "Name must not be blank"
        nameError = true
    }
    else
    {
        document.getElementById("nameError").innerText = ""
        nameError = false
    }
    canSubmit()
}

function validateEmail()
{
    let email = document.getElementById("email").value
    if(!email.match(emailRegex))
    {
        document.getElementById("emailError").innerText = "Invalid email"
        emailError = true
    }
    else
    {
        document.getElementById("emailError").innerText = ""
        emailError = false
    }
    canSubmit()
}

function validateDate()
{
    let submittedDate = new Date(document.getElementById("date").value)
    let currentDate = new Date()
    currentDate.setHours(0)
    currentDate.setMinutes(0)
    currentDate.setSeconds(0)
    let isValid = false

    if(submittedDate <= currentDate){
        isValid = true
    }

    if(isValid)
    {
        document.getElementById("dateError").innerText = ""
        dateError = false
    }
    else
    {
        document.getElementById("dateError").innerText = "Invalid date"
        dateError = true
    }
    canSubmit()
}

function validateMessage(){
    let message = document.getElementById("message").value
    if(message != ""){
        messageError = false
        document.getElementById("messageError").innerText = ""
    }
    else{
        messageError = true
        document.getElementById("messageError").innerText = "Message cannot be empty"
    }
    canSubmit()
}

function disableSubmit(){
    document.getElementById("contact-form-submit").disabled = true
}

function enableSubmit(){
    document.getElementById("contact-form-submit").disabled = false
}