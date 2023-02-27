const emailRegex =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

function validateName()
{
    let name = document.getElementById("name").value
    if(name === "")
    {
        document.getElementById("nameError").innerText = "Name must not be blank"
    }
    else
    {
        document.getElementById("nameError").innerText = ""
    }
}

function validateEmail()
{
    let email = document.getElementById("email").value
    if(!email.match(emailRegex))
    {
        document.getElementById("emailError").innerText = "Invalid email"
    }
    else
    {
        document.getElementById("emailError").innerText = ""
    }
}

function validateDate()
{
    let date = document.getElementById("date").value.split('-')
    let currentDate = new Date().toISOString().split('T')[0].split('-')
    let isValid = true

    for(let i=0; i<3; i++)
    {
        if(!isNotAfter(date[i], currentDate[i]))
        {
           isValid = false;
           break;
        }
    }

    if(isValid)
    {
        document.getElementById("dateError").innerText = ""
    }
    else
    {
        document.getElementById("dateError").innerText = "Invalid date"
    }
}

function isNotAfter(time1, time2)
{
    if(time1 > time2)
    {
        return false
    }
    return true
}