const uploadBtn = document.getElementById('file-input-btn')
const uploadInput = document.getElementById('file-input')
const mainImg = document.getElementById('main-image')
const imageName = document.querySelector('.image-name')

uploadBtn.addEventListener('click', () => {
    uploadInput.click()
})

// Leitura do arquivo
function readFile(file) {

    return new Promise((resolve, reject) => {

        // Inicializa o leitor
        const reader = new FileReader();

        // Define o que acontece quando a leitura é completada com sucesso
        reader.onload = () => {
            resolve({ url: reader.result, name: file.name })
        }

        // Define o que acontece em caso de erro na leitura do arquivo
        reader.onerror = () => {
            // Rejeita a Promise com uma mensagem de erro
            reject(`Erro na leitura do arquivo ${file.name}`)
        }

        // Inicia a leitura do arquivo como uma URL data (base64)
        reader.readAsDataURL(file)

    })

}

uploadInput.addEventListener('change', async (event) => {

    const file = event.target.files[0]

    // Verifica propriedades do arquivo (tipo e tamanho)
    if(file.type != 'image/png' && file.type != 'image/jpg' && file.type != 'image/jpeg') {
        alert('O arquivo selecionado não é uma imagem.')
    }

    if(file.size > 2 * 1024 * 1024) {
        alert('O tamanho máximo deve ser de 2MB.')
        return
    }

    // Se existir o arquivo, exiba-o na tela
    if(file) {

        try {
            
            const fileContent = await readFile(file)

            mainImg.src = fileContent.url
            mainImg.style.display = 'block'
            imageName.textContent = fileContent.name
            imageName.style.display = 'block'

        } catch(error) {
            console.error('Erro na leitura do arquivo.')
        }

    }

})

// // Se clicar no nome da imagem, a remove
// imageName.addEventListener('click', () => {

// })