const emailRegex =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

let firstNameError = true
let lastNameError = true;
let emailError = true
let dateError = true
let messageError = true

window.onload = () =>{
    document.getElementById("date").valueAsDate = new Date()
    disableSubmit()
}

function canSubmit(){
    if(firstNameError || lastNameError || emailError || dateError || messageError){
        disableSubmit()
    }
    else{
        enableSubmit()
    }
}

function validateFirstName()
{
    let name = document.getElementById("firstName").value
    if(name === "")
    {
        document.getElementById("firstNameError").innerText = "First name must not be blank"
        firstNameError = true
    }
    else
    {
        document.getElementById("firstNameError").innerText = ""
        firstNameError = false
    }
    canSubmit()
}

function validateLastName()
{
    let name = document.getElementById("lastName").value
    if(name === "")
    {
        document.getElementById("lastNameError").innerText = "Last name must not be blank"
        lastNameError = true
    }
    else
    {
        document.getElementById("lastNameError").innerText = ""
        lastNameError = false
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