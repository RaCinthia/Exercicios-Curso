const breedSelect = document.querySelector('#breed-select')
const breedsCard = document.querySelector('.breeds-card')
const postContainer = document.querySelector('.post-container')

var name
var description
var lifeSpan
var temperament

function breedsOptions(breeds) {

    breeds.forEach(breed => {
        breedSelect.innerHTML += `<option value="${ breed.id }">${ breed.name }</option>`
    })

}

function catCard(id, catBreeds, urlImage) {

    const cardDiv1 = document.createElement('div')
    const cardImg = document.createElement('img')
    const cardDiv2 = document.createElement('div')
    const cardTitle = document.createElement('h3')
    const cardParagraph2 = document.createElement('p')
    const cardParagraph3 = document.createElement('p')
    const cardParagraph4 = document.createElement('p')

    // Atributos
    cardDiv1.setAttribute('class', 'card')
    cardDiv1.setAttribute('id', `${id}`)
    cardImg.setAttribute('src', urlImage)
    cardImg.setAttribute('class', 'card-image')
    cardDiv2.setAttribute('class', 'card-info')
    cardTitle.setAttribute('class', 'card-paragraph')
    cardParagraph2.setAttribute('class', 'card-paragraph desc')
    cardParagraph3.setAttribute('class', 'card-paragraph')
    cardParagraph4.setAttribute('class', 'card-paragraph')

    getInfo(id, catBreeds)

    // Conteúdos
    cardTitle.innerHTML = `${ name }`
    cardParagraph2.innerHTML = `${ description }`
    cardParagraph3.innerHTML = `<strong>Tempo de vida</strong>: ${ lifeSpan } anos`
    cardParagraph4.innerHTML = `<strong>Temperamento</strong>: ${ temperament }`

    // Atribuição de filhos
    cardDiv2.append(cardTitle, cardParagraph2, cardParagraph3, cardParagraph4)
    cardDiv1.append(cardImg, cardDiv2)
    breedsCard.append(cardDiv1)

}

function catPost(imgSrc) {

    const postContent = document.createElement('div')
    const postCatImg = document.createElement('img')
    const postButtons = document.createElement('div')
    const postLike = document.createElement('img')

    // Atributos
    postContent.setAttribute('class', 'post-content')
    postCatImg.setAttribute('src', imgSrc)
    postCatImg.setAttribute('class', 'post-image')
    postButtons.setAttribute('class', 'post-buttons')
    postLike.setAttribute('src', '/app/assets/images/heart.png')
    postLike.setAttribute('onclick', 'toggleLike()')
    postLike.setAttribute('alt', 'Curtir')
    postLike.setAttribute('class', 'like')

    // Atribuição de filhos
    postButtons.append(postLike)
    postContent.append(postCatImg, postButtons)
    postContainer.append(postContent)

}

function getInfo(id, catBreeds) {

    catBreeds.forEach(breed => {
        if(breed.id == id) {
            name = breed.name
            description = breed.description
            lifeSpan = breed.life_span
            temperament = breed.temperament
        }
    })
    
}

export { breedsOptions, catCard, catPost }