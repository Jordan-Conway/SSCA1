const emailRegex =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

let nameError = true
let emailError = true
let dateError = true

window.onload = function validate(){
    validateName()
    validateEmail()
    validateDate()
    if(nameError || emailError || dateError){
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
}

function disableSubmit(){
    document.getElementById("contact-form-submit").disabled = true
}

function enableSubmit(){
    document.getElementById("contact-form-submit").disabled = false
}