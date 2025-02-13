// Simula o envio do formulário
async function simulateRegistration(usersData) {
    
    // Retorna uma Promise
    return new Promise((resolve, reject) => {
        
        setTimeout(() => {

            // Define se deu certo com um número maior que 0.5
            const itWorked = Math.random() > 0.5;

            if(itWorked) {
                resolve(
                    alert('Dados cadastrados com sucesso.'), 
                    form.reset() // Reseta os campos do formulário
                )
            } else {
                reject(alert('Erro no envio dos dados, tente novamente.'))
            }

        }, 2000)

    })

}

export { simulateRegistration }