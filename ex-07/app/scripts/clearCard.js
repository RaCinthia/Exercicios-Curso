// Verifica se há carta na tela e a remove
function verifyIfHasElement() {

    var currentCard = document.querySelector('.card')
    var currentPost = document.querySelector('.post-content')

    // Cards
    if(currentCard) {
        currentCard.remove()

    }

    // Posts
    if(currentPost) {
        currentPost.remove()
    }

}

export { verifyIfHasElement }