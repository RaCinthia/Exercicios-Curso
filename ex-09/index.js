import { verifyFields } from '/scripts/verifyFields.js'
import { simulateRegistration } from '/scripts/registrationSimulation.js'

const nameInput = document.getElementById('name')
const emailInput = document.getElementById('email')
const passwordInput = document.getElementById('password')
const form = document.getElementById('form')

var userName
var userEmail
var userPassword

var usersData = {
    name,
    email,
    password
}

// Ouvinte para o envio do formulário
form.addEventListener('submit', (event) => {

    // Previne comportamentos padrões, caso venham a ocorrer
    event.preventDefault()

    var isValid = verifyFields(nameInput, emailInput, passwordInput)

    if(isValid) {
        form.requestSubmit()
        getUserData(nameInput, emailInput, passwordInput)
        simulateRegistration()
    } else {
        alert('Os dados não puderam ser enviados. Verifique os campos e tente novamente.')
    }    

})

// Atribui os valores dos campos ao objeto "usersData"
function getUserData(nameInput, emailInput, passwordInput) {

    // Atribui os valores dos inputs às variáveis
    userName = nameInput.value
    userEmail = emailInput.value
    userPassword = passwordInput.value

    // Adiciona as variáveis no objeto 'usersData'
    usersData.name = userName
    usersData.email = userEmail
    usersData.password = userPassword

}
