import { breedsOptions, catCard, catPost } from '/app/scripts/createComponents.js'
import { verifyIfHasElement } from '/app/scripts/clearCard.js'

const randomUrl = 'https://api.thecatapi.com/v1/images/search'

var breedsArray = []
var randomCat
var urlImage

// Retorna as informações de uma imagem especificada pelo id
async function getDataImage(id) {
    
    const catBreedsIdURL = `https://api.thecatapi.com/v1/images/search?breed_ids=${id}`
    const res = (await fetch(catBreedsIdURL)).json()
    
    var image = await res // Recebe array de uma posição [0] com altura, id, url e largura
    urlImage = image[0].url
    return urlImage
    
}

// Requisição para todas as raças de gatos
async function getCatBreeds() {
    const res = await fetch('https://api.thecatapi.com/v1/breeds')
    
    breedsArray = await res.json()
    
    breedsOptions(breedsArray)
    
}

// Requisição de uma imagem aleatória
async function getRandomCat() {

    // Resposta e cabeçalho
    const res = await fetch(randomUrl, {
        method: 'GET',
        headers: {
            'x-API-key': 'live_jhEkGQmTqit7xxm5TwMRXb12Ah49pkbSTX5rfUwWS6FcpXzW2zP9wSazUh69zqKQ'
        }
    })

    // Aguarde a resposta em json e atribua essa resposta à variável
    randomCat = await res.json()
    return catPost(randomCat[0].url)

}


window.search = async function() {
    
    await verifyIfHasElement()
    
    await getRandomCat()
    
}

// window define a função "setData" globalmente
window.setData = async function(id) {
    
    await verifyIfHasElement()
    
    if(id != 0) {
        await getDataImage(id)
        catCard(id, breedsArray, urlImage)
    } else {
        return
    }
    
}
/*
* - Por que isso?
* Quando o script é do tipo módulo (type="module"), funções não são
* adicionadas no escopo global
*/


// Troca a imagem
window.toggleLike = function() {

    const likeBtn = document.querySelector('.like')
    const heart = '/app/assets/images/heart.png'
    const heartFilled = '/app/assets/images/heart-filled.png'

    var likeBtnSrc = likeBtn.getAttribute('src')

    if(likeBtnSrc == heart) {
        likeBtn.setAttribute('src', heartFilled)
        likeBtn.classList.add('heart-animate')
    } else 
    if(likeBtnSrc == heartFilled) {
        likeBtn.setAttribute('src', heart)
        likeBtn.classList.remove('heart-animate')
    }
    
}


getCatBreeds()