const errorName = document.querySelector('.error-name')
const errorEmail = document.querySelector('.error-email')
const errorPassword = document.querySelector('.error-password')
const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Verifica se os campos estão preenchidos corretamente
function verifyFields(nameInput, emailInput, passwordInput) {
    var isValid = true

    // Verifica se o conteúdo de #name é vazio
    if(nameInput.value.trim() === '') {
        showMessage('errorName')
        isValid = false
    } else {
        errorName.style.display = 'none'
    }

    // Verifica se o conteúdo de #email é vazio
    if(emailInput.value.trim() == '') {
        showMessage('errorEmail')
        isValid = false
    } else if (!regexEmail.test(emailInput.value.trim())) {
        errorEmail.textContent = 'E-mail inválido';
        isValid = false
    } else {
        errorEmail.style.display = 'none'
    }

    // Verifica se o conteúdo de #password é vazio
    if(passwordInput.value.trim() == '') {
        showMessage('errorPassword')
        isValid = false
    } else if(passwordInput.value.length < 6) {
        errorPassword.style.display = 'block'
        errorPassword.textContent = 'A senha deve conter no mínimo 6 caracteres'
        isValid = false
    } else {
        errorPassword.style.display = 'none'
    }

    return isValid

}

// Recebe o nome do elemento que deu erro e manda uma mensagem de erro
function showMessage(element) {

    switch(element) {

        case 'errorName':
            errorName.style.display = 'block'
            errorName.textContent = 'O nome é obrigatório'
        break
        case 'errorEmail':
            errorEmail.style.display = 'block'
            errorEmail.textContent = 'O email é obrigatório'
        break
        case 'errorPassword':
            errorPassword.style.display = 'block'
            errorPassword.textContent = 'Defina uma senha'
        break
            
    }

}

export { verifyFields }